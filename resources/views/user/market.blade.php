@include('user.layouts.header')
<main>
    <div class="container-fluid">

        <div class="col-12  col-lg-12 col-xl-12 mt-3">
            <div class="card">
                <div class="col-12 col-lg-12 col-xl-12 mt-3">
                    <!-- Personal Trading Chart -->
                <div class="pt-1 col-12">
                    <h3 class="section-heading">Personal Trading Chart</h3>
                    <div class="tradingview-widget-container" style="margin: 30px 0;">
                        <div id="tradingview_f933e"></div>
                        <div class="tradingview-widget-copyright">
                            <a href="#" rel="noopener" target="_blank">
                                <span class="blue-text">Personal trading chart</span>
                            </a>
                        </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget({
                                "width": "100%",
                                "height": "550",
                                "symbol": "COINBASE:BTCUSD",
                                "interval": "1",
                                "timezone": "Etc/UTC",
                                "theme": 'light',
                                "style": "9",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "hide_side_toolbar": false,
                                "allow_symbol_change": true,
                                "calendar": false,
                                "studies": ["BB@tv-basicstudies"],
                                "container_id": "tradingview_f933e"
                            });
                        </script>
                    </div>
                </div>

                <!-- Demo Balance -->
                <div class="col-12 demo-balance">
                    <h4>Demo Balance: <span>$10,000</span></h4>
                </div>

                <!-- Buy/Sell Section -->
                <div class="col-12 trading-actions">
                    <h3 class="section-heading">Trade Now</h3>
                    <form class="trade-form">
                        <label for="crypto-select">Select Cryptocurrency:</label>
                        <select id="crypto-select" name="cryptocurrency" class="form-control">
                            <option value="BTC">Bitcoin (BTC)</option>
                            <option value="ETH">Ethereum (ETH)</option>
                            <option value="LTC">Litecoin (LTC)</option>
                            <option value="XRP">Ripple (XRP)</option>
                            <option value="ADA">Cardano (ADA)</option>
                            <option value="DOT">Polkadot (DOT)</option>
                            <option value="DOGE">Dogecoin (DOGE)</option>
                            <option value="SOL">Solana (SOL)</option>
                            <!-- Add more cryptocurrencies here -->
                        </select>

                        <label for="amount">Amount:</label>
                        <input type="number" id="amount" name="amount" class="form-control" placeholder="Enter amount" step="0.01" required>

                        <div class="trade-buttons">
                            <button type="button" class="btn-buy">Buy</button>
                            <button type="button" class="btn-sell">Sell</button>
                        </div>
                    </form>
                </div>

                <!-- Portfolio Section -->
                <div class="col-12 portfolio-section">
                    <h3 class="section-heading">Portfolio</h3>
                    <!-- You can add portfolio details here if needed -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Example array of cryptocurrencies (you can fetch real-time data using an API like CoinGecko)
    const cryptocurrencies = [
        { name: 'Bitcoin (BTC)', price: 50000 },
        { name: 'Ethereum (ETH)', price: 4000 },
        { name: 'Litecoin (LTC)', price: 200 },
        { name: 'Ripple (XRP)', price: 1.2 },
        { name: 'Cardano (ADA)', price: 2.3 },
        { name: 'Polkadot (DOT)', price: 30 },
        { name: 'Dogecoin (DOGE)', price: 0.25 },
        { name: 'Solana (SOL)', price: 150 },
        // Add more cryptocurrencies here
    ];

    // Function to display the cryptocurrencies in the table
    function displayCryptoPrices() {
        const tableBody = document.getElementById('crypto-prices');
        cryptocurrencies.forEach(crypto => {
            const row = `<tr>
                            <td>${crypto.name}</td>
                            <td>$${crypto.price.toLocaleString()}</td>
                        </tr>`;
            tableBody.innerHTML += row;
        });
    }

    // Call the function to populate the table when the page loads
    window.onload = displayCryptoPrices;
</script>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .section-heading {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
    }

    /* Demo Balance */
    .demo-balance {
        background: #e9ecef;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-size: 20px;
        font-weight: 600;
        color: #007bff; /* Blue for balance */
    }

    /* Trading Actions */
    .trading-actions {
        background: #ffffff;
        padding: 25px;
        margin-top: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .trade-form label {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        color: #555;
    }

    .trade-form select,
    .trade-form input {
        width: 100%;
        padding: 7px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #f9f9f9;
        font-size: 16px;
    }

    .trade-buttons {
        display: flex;
        justify-content: space-between;
    }

    .btn-buy,
    .btn-sell {
        width: 48%;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-buy {
        background-color: #28a745; /* Green for Buy (Bull color) */
    }

    .btn-sell {
        background-color: #dc3545; /* Red for Sell */
    }

    .btn-buy:hover {
        background-color: #218838; /* Darker green on hover */
    }

    .btn-sell:hover {
        background-color: #c82333; /* Darker red on hover */
    }

    /* Portfolio Section */
    .portfolio-section {
        margin-top: 40px;
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
</style>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>
                
        <!-- send all users email -->
    </div>
</div>
</div>
</div>
<!-- END: Card DATA-->
</div>

</main>
        
        
@include('user.layouts.footer')