@include('user.layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        .container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }
        h2 {
            font-size: 18px;
            font-weight: normal;
            color: #333;
            margin-bottom: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            color: #666;
            box-sizing: border-box;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #ffa500;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #ff8c00;
        }
        .footer-text {
            font-size: 12px;
            color: #666;
            margin-top: 15px;
        }
        .footer-text a {
            color: #666;
            text-decoration: underline;
        }
        /* Center the container within the page */
        .center-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>

<div class="center-wrapper">
    <div class="container">
        <h2>Enter Amount to be paid: (USD)</h2>
        <form action="{{ route('handle.payment') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="number" id="amount" name="amount" placeholder="Enter amount eg: 1000" required>
            </div>

            <button type="submit" class="btn">Pay Now</button>

            <p class="footer-text">
                Payments processed by Trust Wallet.<br>
                <a href="#">Payment Privacy Policy</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>


@include('user.layouts.footer')