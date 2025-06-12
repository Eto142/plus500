<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default, this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'documentType' => 'required|string',
            'kycDocument' => 'required|file|mimes:jpeg,png,pdf|max:9000',
            'otherDocument' => 'nullable|string',
        ]);

        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

            // Handle the file upload for KYC document
    $filename = null; // Initialize $filename

    if (isset($data['kycDocument']) && $data['kycDocument']->isValid()) {
        $filename = uniqid() . '_' . $data['kycDocument']->getClientOriginalName(); // Create unique filename
        $data['kycDocument']->move(public_path('uploads/kyc'), $filename); // Move file to the desired directory
    }
        
        // Create the user instance
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'document_type' => $data['documentType'], // Corrected from $data->documentType
            'other_document' => $data['otherDocument'] ?? null, // Null if not provided
            'document_path' => 'uploads/kyc/' . $filename, // Ensure $filename exists and is sanitized
        ]);

        // Generate and save the verification code
        $validToken = rand(1000, 9999);
        $user->verification_code = $validToken;
        $user->verification_expiry = now()->addMinutes(10);
        $user->save();

    //     // Prepare the verification email message
    //     $vmessage = "
    //     <p>Hello {$user->name},</p>
    //     <p>We are so happy to have you on board. We need to verify your email address.</p>
    //     <p>Use this code to verify your email: <strong>{$user->verification_code}</strong></p>
    //     <p>Please note that this code will expire in 10 minutes.</p>
    // ";

    //     // Send the verification email
    //     Mail::to($user->email)->send(new VerificationEmail($vmessage));

        return $user;
    }
}
