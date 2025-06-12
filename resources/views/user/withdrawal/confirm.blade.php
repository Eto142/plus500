<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Withdrawal Confirmation | User Panel</title>
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-5">
            <h2 class="text-center mb-4">Withdrawal Confirmation</h2>

            <!-- Display the success message -->
            @if(session('status'))
                <div class="alert alert-success text-center">
                    <h4>{{ session('status') }}</h4>
                </div>
            @endif

            <!-- Transaction Details -->
            <div class="receipt border p-4 rounded">
                <h5 class="text-center mb-4">Withdrawal Receipt</h5>
                <div class="row mb-3">
                    <div class="col-md-6"><strong>Transaction ID:</strong></div>
                    <div class="col-md-6">{{ $transactionId }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6"><strong>Withdrawal Method:</strong></div>
                    <div class="col-md-6">{{ ucfirst($method) }}</div>
                </div>

                @if($method == 'cryptocurrency')
                    <div class="row mb-3">
                        <div class="col-md-6"><strong>Cryptocurrency:</strong></div>
                        <div class="col-md-6">{{ $crypto }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6"><strong>Wallet Address:</strong></div>
                        <div class="col-md-6">{{ $wallet }}</div>
                    </div>
                @else
                    <div class="row mb-3">
                        <div class="col-md-6"><strong>Bank Name:</strong></div>
                        <div class="col-md-6">{{ $bank_name }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6"><strong>Account Name:</strong></div>
                        <div class="col-md-6">{{ $account_name }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6"><strong>Account Number:</strong></div>
                        <div class="col-md-6">{{ $account_number }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6"><strong>Routing Number:</strong></div>
                        <div class="col-md-6">{{ $routing_number }}</div>
                    </div>
                @endif

                <div class="row mb-3">
                    <div class="col-md-6"><strong>Amount:</strong></div>
                    <div class="col-md-6">${{ number_format($amount, 2) }}</div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-primary" onclick="window.print()">Print Receipt</button>
                    <a href="{{ route('user.withdrawals.create') }}" class="btn btn-secondary">Make Another Withdrawal</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
