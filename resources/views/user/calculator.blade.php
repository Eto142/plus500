@include('user.layouts.header')
<main>
    <div class="container-fluid">

            <!-- START: Breadcrumbs-->
            <div class="row">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto"> <b>Welcome to your Portfolio</b></div>
    
                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Calculator</li>
                        </ol>
                    </div>
                </div>
            </div>
    

        <div class="col-12  col-lg-12 col-xl-12 mt-3">
            <div class="card">
                <div class="col-12 col-lg-12 col-xl-12 mt-3">
           

                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <style>
    

        .converter-container {
            max-width: 600px;
            margin: 50px auto;
            /* background-color: #fff; */
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h3 {
            color: #2a9d8f;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .converter {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        input[type="number"], select, button {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="number"]:focus, select:focus, button:hover {
            border-color: #2a9d8f;
        }

        button {
            background-color: #2a9d8f;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        #conversion-result {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: left;
            font-size: 0.95rem;
            color: #555;
        }

        #conversion-result h4 {
            color: #2a9d8f;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="converter-container">
    <h3>Crypto Converter</h3>
    <div id="conversion-result" class="result"></div>
    <div class="converter">
        <label for="crypto-amount">Amount:</label>
        <input type="number" id="crypto-amount" placeholder="Enter amount" step="0.01" />

        <label for="from-currency">From Currency:</label>
        <select id="from-currency">
            <option value="bitcoin">Bitcoin (BTC)</option>
            <option value="ethereum">Ethereum (ETH)</option>
            <option value="litecoin">Litecoin (LTC)</option>
            <option value="ripple">Ripple (XRP)</option>
            <option value="cardano">Cardano (ADA)</option>
        </select>

        <button onclick="convertCrypto()">Convert</button>
    </div>

   
</div>

<script>
async function convertCrypto() {
    const amount = document.getElementById('crypto-amount').value;
    const fromCurrency = document.getElementById('from-currency').value;
    const resultDiv = document.getElementById('conversion-result');

    resultDiv.innerHTML = "";  // Clear previous result

    if (!amount || amount <= 0) {
        resultDiv.innerHTML = "<p style='color: red;'>Please enter a valid amount.</p>";
        return;
    }

    try {
        const response = await fetch(`https://api.coingecko.com/api/v3/simple/price?ids=${fromCurrency}&vs_currencies=btc,eth,ltc,xrp,ada`);
        const data = await response.json();

        if (!data[fromCurrency]) {
            resultDiv.innerHTML = "<p style='color: red;'>Conversion data is not available. Please try again later.</p>";
            return;
        }

        const rates = data[fromCurrency];
        resultDiv.innerHTML = `<h4>Conversion Results for ${parseFloat(amount).toFixed(2)} ${fromCurrency.toUpperCase()}:</h4>`;
        for (const [currency, rate] of Object.entries(rates)) {
            resultDiv.innerHTML += `<p>${parseFloat(amount).toFixed(2)} ${fromCurrency.toUpperCase()} = ${(amount * rate).toFixed(5)} ${currency.toUpperCase()}</p>`;
        }
    } catch (error) {
        resultDiv.innerHTML = "<p style='color: red;'>Error fetching conversion rates. Please try again later.</p>";
        console.error("Error:", error);
    }
}
</script>

</body>
</html>

                    

        <br><br><br>
                
        <!-- send all users email -->
    </div>
</div>
</div>
</div>
<!-- END: Card DATA-->
</div>

</main>
        
       <script>
        // API URL for fetching real-time prices
const apiURL = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,litecoin,ripple,cardano&vs_currencies=usd,eur,gbp,jpy,cad,aud';

// Fetch real-time prices from CoinGecko API
async function getRates() {
    const response = await fetch(apiURL);
    return response.json();
}

async function convertCurrency() {
    const fromCurrency = document.getElementById('from-currency').value;
    const toCurrency = document.getElementById('to-currency').value;
    const amount = parseFloat(document.getElementById('amount').value);

    if (isNaN(amount) || amount <= 0) {
        alert('Please enter a valid amount.');
        return;
    }

    // Get rates
    const rates = await getRates();

    // Check if currencies exist in the API response
    if (!rates[fromCurrency] || !rates[fromCurrency][toCurrency]) {
        alert('Conversion not available for selected currencies.');
        return;
    }

    // Calculate conversion
    const rate = rates[fromCurrency][toCurrency.toLowerCase()];
    const convertedAmount = rate * amount;

    // Display the result
    document.getElementById('conversion-result').innerHTML = 
        `${amount} ${fromCurrency.toUpperCase()} = ${convertedAmount.toFixed(6)} ${toCurrency.toUpperCase()}`;

    // Display the exchange rate
    document.getElementById('exchange-rate').innerHTML = 
        `Exchange Rate: 1 ${fromCurrency.toUpperCase()} = ${rate.toFixed(6)} ${toCurrency.toUpperCase()}`;
}

// Call getRates on page load to ensure real-time data is fetched
getRates();

       </script>
        

        <style>

body {
    font-family: 'Arial', sans-serif;
    /* background-color: #f0f3f7; */
}

.converter-container {
    max-width: 600px;
    margin: 60px auto;
    padding: 25px;
    /* background: white; */
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.converter-container h3 {
    font-size: 28px;
    font-weight: bold;
    color: #0056b3;
    margin-bottom: 25px;
}

.converter {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    text-align: left;
}

input, select {
    padding: 14px;
    font-size: 18px;
    border: 2px solid #dcdfe2;
    border-radius: 8px;
    /* background-color: #f9fafc; */
    transition: border-color 0.3s ease;
}

input:focus, select:focus {
    outline: none;
    border-color: #007bff;
}

button {
    padding: 15px;
    border: none;
    border-radius: 10px;
    background-color: #007bff;
    color: white;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

.result, #exchange-rate {
    margin-top: 20px;
    font-size: 22px;
    font-weight: bold;
    color: #333;
}

        </style>
@include('user.layouts.footer')