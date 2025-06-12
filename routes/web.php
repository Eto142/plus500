<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\BinanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\WithdrawalController;
// use App\Http\Controllers\User\WithdrawalController;


Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/crypto', function () {
    return view('home.crypto');
});

Route::get('/support', function () {
    return view('home.support');
});

Route::get('/margins', function () {
    return view('home.margins');
});

Route::get('/forex', function () {
    return view('home.forex');
});

Route::get('/energy', function () {
    return view('home.energy');
});

Route::get('/commodities', function () {
    return view('home.commodities');
});

Route::get('/stocks', function () {
    return view('home.stocks');
});

Route::get('/options', function () {
    return view('home.options');
});

Route::get('/etfs', function () {
    return view('home.etf');
});

Route::get('/instruments', function () {
    return view('home.instruments');
});

Route::get('/register', function () {
    return view('home.register');
});

Route::get('/users', function () {
    return view('dashboard.home');
});

Route::get('/trading', function () {
    return view('dashboard.trading');
});

Route::get('/accounthistory', function () {
    return view('dashboard.accounthistory');
});

Route::get('/myplans', function () {
    return view('dashboard.myplans');
});

Route::get('/deposit', function () {
    return view('dashboard.deposit');
});

Route::get('/fees', function () {
    return view('home.fees');
});

Route::get('/professionalaccount', function () {
    return view('home.professionalaccount');
});

Route::get('/premiumservice', function () {
    return view('home.premiumservice');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/investor', function () {
    return view('home.investor');
});

Route::get('/esg', function () {
    return view('home.esg');
});

Route::get('/bulls', function () {
    return view('home.bulls');
});

Route::get('/legiawarsaw', function () {
    return view('home.legiawarsaw');
});

Route::get('/youngboys', function () {
    return view('home.youngboys');
});

Route::get('/academy', function () {
    return view('home.academy');
});

Route::get('/newsandmarketinsights', function () {
    return view('home.newsandmarketinsights');
});

Route::get('/insights', function () {
    return view('home.insights');
});

Route::get('/economiccalendar', function () {
    return view('home.economiccalendar');
});

Route::get('/riskmanagement', function () {
    return view('home.riskmanagement');
});


Route::get('/bulls', function () {
    return view('home.bulls');
});

Route::get('/all-market', function () {
    return view('home.market');
});
Route::get('/metals', function () {
    return view('home.metals');
});

Route::get('/agriculture', function () {
    return view('home.agriculture');
});

Route::get('/interest', function () {
    return view('home.interest');
});

Route::get('/equity', function () {
    return view('home.equityindices');
});


// Route::get('/testing', function () {
//     return view('testing');
// });

// web.php
Route::post('/save-currency', [BinanceController::class, 'store'])->name('save.currency');
// web.php
Route::post('/save-language', [BinanceController::class, 'store'])->name('save.language');





Route::get('/market-update', function () {
    return view('dashboard.market-update');
});





// // Route to get live price ticker
// Route::get('/binance/ticker/{symbol?}', [BinanceController::class, 'getPriceTicker']);

// // Route to get candlestick data
// Route::get('/binance/candlesticks/{symbol?}/{interval?}', [BinanceController::class, 'getCandlestickData']);


Route::get('/binance', [BinanceController::class, 'showLiveTradingView']);

// Route::get('/dashboard', [TradeController::class, 'index'])->name('dashboard');
Route::get('/home', [DashboardController::class, 'showDashboard']);
Route::get('/test', [DashboardController::class, 'showTest']);
Route::get('/profile', [DashboardController::class, 'showProfile']);
Route::get('/withdraw', [DashboardController::class, 'showWithdraw']);
Route::get('/news', [DashboardController::class, 'showNews']);
Route::get('/market', [DashboardController::class, 'showMarket']);
Route::get('/trading', [DashboardController::class, 'showTrading']);
Route::get('/calculator', [DashboardController::class, 'showCalculator']);

Auth::routes();




//Route::get('/deposit', [App\Http\Controllers\DashboardController::class, 'deposit'])->name('deposit');




Route::prefix('user')->middleware('auth')->group(function () {
    Route::middleware('user')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
        Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home.page');
        Route::get('/profile', [App\Http\Controllers\HomeController::class, 'Profile'])->name('user.profile.page');
        Route::get('/news', [App\Http\Controllers\HomeController::class, 'News'])->name('user.news.page');
        Route::get('/calculator', [App\Http\Controllers\HomeController::class, 'Calculator'])->name('user.calculator.page');
        Route::get('/tradehistory', [App\Http\Controllers\HomeController::class, 'Tradehistory'])->name('user.tradehistory.page');
        Route::get('/orderbook', [App\Http\Controllers\HomeController::class, 'Orderbook'])->name('user.orderbook.page');
        Route::get('/market', [App\Http\Controllers\HomeController::class, 'Market'])->name('user.market.page');
        Route::get('/pay', [App\Http\Controllers\User\DepositController::class, 'Pay'])->name('user.pay.page');
        Route::get('/deposit', [App\Http\Controllers\User\DepositController::class, 'index'])->name('user.deposit.page');
        Route::get('/withdrawals/create', [App\Http\Controllers\User\WithdrawalController::class, 'create'])->name('user.withdrawals.create');
        Route::get('/withdrawals/withdrawal-wallet', [App\Http\Controllers\User\WithdrawalController::class, 'wallet'])->name('user.withdraw.wallet');
    });

Route::get('/suspend_account', [App\Http\Controllers\HomeController::class, 'suspendAccount'])->name('suspend.account');
Route::get('/testing', [App\Http\Controllers\HomeController::class, 'testing'])->name('testing');

Route::post('/saveCurrency', [App\Http\Controllers\HomeController::class, 'saveCurrency'])->name('saveCurrency');
Route::post('/saveCountry', [App\Http\Controllers\HomeController::class, 'saveCountry'])->name('saveCountry');
Route::post('/verifyOTP', [App\Http\Controllers\HomeController::class, 'verifyOTP'])->name('verifyOTP');
Route::post('/uploadKYC', [App\Http\Controllers\HomeController::class, 'uploadKYC'])->name('uploadKYC');
Route::post('/verify-code', [App\Http\Controllers\HomeController::class, 'verifyCode'])->name('verifyCode');
Route::post('/resend-code', [App\Http\Controllers\HomeController::class, 'resendVerificationCode'])->name('resendCode');
Route::post('/upload-kyc', [App\Http\Controllers\HomeController::class, 'uploadKYC'])->name('uploadKYC');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');
Route::post('/personal-dp', [App\Http\Controllers\HomeController::class, 'personalDp'])->name('personal.dp');
Route::post('/profile-update', [App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('profileupdate');
Route::post('/user.logout', [App\Http\Controllers\HomeController::class, 'logOut'])->name('user.logout');

    
    Route::post('/deposits/{id}', [App\Http\Controllers\User\DepositController::class, 'handleDeposit'])->name('handle.deposit');
    Route::post('/deposit', [App\Http\Controllers\User\DepositController::class, 'handlePayment'])->name('handle.payment');

    
    Route::post('/make-withdrawal', [App\Http\Controllers\User\WithdrawalController::class, 'makeWithdrawal'])->name('make.withdrawal');
    Route::post('/withdrawals/confirm', [App\Http\Controllers\User\WithdrawalController::class, 'confirm'])->name('withdrawals.confirm');
   
});


Route::get('admin/login', [AdminLoginController::class, 'adminLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('login.submit');




// Admin Routes
Route::prefix('admin')->group(function () {
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');

    // Protecting admin routes using the 'admin' middleware
    Route::middleware(['admin'])->group(function () { // Admin Profile Routes

        Route::get('/user/{userId}/withdrawals', [AdminController::class, 'showUserWithdrawals'])
            ->name('admin.user.withdrawals');
        Route::post('/admin/withdrawals/{id}/approve', [AdminController::class, 'approveWithdrawal'])
            ->name('admin.withdrawals.approve');
        Route::post('/admin/withdrawals/{id}/reject', [AdminController::class, 'rejectWithdrawal'])
            ->name('admin.withdrawals.reject');
        Route::get('/users/{user}/deposits', [AdminController::class, 'showUserDeposits'])->name('admin.deposits.history');
        Route::post('/deposits/{deposit}/approve', [AdminController::class, 'approve'])->name('admin.deposits.approve');
        Route::post('/deposits/{deposit}/reject', [AdminController::class, 'reject'])->name('admin.deposits.reject');


        Route::get('/profile', [AdminController::class, 'editProfile'])->name('admin.profile');
        Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
        Route::post('/profile/password', [AdminController::class, 'updatePassword'])->name('admin.profile.password.update');

        Route::get('/change/user/password/page/{id}', [AdminController::class, 'showResetPasswordForm'])->name('admin.change.user.password.page');
        Route::post('/user-password-reset', [AdminController::class, 'resetPassword'])->name('admin.user.password_reset');

        Route::get('{user}/verification', [AdminController::class, 'userVerification'])->name('user.verification');
        Route::get('{user}/suspension', [AdminController::class, 'userSuspension'])->name('user.suspension');


        Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
        Route::get('/manage-users', [AdminController::class, 'manageUsersPage'])->name('manage.users.page');
        Route::get('/manage-investment-plan', [AdminController::class, 'manageInvestmentPlan'])->name('manage.investment.plan');
        Route::get('/view-deposit/{id}/', [AdminController::class, 'viewDeposit']);
        Route::get('/manage-kyc', [AdminController::class, 'manageKycPage'])->name('manage.kyc.page');
        Route::get('/accept-kyc/{id}/', [AdminController::class, 'acceptKyc'])->name('admin.accept.kyc');
        Route::get('/reject-kyc/{id}/', [AdminController::class, 'rejectKyc'])->name('admin.reject.kyc');
        Route::get('/reset-password/{user}', [AdminController::class, 'resetUserPassword'])->name('reset.password');
        Route::get('/clear-account/{id}', [AdminController::class, 'clearAccount'])->name('clear.account');

        Route::get('/{user}/impersonate',  [AdminController::class, 'impersonate'])->name('users.impersonate');
        Route::get('/leave-impersonate',  [AdminController::class, 'leaveImpersonate'])->name('users.leave-impersonate');

        Route::post('/edit-user/{user}', [AdminController::class, 'editUser'])->name('edit.user');
        Route::post('/add-new-user',  [AdminController::class, 'newUser'])->name('add.user');
        Route::get('/delete-user/{user}',  [AdminController::class, 'deleteUser'])->name('delete.user');
        Route::match(['get', 'post'], '/send-mail', [AdminController::class, 'sendMail'])->name('admin.send.mail');
        // Route for viewing user details
        Route::get('/user/{id}', [AdminController::class, 'viewUser'])->name('admin.user.view');
        Route::post('/transfer/suspend/{id}', [AdminController::class, 'suspendTransfer'])->name('transfer.suspend');
        Route::post('/transfer/unblock/{id}', [AdminController::class, 'unblockTransfer'])->name('transfer.unblock');
        Route::post('/account/suspend/{id}', [AdminController::class, 'suspendAccount'])->name('account.suspend');
        Route::post('/account/unblock/{id}', [AdminController::class, 'unblockAccount'])->name('account.unblock');

        // Define the route for opening an account
        Route::get('/user/open', [AdminController::class, 'openAccount'])->name('admin.user.open');



        // Route for viewing user details
        Route::get('/credit-user/{id}', [AdminController::class, 'creditUserPage'])->name('admin.credit.user.page');

        Route::post('credit-debit', [AdminController::class, 'creditDebit'])->name('credit-debit');


        // Route::post('/credit-user', [AdminController::class, 'creditUser'])->name('credit_user');


        // Route for updating user details
        Route::post('/user/update/{id}', [AdminController::class, 'updateUserDetail'])->name('update_user_detail');

        // Route for updating bank details
        Route::post('/user/update/bank/{id}', [AdminController::class, 'updateBankDetail'])->name('update_bank_detail');

        // Route for fund user
        Route::get('/user/fund/{accountnumber}/{id}', [AdminController::class, 'fundUser'])->name('fund_user');

        // Route for user transaction history
        Route::get('/user/transaction/{id}', [AdminController::class, 'userTransaction'])->name('user_transaction');

        // Route for user transfer tracking
        Route::get('/user/transfer/tracking/{id}', [AdminController::class, 'userTransferTracking'])->name('user_transfer_tracking');

        // Route for debit user
        Route::get('/user/debit/{accountnumber}/{id}', [AdminController::class, 'debitUser'])->name('debit_user');

        // Route for changing user photo
        Route::get('/user/photo/{id}', [AdminController::class, 'updatePhoto'])->name('update_photo');

        // Route for user activity
        Route::get('/user/activity/{id}', [AdminController::class, 'userActivity'])->name('user_activity');

        // Route for user password reset
        Route::get('/user/password/reset/{userid}', [AdminController::class, 'userPasswordReset'])->name('user_password_reset');


        // Route for changing email user
        Route::get('/send/email', [AdminController::class, 'sendEmailPage'])->name('send.email');
        Route::post('/send/email', [AdminController::class, 'sendEmail'])->name('send.mail');


        // Deposit resource routes
        Route::resource('deposits', DepositController::class);
        Route::patch('deposits/{deposit}/approve', [DepositController::class, 'approve'])->name('deposits.approve');

        // Withdrawal resource routes
        Route::resource('withdrawals', WithdrawalController::class);
        Route::patch('withdrawals/{withdrawal}/approve', [WithdrawalController::class, 'approve'])->name('withdrawals.approve');

        //kyc resource routes
        // Route::resource('kyc', KycController::class);
        // Route::get('kyc/{id}/approve', [KycController::class, 'approve'])->name('kyc.approve');

        //trade resource routes
        Route::get('/trades', [TradeController::class, 'index'])->name('trades.index');
        Route::get('/trades/{trade}/edit', [TradeController::class, 'edit'])->name('trades.edit');
        Route::patch('/trades/{trade}', [TradeController::class, 'update'])->name('trades.update');
        Route::post('/trades/{trade}/approve', [TradeController::class, 'approve'])->name('trades.approve');
        Route::delete('/trades/{trade}', [TradeController::class, 'destroy'])->name('trades.destroy');



        Route::get('/manage-user-deposit', [DepositController::class, 'manageUserDepositsPage'])->name('manage.user.deposit.page');

        Route::get('/manage-deposit', [DepositController::class, 'manageDepositsPage'])->name('manage.deposits.page');
        Route::get('view-deposit/{id}', [DepositController::class, 'viewDeposit'])->name('view.deposit');
        Route::get('process-deposit/{id}', [DepositController::class, 'processDeposit'])->name('process.deposit');
        Route::get('delete-deposit/{id}', [DepositController::class, 'deleteDeposit'])->name('delete.deposit');

        Route::get('/manage-user-withdrawal', [WithdrawalController::class, 'manageUserWithdrawalsPage'])->name('manage.user.withdrawals.page');
        Route::get('/manage-withdrawal', [WithdrawalController::class, 'manageWithdrawalsPage'])->name('manage.withdrawals.page');
        Route::get('/view-withdrawal/{user_id}/{withdrawal_id}', [WithdrawalController::class, 'viewWithdrawal'])->name('view.withdrawal');;
        Route::get('process-withdrawal/{id}', [WithdrawalController::class, 'processWithdrawal'])->name('process.withdrawal');
        Route::get('delete-withdrawal/{id}', [WithdrawalController::class, 'deleteWithdrawal'])->name('delete.withdrawal');


        Route::get('/toggle-notification/{id}', [AdminController::class, 'toggleNotification'])->name('toggle.notification');
        Route::get('/toggle-2fa/{id}', [AdminController::class, 'toggle2FA'])->name('toggle.2fa');

        Route::get('/payment-settings', [PaymentController::class, 'paymentSettings'])->name('payment.settings');
        Route::resource('cryptos', PaymentController::class);
        Route::put('/payment-settings/{PaymentSetting}', [PaymentSettingController::class, 'update'])->name('PaymentSettings.update');
    });
});
