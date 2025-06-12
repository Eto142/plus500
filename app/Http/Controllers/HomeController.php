<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\KYC;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function testing()
    {
        $userId = Auth::id();

        // Sum of investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->sum('usd_value');

        // Get the user model
        $user = Auth::user(); // Retrieve the authenticated user

        // Get the user's currency
        $userCurrency = $user->currency; // E.g., 'EUR', 'GBP', etc.
        $usdValue = $data['usd_sum']; // The value in USD

        // Convert the USD value to the user's currency
        // $convertedValue = $this->convertToUserCurrency($usdValue, $userCurrency);

        $usdValue = 100; // Example amount in USD
        $currency = 'EUR'; // Target currency, e.g., EUR

        // Call the conversion function
        //$convertedValue = $this->convertToUserCurrency($usdValue, $currency);

        // Add the converted value to the data array
        //$data['converted_value'] = $convertedValue;



        return view('testing', $data);
    }


    public function welcome()
    {
        $userId = Auth::id();

        // Sum of investments
        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null


        // Get the user model
        $user = Auth::user(); // Retrieve the authenticated user

        // Get the user's currency
        $userCurrency = $user->currency; // E.g., 'EUR', 'GBP', etc.
        $usdValue = $data['usd_sum']; // The value in USD

        // Convert the USD value to the user's currency
        // $convertedValue = $this->convertToUserCurrency($usdValue, $userCurrency);

        $usdValue = 100; // Example amount in USD
        $currency = 'EUR'; // Target currency, e.g., EUR

        // Call the conversion function
        //$convertedValue = $this->convertToUserCurrency($usdValue, $currency);

        // Add the converted value to the data array
        //$data['converted_value'] = $convertedValue;



        return view('user.welcome', $data);
    }



    public function index()
    {
        $userId = Auth::id();

        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null


        // Get the user model
        $user = Auth::user(); // Retrieve the authenticated user

        // Get the user's currency
        $userCurrency = $user->currency; // E.g., 'EUR', 'GBP', etc.
        $usdValue = $data['usd_sum']; // The value in USD

        // Convert the USD value to the user's currency
        // $convertedValue = $this->convertToUserCurrency($usdValue, $userCurrency);

        $usdValue = 100; // Example amount in USD
        $currency = 'EUR'; // Target currency, e.g., EUR

        // Call the conversion function
        //$convertedValue = $this->convertToUserCurrency($usdValue, $currency);

        // Add the converted value to the data array
        //$data['converted_value'] = $convertedValue;



        return view('user.home', $data);
    }


    // private function convertToUserCurrency($usdValue, $currency)
    // {
    //     // Exchangerate.host endpoint for USD as the base currency
    //     $apiUrl = "https://api.exchangerate.host/convert?from=USD&to={$currency}";

    //     // Fetch exchange rate for USD to the selected currency
    //     $response = Http::get($apiUrl);

    //     if ($response->ok() && isset($response['result'])) {
    //         // Calculate the converted value
    //         return $usdValue * $response['result'];
    //     } else {
    //         throw new Exception("Unable to retrieve exchange rate.");
    //     }
    // }


    private function convertToUserCurrency($usdValue, $currency)
    {
        // Exchangerate.host endpoint for USD as the base currency, with amount specified
        $apiUrl = "https://api.exchangerate.host/convert?from=USD&to={$currency}&amount={$usdValue}";

        // Fetch exchange rate for USD to the selected currency
        $response = Http::get($apiUrl);

        if ($response->ok() && isset($response['result'])) {
            // Return the converted value directly from the response
            return $response['result'];
        } else {
            throw new \Exception("Unable to retrieve exchange rate.");
        }
    }



    // Step 1: Show the list of available deposit methods (cryptocurrencies)
    public function showDepositMethods()
    {
        // List of cryptocurrencies and their corresponding images
        $cryptos = [
            ['name' => 'Bitcoin', 'image' => 'bitcoin.png'],
            ['name' => 'Ethereum', 'image' => 'ethereum.png'],
            ['name' => 'Litecoin', 'image' => 'litecoin.png'],
            ['name' => 'USDT', 'image' => 'usdt.png'],
            ['name' => 'Ripple', 'image' => 'ripple.png'],
            // Add other cryptocurrencies as needed...
        ];

        return view('deposits.methods', compact('cryptos'));
    }

    // Step 2: Show the specific deposit method page with wallet address and QR code
    public function showPaymentPage($crypto)
    {
        // This is where you would fetch the correct wallet address and QR code based on the crypto
        // For example purposes, we'll use hardcoded values. In a real app, you'd fetch from a database.
        $wallets = [
            'Bitcoin' => [
                'address' => '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa',
                'qr_code' => 'bitcoin_qr.png'
            ],
            'Ethereum' => [
                'address' => '0x32Be343B94f860124dC4fEe278FDCBD38C102D88',
                'qr_code' => 'ethereum_qr.png'
            ],
            'Litecoin' => [
                'address' => 'LcHKjcQf25YqESn8xrmhg5cwYUR5fbJb8j',
                'qr_code' => 'litecoin_qr.png'
            ],
            'USDT' => [
                'address' => 'TFL1jGpeASdAF7R4J5XBhjCC9YrYrmytfQ',
                'qr_code' => 'usdt_qr.png'
            ],
            // Add more wallets and QR codes for other cryptocurrencies...
        ];

        if (!isset($wallets[$crypto])) {
            // If the crypto is not found, redirect to deposit methods
            return redirect()->route('deposit.methods')->with('error', 'Invalid cryptocurrency method.');
        }

        // Fetch the wallet address and QR code for the selected crypto
        $walletAddress = $wallets[$crypto]['address'];
        $qrCodeImage = $wallets[$crypto]['qr_code'];
        $cryptoName = $crypto;

        return view('deposits.payment', compact('cryptoName', 'walletAddress', 'qrCodeImage'));
    }

    // Step 3: Handle the proof of payment upload
    public function uploadPaymentProof(Request $request)
    {
        // Validate the request
        $request->validate([
            'proof' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Proof must be an image or PDF file, max 2MB
            'crypto_method' => 'required|string',
            'wallet_address' => 'required|string'
        ]);

        // Handle the file upload
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_proof.' . $extension;
            $file->move('uploads/payment_proofs/', $filename);

            // Save proof info to the database (optional)
            // You might want to store the file path and other details in a 'deposits' or 'transactions' table
            // Assuming you have a 'Deposit' model...
            /*
             Deposit::create([
                 'user_id' => auth()->id(),
                 'crypto_method' => $request->crypto_method,
                 'wallet_address' => $request->wallet_address,
                 'payment_proof' => 'uploads/payment_proofs/' . $filename,
                 'status' => 'pending', // Set to pending until admin approval
             ]);
             */

            // Redirect back with success message
            return redirect()->route('deposit.methods')->with('success', 'Payment proof uploaded successfully.');
        }

        return back()->with('error', 'Failed to upload payment proof. Please try again.');
    }



    public function Profile()
    {
        $userId = Auth::id();

        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null

        return view('user.profile', $data);
    }

    public function News()
    {
        $userId = Auth::id();

        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null

        return view('user.news', $data);
    }

    public function Calculator()
    {
        $userId = Auth::id();

        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null

        return view('user.calculator', $data);
    }

    public function Market()
    {
        $userId = Auth::id();
        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null

        return view('user.market', $data);
    }

    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'You have been logged out successfully.');
    }

    
    // public function logOut()
    // {
    //     Auth::guard('user')->logout();
    //     return redirect('/user/login');
    // }

    public function Tradehistory()
    {
        $userId = Auth::id();

        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null

        $data['transactions'] = Transaction::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user.tradehistory', $data);
    }


    public function Orderbook()
    {
        $userId = Auth::id();

        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null

        return view('user.orderbook', $data);
    }


    public function suspendAccount()
    {
        $userId = Auth::id();

        // Net sum of USD investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_sum')
            ->value('net_usd_sum') ?? 0; // Default to 0 if null

        return view('user.account-suspended', $data);
    }



    public function personalDp(Request $request)
    {


        $update = Auth::user();



        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/display', $filename);
            $update->photo =  $filename;
        }
        $update->update();

        return back()->with('status', 'Personal Details Updated Successfully');
    }



    //   public function uploadProfile(Request $request)

    //   {


    //       $update = Auth::user();
    //       if ($request->hasFile('image')) {
    //           $file = $request->file('image');

    //           $ext = $file->getClientOriginalExtension();
    //           $filename = time() . '.' . $ext;
    //           $file->move('user/uploads/id', $filename);
    //           $update->photo =  $filename;
    //       }

    //       $update->update();

    //       return redirect('photo')->with('status', 'Profile Picture Updated!');
    //   }






    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }



    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'address' => 'string'

        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];


        $user->update();
        return back()->with('status', 'Profile Updated');
    }



    // Save the selected country to the session
    public function saveCountry(Request $request)
    {
        // Validate the input
        $request->validate([
            'country' => 'required|string'
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Save the selected country to the user's profile in the database
        $user->country = $request->country;
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

        // Respond with JSON indicating success
        return response()->json(['success' => true]);
    }
    public function verifyCode(Request $request)
    {
        $request->validate([
            'verification_code' => ['required', 'integer'],
        ]);

        $user = Auth::user();

        if ($user->verification_code === $request->verification_code) {
            if ($user->verification_expiry) {
                $user->email_verify = 1;
                $user->save();

                $full_name = $user->fname . ' ' . $user->lname;
                $email = $user->email;

                $message = "
                    <p style='line-height: 24px; margin-bottom:15px;'>Hello $full_name,</p>
                    <p>We are so happy to have you on board. Thank you for joining us.</p>
                    <p>
                        <a href='https://cytopiacapital.com/home' style='display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;'>
                            Continue To Your Account
                        </a>
                    </p>
                    <p>Don't hesitate to get in touch if you have any questions; we'll always get back to you.</p>
                ";

                // Uncomment this to send the email
                // Mail::to($email)->send(new WelcomeEmail($message));

                return response()->json(['success' => true, 'message' => 'Your email has been verified successfully!']);
            } else {
                return response()->json(['success' => false, 'message' => 'The verification code has expired. Please request a new one.'], 400);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'The verification code is incorrect.'], 400);
        }
    }

    public function resendVerificationCode(Request $request)
    {
        $user = Auth::user();

        $validToken = rand(1000, 9999);
        $user->verification_code = $validToken;
        $user->verification_expiry = now()->addMinutes(10);
        $user->save();

        $full_name = $user->fname . ' ' . $user->lname;
        $email = $user->email;

        $vmessage = "
            <p style='line-height: 24px; margin-bottom:15px;'>Hello $full_name,</p>
            <p>We just need to verify your email address before you can access Cytopia Capital.</p>
            <p>Use this code to verify your email: <strong>$validToken</strong></p>
            <p style='color: red;'>Please note that this code will expire in 10 minutes.</p>
            <p>Don't hesitate to get in touch if you have any questions; we'll always get back to you.</p>
        ";

        // Uncomment this to send the email
        Mail::to($email)->send(new VerificationEmail($vmessage));

        return response()->json(['success' => true, 'message' => 'A new verification code has been sent to your email.']);
    }


    public function uploadKYC(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'documentType' => 'required|string',
            'kycDocument' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'otherDocument' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        try {
            // Handle file upload
            if ($request->hasFile('kycDocument')) {
                $file = $request->file('kycDocument');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/kyc'), $filename);
            }

            // Save KYC details to database (example)
            // Save KYC details to the database
            KYC::create([
                'user_id' => Auth::id(), // Simplified to use Auth::id()
                'document_type' => $request->documentType, // Assumes you validated this field
                'other_document' => $request->otherDocument ?? null, // Null if not provided
                'document_path' => 'uploads/kyc/' . $filename, // Ensure $filename exists and is sanitized
            ]);



            return response()->json([
                'success' => true,
                'message' => 'KYC details uploaded successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while uploading KYC details. Please try again.'
            ]);
        }
    }




    // Save the selected country to the session
    public function saveCurrency(Request $request)
    {
        // Validate the input
        $request->validate([
            'currency' => 'required|string'
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Save the selected country to the user's profile in the database
        $user->currency = $request->currency;
        $user->save();


        // Respond with JSON indicating success
        return response()->json(['success' => true]);
    }
}
