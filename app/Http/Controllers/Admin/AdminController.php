<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\Trade;
use App\Models\Profit;
use App\Models\Deposit;
use App\Mail\DebitEmail;
use App\Models\Document;
use App\Models\Earnings;
use App\Models\Referral;
// use App\Models\Investment;
use App\Mail\CreditEmail;
use App\Models\Withdrawal;
use App\Mail\sendUserEmail;
use App\Models\Transaction;
use Illuminate\Http\Request;
// use App\Models\InvestmentPlan;
use App\Models\AccountBalance;
use App\Models\PaymentSetting;
use Illuminate\Support\Carbon;
use App\Models\WebsiteTemplate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\VerificationDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    /**
     * Display the admin dashboard with a list of all users.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $data['users'] = User::get();


        // Sum of pending deposits
        $data['pending_deposits_sum'] = Deposit::where('status', '0')->sum('amount');

        // Sum of successful deposits
        $data['total_deposits'] = Deposit::sum('amount');

        // Sum of pending withdrawals
        $data['pending_withdrawals_sum'] = Withdrawal::where('status', '0')->sum('amount');

        // Sum of successful withdrawals
        $data['total_withdrawals'] = Withdrawal::sum('amount');

        // sum total users
        $data['total_users'] = User::count();

        // sum total users
        // $data['suspended_users'] = User::where('account_suspended', '1')->count();

        $data['suspended_users'] = User::count();

        $data['template'] = WebsiteTemplate::first();

        return view('admin.home', $data);
    }

    public function manageUsersPage()
    {
        $data['users'] = User::get();


        return view('admin.manage_users', $data);
    }




    public function manageWithdrawalsPage()
    {

        $data['withdrawals'] = User::join('withdrawals', 'users.id', '=', 'withdrawals.user_id')
            ->get(['users.email', 'users.first_name', 'users.last_name', 'withdrawals.*']);

        return view('admin.manage_withdrawal', $data);
    }


    public function viewDeposit($id)
    {

        $data['proof']  = Deposit::findOrFail($id);

        return view('admin.proof', $data);
    }




    public function manageKycPage()
    {
        // Retrieve only users with KYC details (id_card_path and passport_photo_path are not null)
        $data['kyc'] = VerificationDocument::join('users', 'verification_documents.user_id', '=', 'users.id')
            ->select('verification_documents.*', 'users.name', 'users.email') // select additional fields as needed
            ->get();

        return view('admin.kyc', $data);
    }



    public function acceptKyc($id)
    {

        $user  = User::where('id', $id)->first();
        $user->kyc_status = 1;
        $user->save();
        return back()->with('message', 'Kyc Approved Successfully');
    }


    public function rejectKyc($id)
    {

        $user  = User::where('id', $id)->first();
        $user->kyc_status = 0;
        $user->save();
        return back()->with('message', 'Kyc Rejected Successfully');;
    }


    public function resetUserPassword($user_id)
    {

        $user = User::findOrFail($user_id);


        $user->update([
            'password' => Hash::make('user01236'),
        ]);

        return back()->with('message', 'Password has been reset successfully.');
    }


    public function clearAccount($id)
    {
        $user = User::find($id);
        if ($user) {

            // Delete related records (posts, comments, likes) associated with the user
            // $user->profits()->delete();
            $user->deposits()->delete();
            $user->transactions()->delete();
            // $user->earnings()->delete();
            $user->withdrawals()->delete();

            return back()->with('message', 'Records deleted successfully');
        } else {
            return back()->with('message', 'User Not Found');
        }
    }



    public function editUser(Request $request, User $user)
    {

        //$user = User::findOrFail($user_id);


        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',


        ]);

        $user->update([
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
        ]);

        return back()->with('message', 'user updated successfully.');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);

        if ($user) {
            $user->delete();
            return redirect()->route('manage.users.page')->with('message', 'User deleted successfully');
        }

        return redirect()->route('manage.users.page')->with('error', 'User not found');
    }


    public function newUser(Request $request)
    {

        $user = new User;
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->account_type = "Joint Account";
        $user->password = Hash::make($request['password']);
        $user->save();

        return back()->with('message', 'New User Created  Successfully');
    }



    public function sendMail(Request $request)
    {
        // Validate the request input
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = $request->message;

        // Prepare the data for the email (escaping any HTML tags for safety)
        $data = "<p>" . e($message) . "</p>";

        $subject = $request->subject;

        // Send the email using the SendUserEmail mailable
        Mail::to($request->email)->send(new SendUserEmail($data, $subject));

        // Redirect back with a success message
        return back()->with('status', 'Email successfully sent!');
    }





    /**
     * Display the user profile.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function viewUser($userId)
    {
        $data['user'] = User::where('id', $userId)
            ->first();;

        if (!$data['user']) {
            abort(404, 'User not found');
        }
        // Retrieve all deposits for the user 
        $data['deposits'] = Deposit::where('user_id', $userId)->get();

        // Sum of pending deposits
        $data['pending_deposits_sum'] = Deposit::where('user_id', $userId)
            ->where('status', 0) // Assuming '0' represents 'pending'
            ->sum('amount');

        // Sum of approved deposits
        $data['approved_deposits_sum'] = Deposit::where('user_id', $userId)
            ->where('status', 1) // Assuming '1' represents 'approved'
            ->sum('amount');

        // Retrieve all withdrawals for the user
        $data['withdrawals'] = Withdrawal::where('user_id', $userId)->get();

        // Sum of pending withdrawals
        $data['pending_withdrawals_sum'] = Withdrawal::where('user_id', $userId)
            ->where('status', 0) // Assuming '0' represents 'pending'
            ->sum('amount');

        // Sum of approved withdrawals
        $data['approved_withdrawals_sum'] = Withdrawal::where('user_id', $userId)
            ->where('status', 1) // Assuming '1' represents 'approved'
            ->sum('amount');

        // Retrieve all transactions for the user
        $data['transactions'] = Transaction::where('user_id', $userId)->get();

      // Calculate the net crypto amount (for Bitcoin in this case)
$data['crypto_amount'] = Transaction::where('user_id', $userId)
->where('currency_type', 'bitcoin') // Filter by Bitcoin currency type
->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN crypto_amount ELSE -crypto_amount END) as net_crypto_amount')
->value('net_crypto_amount') ?? 0; // Default to 0 if null

// Calculate the net USD value for all transactions
$data['usd_value'] = Transaction::where('user_id', $userId)
->selectRaw('SUM(CASE WHEN transaction_type = "ADD" THEN usd_value ELSE -usd_value END) as net_usd_value')
->value('net_usd_value') ?? 0; // Default to 0 if null

        // // Sum of profits
        // $data['profit_sum'] = Profit::where('user_id', $userId)
        //     ->sum('amount');

        // // Sum of investments
        // $data['investment_sum'] = Investment::where('user_id', $userId)
        //     ->sum('amount');

        // // Sum of referral earnings
        // $data['referral_sum'] = Referral::where('user_id', $userId)
        //     ->sum('amount');

        // Total sum of all values
        // $data['total_sum'] =  $data['approved_deposits_sum']
        //     - $data['approved_withdrawals_sum']
        //     + $data['profit_sum']
        //     - $data['investment_sum']
        //     + $data['referral_sum'];

        return view('admin.user_data', $data);
    }





    public function creditUserPage($id)
    {
        $user = User::find($id);

        $data['user'] = $user;

        // Sum of successful account balance
        $data['balance_sum'] = AccountBalance::where('user_id',  $user->id)
            ->sum('amount');

        // Sum of successful account balance
        $data['profit_sum'] = Profit::where('user_id', $user)
            ->sum('amount');

        if (!$user) {
            abort(404, 'User not found');
        }

        return view('admin.credit_user', $data);
    }

    /**
     * Open a new account.
     *
     * @return \Illuminate\View\View
     */
    public function openAccount()
    {
        // Display form for opening a new account
        return view('admin.open_account');
    }


    /**
     * Open a new account.
     *
     * @return \Illuminate\View\View
     */
    public function sendEmailPage()
    {
        // Display form for opening a new account
        return view('admin.send_email');
    }

    public function sendEmail(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $email = $request->input('email');
        $subject = $request->input('subject');
        $messageBody = $request->input('message');

        try {
            Mail::send([], [], function ($message) use ($email, $subject, $messageBody) {
                $message->to($email)
                    ->subject($subject)
                    ->setBody($messageBody, 'text/html');
            });

            return response()->json(['success' => 'Email sent successfully!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send email. Please try again.']);
        }
    }




    public function suspendAccount(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            // Logic to suspend the user account
            $user->account_suspended = 1;
            $user->save();

            return response()->json(['message' => 'Account suspended successfully.']);
        }

        return response()->json(['message' => 'User not found.'], 404);
    }

    public function unblockAccount(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            // Logic to unblock the user account
            $user->account_suspended = 0;
            $user->save();

            return response()->json(['message' => 'Account unblocked successfully.']);
        }

        return response()->json(['message' => 'User not found.'], 404);
    }
    /**
     * Update user details.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateUserDetail(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            // $user->first_name = $request->input('firstname');
            $user->name = $request->input('name');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->country = $request->input('country');
            // $user->dob = $request->input('dob');
            // $user->address = $request->input('addressB');
            $user->save();
            return redirect()->back()->with('success', 'User details updated successfully.');

        }

        return response()->json(['error' => 'User not found.'], 404);
    }

    /**
     * Update bank details.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateBankDetail(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->account_type = $request->input('accounttype');
            $user->account_number = $request->input('accountnumber');
            $user->currency = $request->input('usercurrency');
            $user->imf_code = $request->input('imf');
            $user->cot_code = $request->input('cot');
            $user->daily_limit = $request->input('daily_limit');
            $user->secret_code = $request->input('secretCode');
            $user->save();

            return response()->json(['success' => 'Bank details updated successfully.']);
        }

        return response()->json(['error' => 'User not found.'], 404);
    }

    /**
     * Fund a user account.
     *
     * @param string $accountnumber
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function fundUser($accountnumber, $id)
    {
        // Implement logic to fund user account
        return response()->view('admin.fund_user', compact('accountnumber', 'id'));
    }

    /**
     * View user transaction history.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function userTransaction($id)
    {
        // Implement logic to view user transactions
        return response()->view('admin.user_transaction', compact('id'));
    }

    /**
     * Track user transfers.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function userTransferTracking($id)
    {
        // Implement logic to track user transfers
        return response()->view('admin.user_transfer_tracking', compact('id'));
    }

    /**
     * Debit a user account.
     *
     * @param string $accountnumber
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function debitUser($accountnumber, $id)
    {
        // Implement logic to debit user account
        return response()->view('admin.debit_user', compact('accountnumber', 'id'));
    }

    /**
     * Update user profile photo.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updatePhoto($id)
    {
        // Implement logic to update user profile photo
        return response()->view('admin.update_photo', compact('id'));
    }

    /**
     * View user activity.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function userActivity($id)
    {
        // Implement logic to view user activity
        return response()->view('admin.user_activity', compact('id'));
    }

    /**
     * Reset user password.
     *
     * @param int $userid
     * @return \Illuminate\Http\Response
     */
    public function userPasswordReset($userid)
    {
        // Implement logic to reset user password
        return response()->view('admin.user_password_reset', compact('userid'));
    }


    public function changeLogoFavicon()
    {
        // Display form for opening a new account
        return view('admin.change_logo_favicon');
    }



    public function creditUser(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:1',
            'scope' => 'required|in:Account Balance,Profit',
            'emailnotify' => 'required|in:Yes,No',
            'memo' => 'nullable|string',
        ]);

        $user = User::findOrFail($request->id);
        $amount = $request->amount;
        $scope = $request->scope;

        if ($scope == 'Account Balance') {
            $accountBalance = new AccountBalance();
            $accountBalance->user_id = $user->id;
            $accountBalance->amount = $amount;
            $accountBalance->save();
        } else {
            $profit = new Profit();
            $profit->user_id = $user->id;
            $profit->amount = $amount;
            $profit->save();
        }

        // if ($request->emailnotify == 'Yes') {
        //     Mail::to($user->email)->send(new \App\Mail\CreditNotification($user, $amount, $scope, $request->memo));
        // }
        // Redirect back with a success message
        return back()->with('success', 'Funds have been credited successfully.');
    }





    // Method to show the profile update form
    public function editProfile()
    {
        // Retrieve the authenticated admin using the 'admin' guard
        $admin = Auth::guard('admin')->user();
        return view('admin.admin_profile', compact('admin')); // Profile Blade file
    }

    // Method to handle the profile update
    public function updateProfile(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ], 422);
        }

        // Update the profile of the authenticated admin
        $admin = Auth::guard('admin')->user();
        $admin->name = $request->firstname;
        // $admin->middlename = $request->middlename;
        // $admin->lastname = $request->lastname;
        // $admin->phone = $request->phone;
        $admin->email = $request->email;
        $admin->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Profile updated successfully!'
        ]);
    }

    // Method to handle password update
    public function updatePassword(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ], 422);
        }

        // Retrieve the authenticated admin
        $admin = Auth::guard('admin')->user();

        // Check if the old password matches
        if (!Hash::check($request->old_password, $admin->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Old password is incorrect.'
            ], 422);
        }

        // Update the new password
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully!'
        ]);
    }



    public function showResetPasswordForm($id)
    {
        $user = User::findOrFail($id);
        return view('admin.admin_change_user_password', compact('user'));
    }


    public function resetPassword(Request $request)
    {
        // Validate input
        $request->validate([
            'password' => 'required|min:8|confirmed',
            'id' => 'required|exists:users,id',
        ]);

        // Find user by ID
        $user = User::findOrFail($request->id);

        // Update user password
        $user->password = Hash::make($request->password);
        $user->save();

        // Return success message
        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully.',
        ]);
    }

    public function impersonate(User $user)
    {
        // Store the original user's ID in the session (if not already stored)
        if (!session()->has('impersonate')) {
            session()->put('impersonate', Auth::id());
        }

        // Impersonate the specified user
        Auth::loginUsingId($user->id);

        $data['credit_withdrawal'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Withdrawal')->where('transaction', 'credit')->sum('credit');
        $data['debit_withdrawal'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Withdrawal')->where('transaction', 'debit')->sum('debit');
        $data['withdrawal_balance'] = $data['debit_withdrawal'];

        $data['credit_deposit'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Deposit')->where('transaction', 'credit')->sum('credit');
        $data['debit_deposit'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Deposit')->where('transaction', 'debit')->sum('debit');
        $data['deposit_balance'] = $data['credit_deposit'] - $data['debit_deposit'];

        $data['credit_profit'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Profit')->where('transaction', 'credit')->sum('credit');
        $data['debit_profit'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Profit')->where('transaction', 'debit')->sum('debit');
        $data['profit_balance'] = $data['credit_profit'] - $data['debit_profit'];

        $data['credit_earning'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Earning')->where('transaction', 'credit')->sum('credit');
        $data['debit_earning'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Earning')->where('transaction', 'debit')->sum('debit');
        $data['earning_balance'] = $data['credit_earning'] - $data['debit_earning'];





        $data['credit_Investment'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Investment')->where('transaction', 'credit')->sum('credit');
        $data['debit_Investment'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Investment')->where('transaction', 'debit')->sum('debit');
        $data['Investment_balance'] = $data['credit_Investment'] - $data['debit_Investment'];

        $data['credit_referral'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Referral')->where('transaction', 'credit')->sum('credit');
        $data['debit_referral'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction_type', 'Referral')->where('transaction', 'debit')->sum('debit');
        $data['referral_balance'] = $data['credit_referral'] - $data['debit_referral'];


        $data['credit_balance'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction', 'credit')->sum('credit');
        $data['debit_balance'] = Transaction::where('user_id', $user->id)->where('status', '1')->where('transaction', 'debit')->sum('debit');
        $data['total_balance'] = $data['credit_balance'] - $data['debit_balance'];


        // Redirect to the user's home page with the relevant data
        return view('dashboard.home', $data)->with('success', 'You are logged in as ' . $user->name);
    }


    public function leaveImpersonate()
    {
        // Check if the session has an 'impersonate' value
        if (session()->has('impersonate')) {
            // Retrieve the original user's ID from the session
            $originalUserId = session()->get('impersonate');

            // Log in as the original user
            Auth::loginUsingId($originalUserId);

            // Forget the impersonation session data
            session()->forget('impersonate');

            $data['users'] = User::get();


            // Sum of pending deposits
            $data['pending_deposits_sum'] = Deposit::where('status', '0')->sum('amount');

            // Sum of successful deposits
            $data['total_deposits'] = Deposit::sum('amount');

            // Sum of pending withdrawals
            $data['pending_withdrawals_sum'] = Withdrawal::where('status', '0')->sum('amount');

            // Sum of successful withdrawals
            $data['total_withdrawals'] = Withdrawal::sum('amount');

            // sum total users
            $data['total_users'] = User::count();

            // sum total users
            // $data['suspended_users'] = User::where('account_suspended', '1')->count();

            $data['suspended_users'] = User::count();
            // Redirect to the original user's dashboard or home page
            return redirect()->route('admin.home', $data)->with('message', 'You have returned to your original account.');
        }

        // If no impersonation is happening, redirect to home
        return redirect()->route('admin.home')->with('message', 'No impersonation found.');
    }


    public function manageInvestmentPlan()
    {
        // Fetch all investment plans from the database
        $data['plans'] = InvestmentPlan::all();
        return view('admin.manage_investment_plan', $data);
    }

    public function paymentSettings()
    {
        // Fetch all investment plans from the database
        $data['plans'] = InvestmentPlan::all();
        return view('admin.manage_investment_plan', $data);
    }

    public function userVerification($id)
    {
        $user_data = DB::table('users')->where('id', $id)->first();
        // $full_name = $user_data->first_name;
        // $email =   $user_data->email;
        // $user = [

        //     'full_name' => $full_name,
        // ];

        // // Mail::to($email)->send(new activateAccountEmail($user));
        $status = array();
        $status['user_status'] = 1;
        $update = DB::table('users')->where('id', $id)->update($status);
        return redirect()->back()->with('message', 'Successful!! User Has Been Verified, they can now login thier account');
    }

    public function userSuspension($id)
    {

        $status = array();
        $status['user_status'] = 0;
        $update = DB::table('users')->where('id', $id)->update($status);
        return redirect()->back()->with('message', 'User Has Been Suspended Successfully');
    }

    public function toggleNotification($id)
    {
        $user = User::findOrFail($id);
        $user->user_notification = !$user->user_notification;
        $user->save();

        return redirect()->back()->with('status', 'Notification setting updated successfully!');
    }

    public function toggle2FA($id)
    {
        $user = User::findOrFail($id);
        $user->user_authentication = !$user->user_authentication;
        $user->save();

        return redirect()->back()->with('status', '2FA setting updated successfully!');
    }


    public function creditDebit(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|string', // ETH, BTC, etc.
            'amount' => 'required|numeric|min:0',
            't_type' => 'required|string|in:ADD,SUBTRACT',
        ]);

        $user = User::find($request->user_id);
        $cryptoType = $request->type;
        $cryptoAmount = $request->amount;
        $transactionType = $request->t_type;

        // Fetch the current exchange rate for the selected cryptocurrency
        $usdDollarValue = $this->convertToUSD($cryptoType, $cryptoAmount);
        $userCurrency = $request->input('currency'); // E.g., 'EUR', 'GBP', etc.
        $usdValue = $request->input('usd_value');    // The value in USD  
        //$convertedValue = $this->convertToUserCurrency($usdValue, $userCurrency); // covert USD to user currency


        // Process transaction
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->currency_type = $cryptoType;
        $transaction->crypto_amount = $cryptoAmount;
        $transaction->transaction_type = $transactionType;
        $transaction->usd_value = $usdDollarValue;


        // Update user's balance based on transaction type
        if ($transactionType == 'ADD') {
            $transaction->usd_value += $usdValue; // Assuming `balance` is in USD
        } elseif ($transactionType == 'SUBTRACT' && $user->balance >= $usdValue) {
            $transaction->usd_value -= $usdValue;
        }
        $transaction->save();

        return redirect()->back()->with('success', 'Transaction completed successfully.');
    }


    private function convertToUSD($cryptoType, $amount)
    {
        $cryptoType = strtolower($cryptoType);
        // Fetch exchange rate from CoinGecko API
        $response = Http::get("https://api.coingecko.com/api/v3/simple/price", [
            'ids' => $cryptoType,  // Use lowercase for the CoinGecko API
            'vs_currencies' => 'usd'           // CoinGecko uses 'usd' for prices instead of 'USDT'
        ]);


        // Check if the response is successful and the rate exists
        if ($response->successful() && isset($response->json()[$cryptoType]['usd'])) {
            $rate = $response->json()[$cryptoType]['usd'];
            return $rate * $amount; // Convert to USD
        }

        return null; // Return null if the API request fails or rate not found
    }





    private function convertToUserCurrency($usdValue, $currency)
    {
        // Exchangerate.host endpoint for USD as the base currency
        $apiUrl = "https://api.exchangerate.host/convert?from=USD&to={$currency}";

        // Fetch exchange rate for USD to the selected currency
        $response = Http::get($apiUrl);

        if ($response->ok() && isset($response['result'])) {
            // Calculate the converted value
            return $usdValue * $response['result'];
        } else {
            throw new Exception("Unable to retrieve exchange rate.");
        }
    }

    public function storeTransaction(Request $request)
    {
        $userCurrency = $request->input('currency'); // E.g., 'EUR', 'GBP', etc.
        $usdValue = $request->input('usd_value');    // The value in USD

        // Convert the USD value to the user's currency
        try {
            $convertedValue = $this->convertToUserCurrency($usdValue, $userCurrency);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        // Store the transaction with both USD and converted values
        Transaction::create([
            'user_id' => $request->user()->id,
            'currency_type' => $request->input('currency_type'), // e.g., 'BTC', 'ETH'
            'crypto_amount' => $request->input('amount'),
            'transaction_type' => $request->input('t_type'), // ADD or SUBTRACT
            'usd_value' => $usdValue,
            'converted_value' => $convertedValue,
            'converted_currency' => $userCurrency,
        ]);

        return back()->with('success', 'Transaction completed in ' . $userCurrency);
    }

    public function editPayment($id)
    {
        $payment =  PaymentSetting::where('id', $id)->get();
        return view('admin.edit_payment', compact('payment')); // Adjust view name as necessary
    }



    public function showUserWithdrawals($userId)
    {
        $withdrawals = Withdrawal::where('user_id', $userId)->get();
        return view('admin.user_withdrawals', compact('withdrawals'));
    }

    public function approveWithdrawal($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->status = 'approved';
        $withdrawal->save();

        return redirect()->back()->with('success', 'Withdrawal approved successfully.');
    }

    public function rejectWithdrawal($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->status = 'rejected';
        $withdrawal->save();

        return redirect()->back()->with('success', 'Withdrawal rejected successfully.');
    }

    public function showUserDeposits($userId)
    {
        $deposits = Deposit::where('user_id', $userId)->paginate(10);
        return view('admin.user_deposit', compact('deposits'));
    }
    public function approve($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->status = 'approved';
        $deposit->save();

        return redirect()->back()->with('success', 'Deposit approved successfully.');
    }

    public function reject($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->status = 'rejected';
        $deposit->save();

        return redirect()->back()->with('success', 'Deposit rejected successfully.');
    }
}
