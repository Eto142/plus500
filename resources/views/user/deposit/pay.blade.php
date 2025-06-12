@include('user.layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        /* Full-page centering */
        .center-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        /* Main container styling */
        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        /* Total amount styling */
        .total-label {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
        }

        .total-amount {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        /* Coinbase button styling */
        .coinbase-button {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 20px 0;
            background-color: #0052ff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .coinbase-button:hover {
            background-color: #0041cc;
        }

        /* Cryptocurrency selection section */
        .crypto-selection {
            font-size: 14px;
            color: #888;
            margin: 20px 0 10px;
        }

        .crypto-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
            background-color: white;
        }

        .crypto-option:hover {
            background-color: #f0f0f0;
        }

        .crypto-option img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .crypto-option span {
            font-size: 16px;
            color: #333;
        }

        /* Cryptocurrency details styling */
        .crypto-details {
            display: none;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin-top: 5px;
            text-align: left;
        }

        .crypto-details p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .crypto-details img {
            display: block;
            width: 100px;
            height: 100px;
            margin: 10px auto;
        }
    </style>
</head>

<body>

    <div class="center-wrapper">
        <div class="container"style="margin-top: 80px;">
            <!-- Total Amount -->
            <div class="total-label">Total</div>
            <p class="total-amount">{{ Auth::user()->currency}}{{$amount}}</p>

            <!-- Coinbase Payment Button -->
            <a href="https://www.coinbase.com/" class="coinbase-button">Pay With Coinbase</a>

            <!-- Cryptocurrency Selection Section -->
            <div class="crypto-selection">Or, select a cryptocurrency</div>

            @foreach ($payment as $crypto)
            <div class="crypto-option" onclick="toggleCryptoDetails('{{ $crypto->id }}')">
                <div style="display: flex; align-items: center;">
                    <img src="{{ asset('dist/images/cryptos/'.$crypto->image) }}" alt="{{ $crypto->name }}">
                    <span>{{ $crypto->name }}</span>
                </div>
                <span>+</span>
            </div>
            <div id="crypto-details-{{ $crypto->id }}" class="crypto-details">
                <p><strong>{{ $crypto->name }} Address:</strong> {{ $crypto->address }}</p>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode($crypto->address) }}"
                    alt="{{ $crypto->name }} QR Code">
            </div>
            @endforeach
        </div>
    </div>

    <script>
        // Function to toggle the visibility of cryptocurrency details
        function toggleCryptoDetails(id) {
            const details = document.getElementById('crypto-details-' + id);
            
            // Hide other crypto details
            document.querySelectorAll('.crypto-details').forEach(function(el) {
                if (el !== details) el.style.display = 'none';
            });
            
            // Toggle the selected crypto details
            details.style.display = details.style.display === 'block' ? 'none' : 'block';
        }
    </script>

</body>

</html>


@include('user.layouts.footer')