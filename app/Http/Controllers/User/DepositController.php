<?php

namespace App\Http\Controllers\User;

use App\Models\Deposit;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\PaymentSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Sum of investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->sum('usd_value');

        $data['cryptos'] =  PaymentSetting::get();

        return view('user.deposit.home', $data);
    }

    public function Pay()
    {
        $userId = Auth::id();

        // Sum of investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->sum('usd_value');

        $data['cryptos'] =  PaymentSetting::get();

        return view('user.deposit.pay', $data);
    }


    public function handleDeposit(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([

            'crypto_method' => 'nullable|string',

        ]);

        $data['method'] =  PaymentSetting::where('id', $id)->first();


        // Assuming Wallet model stores details about payment methods (like BTC, ETH, etc.)
        // Use where to search for a wallet by its payment mode (code or type)
        // $wallet = Wallet::first();

        // Pass all necessary data to the view
        return view('user.deposit.payment', $data);
    }


    public function handlePayment(Request $request)
    {
        $userId = Auth::id();
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
            'payment_mode' => 'string',
            'proof' => 'sometimes|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validate the proof of payment if uploaded
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Retrieve form input
        $depositType = $request->input('deposit_type');
        $data['amount'] = $request->input('amount');
        $paymentMode = $request->input('payment_mode');

        // Initialize filePath variable
        $filePath = null;

        // Handle the proof file upload if present
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $filePath = $file->store('payment_proofs', 'public'); // Store the file in the 'payment_proofs' directory
        }

        // // Ensure the user is authenticated
        // if (Auth::check()) {
        //     // Create the deposit record in the database
        //     Deposit::create([
        //         'user_id' => Auth::id(),
        //         'deposit_type' => $paymentMode,
        //         'amount' => $amount,
        //         'payment_mode' => $paymentMode,
        //         'status' => 'pending', // Set the initial status to pending
        //         'proof' => $filePath,  // Save the file path if uploaded
        //     ]);



        //     // Redirect to the deposits page with a success message
        //     return redirect()->route('user.pay.page')->with([
        //         'status' => 'Payment submitted successfully!',
        //         'amount' => $amount
        //     ]);
        // }


        Deposit::create([
                    'user_id' => Auth::id(),
                    'deposit_type' => $paymentMode,
                    'amount' => $data['amount'],
                    'payment_mode' => $paymentMode,
                    'status' => 'pending', // Set the initial status to pending
                    'proof' => $filePath,  // Save the file path if uploaded
                ]);
    
        // Sum of investments
        $data['usd_sum'] = Transaction::where('user_id', $userId)
            ->sum('usd_value');

        $data['payment'] =  PaymentSetting::get();

        // If user is not authenticated, redirect back with an error
        return view('user.deposit.pay', $data)->with([
            'status' => 'Payment submitted successfully!',

        ]);
    }
}
