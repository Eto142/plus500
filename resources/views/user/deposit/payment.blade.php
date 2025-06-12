<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$method->name}} Deposit | User Panel</title>
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <style>
        .wallet-address {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .wallet-address input {
            border: none;
            background: none;
            font-size: inherit;
            color: inherit;
            width: 100%;
        }

        .wallet-address button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .wallet-address button:hover {
            background-color: #0056b3;
        }

        .qr-code {
            max-width: 250px;
            margin-bottom: 30px;
        }

        .upload-proof {
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-top: 30px;
        }

        .upload-proof input[type="file"] {
            border: 1px solid #ced4da;
            padding: 10px;
            border-radius: 5px;
        }

        .upload-proof button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .upload-proof button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Deposit with {{$method->name}}</h2>
                <p>Please send your payment to the {{$method->name}} wallet address below.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <!-- Wallet Address Section -->
                <div class="wallet-address">
                    <input type="text" id="walletAddress" value="{{$method->address}}" readonly>
                    <button onclick="copyAddress()">Copy</button>
                </div>

                <!-- QR Code Section -->
                <img src="{{ asset('dist/images/bitcoin-qr-code.png') }}" alt="{{$method->name}} QR Code"
                    class="qr-code">
                <p>Scan the QR code to copy the {{$method->name}} wallet address.</p>
            </div>
        </div>

        <!-- Form to Upload Proof of Payment -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('handle.payment') }}" method="POST" enctype="multipart/form-data"
                    class="upload-proof">
                    @csrf
                    <div class="form-group">
                        <label for="proofOfPayment">Upload Proof of Payment (Screenshot/Receipt)</label>
                        <input type="file" name="proof_of_payment" id="proofOfPayment" required class="form-control">
                    </div>
                    <input type="hidden" name="crypto_method" value="{{$method->name}}">
                    <button type="submit" class="btn">Submit Proof of Payment</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function copyAddress() {
            var copyText = document.getElementById("walletAddress");
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            document.execCommand("copy");

            alert("Wallet address copied: " + copyText.value);
        }
    </script>

    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>