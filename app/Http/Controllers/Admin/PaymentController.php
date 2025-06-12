<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PaymentSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function paymentSettings()
    {
        $data['payment'] = DB::table('payment_settings')->get();
        return view('admin.payment_settings', $data);
    }
    // Display a listing of the resource
    public function index()
    {
        $payment = PaymentSetting::all(); // Retrieve all PaymentSettingcurrencies
        return view('PaymentSettings.index', compact('payment')); // Adjust view name as necessary
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('PaymentSettings.create'); // Adjust view name as necessary
    }

    // Store a newly created resource in storage
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'deposit_option' => 'required|string|max:255',
    //         // Add more validation rules as necessary
    //     ]);

    //     PaymentSetting::create($request->all()); // Adjust to match your fillable fields

    //     return redirect()->route('PaymentSettings.index')->with('success', 'PaymentSettingcurrency added successfully.');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'wallet_address' => 'required|string|max:255',
            'wallet_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for image file
        ]);
    
        // Map form data to database column names
        $data = [
            'name' => $request->input('name'),
            'address' => $request->input('wallet_address'),
        ];
    
        // Handle file upload for wallet_logo and map it to 'image' column
        if ($request->hasFile('wallet_logo')) {
            $data['image'] = $request->file('wallet_logo')->store('wallet_logos', 'public');
        }
    
        PaymentSetting::create($data);
    
        return redirect()->route('payment.settings')->with('success', 'Payment setting added successfully.');
    }
    

    // // Show the form for editing the specified resource
    // public function edit(PaymentSetting $PaymentSetting)
    // {
    //     // $payment =  PaymentSetting::where('id', $PaymentSetting)->first();
    //     return view('admin.edit_payment', compact('PaymentSetting')); // Adjust view name as necessary
    // }

    public function edit(PaymentSetting $crypto)
{
    return view('admin.edit_payment', compact('crypto')); // Use 'crypto' as the variable name
}


    

public function update(Request $request, PaymentSetting $crypto)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:899', // Use 'address' to match form input name
    ]);

    // Update the fields in the database
    $crypto->update([
        'name' => $request->input('name'),
        'address' => $request->input('address'),
    ]);

    return redirect()->route('payment.settings')->with('success', 'Payment setting updated successfully.');
}


    // Remove the specified resource from storage
    public function destroy(PaymentSetting $PaymentSetting)
    {
        $PaymentSetting->delete();

        return redirect()->route('payment.settings')->with('success', 'PaymentSettingcurrency deleted successfully.');
    }
}
