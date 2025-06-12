<?php

namespace App\Http\Controllers\User;

use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class WithdrawalController extends Controller
{
    // Show the withdrawal form
    public function create()
    {
        $userId = Auth::id();

        $data['usd_sum'] = Transaction::where('user_id', $userId)
        ->sum('usd_value');





        return view('user.withdrawal.create',$data);
    }
    

       // Show the withdrawal form
public function makeWithdrawal(Request $request)
{
    $userId = Auth::id();

    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'amount' => 'required|numeric|min:0',
        'method' => 'string',
        'crypto' => 'string',
        'wallet' => 'string',
        'bank_name' => 'string',
        'account_name' => 'string',
        'account_number' => 'string',
        'routing_number' => 'string',
    ]);

    // // Check if validation fails
    // if ($validator->fails()) {
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }

    // Retrieve form input
    $amount = $request->input('amount');
    $method = $request->input('method');
    $crypto = $request->input('crypto');
    $wallet = $request->input('wallet');
    $bank_name = $request->input('bank_name');
    $account_name = $request->input('account_name');
    $account_number = $request->input('account_number');
    $routing_number = $request->input('routing_number');

    // Calculate the user's total balance in USD
    $usd_sum = Transaction::where('user_id', $userId)->sum('usd_value');

    // Check if the withdrawal amount exceeds the user's balance
    if ($amount > $usd_sum) {
        return redirect()->back()->withErrors([
            'amount' => 'The amount exceeds your current balance of ' . $usd_sum . ' USD.'
        ])->withInput();
    }

    // Proceed with creating the withdrawal
    Withdrawal::create([
        'user_id' => Auth::id(),
        'method' => $method,
        'amount' => $amount,
        'crypto' => $crypto,
        'wallet' => $wallet,
        'bank_name' => $bank_name,
        'account_name' => $account_name,
        'account_number' => $account_number,
        'routing_number' => $routing_number,
        'status' => 'pending', // Set the initial status to pending
    ]);

    // Prepare data for the confirmation page
    $data = [
        'method' => $method,
        'crypto' => $crypto,
        'wallet' => $wallet,
        'bank_name' => $bank_name,
        'account_name' => $account_name,
        'account_number' => $account_number,
        'routing_number' => $routing_number,
        'amount' => $amount,
        'transactionId' => uniqid('txn_'), // Generate a unique transaction ID
    ];

    // Return the confirmation view and pass the data with a status message
    return view('user.withdrawal.confirm', $data)->with([
        'status' => 'Payment submitted successfully!',
    ]);
}


    public function wallet()
    {
        $userId = Auth::id();

        $data['usd_sum'] = Transaction::where('user_id', $userId)
        ->sum('usd_value');
        return view('user.withdrawal.withdraw-wallet',$data);
    }

    // Handle form submission and show confirmation receipt
    public function confirm(Request $request)
    {
        // Validate the request
        $request->validate([
            'crypto' => 'required|string',
            'wallet' => 'required|string',
            'amount' => 'required|numeric|min:10', // Example validation for amount
        ]);

        // Generate a random transaction ID (in reality, this would come from a database or payment gateway)
        $transactionId = strtoupper(uniqid('TXN-'));

        // Pass the details to the confirmation view
        return view('user.withdrawal.confirm', [
            'transactionId' => $transactionId,
            'crypto' => $request->crypto,
            'wallet' => $request->wallet,
            'amount' => $request->amount,
        ]);
    }
}
