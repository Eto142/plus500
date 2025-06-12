<div class="container">
    <!-- BTC/USDT Order Book Section -->
    <h2 class="text-center">BTC/USDT Order Book</h2>

    <div class="row">
        <!-- Bids Section -->
        <div class="col-md-6 order-book">
            <h4>Bids</h4>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Price (USDT)</th>
                        <th>Amount (BTC)</th>
                        <th>Total (USDT)</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($orderBookData['bids']))
                    @foreach($orderBookData['bids'] as $bid)
                    <tr>
                        <td style="color: #2ecc71;">{{ number_format($bid[0], 2) }}</td>
                        <td>{{ number_format($bid[1], 6) }}</td>
                        <td>{{ number_format($bid[0] * $bid[1], 2) }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="3">No bids available</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Asks Section -->
        <div class="col-md-6 order-book">
            <h4>Asks</h4>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Price (USDT)</th>
                        <th>Amount (BTC)</th>
                        <th>Total (USDT)</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($orderBookData['asks']))
                    @foreach($orderBookData['asks'] as $ask)
                    <tr>
                        <td style="color: #e74c3c;">{{ number_format($ask[0], 2) }}</td>
                        <td>{{ number_format($ask[1], 6) }}</td>
                        <td>{{ number_format($ask[0] * $ask[1], 2) }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="3">No asks available</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Additional Data Section -->
    <div class="trading-data mt-5">
        <h3>Market Overview</h3>
        @if(isset($marketData['price']))
        <p>Current BTC/USDT Price: <strong>{{ number_format($marketData['price'], 2) }}</strong> USDT</p>
        @else
        <p>No market data available</p>
        @endif
    </div>
</div>

<!-- Trading Chart Section -->
<div class="container mt-5">
    <h2>Trading Chart - BTC/USDT</h2>
    <div id="chartContainer" style="height: 500px; width: 100%;"></div>
</div>

<!-- Include Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('chartContainer').getContext('2d');
    const candlestickData = {!! json_encode($candlestickData) !!};

    const labels = candlestickData.map(data => new Date(data[0]).toLocaleString());
    const prices = candlestickData.map(data => ({
        open: parseFloat(data[1]),
        high: parseFloat(data[2]),
        low: parseFloat(data[3]),
        close: parseFloat(data[4])
    }));

    // Render the trading chart
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'BTC/USDT Closing Price',
                data: prices.map(p => p.close),
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            scales: {
                x: {
                    type: 'time',
                    time: {
                        unit: 'minute'  // Can be adjusted based on the interval
                    }
                },
                y: {
                    beginAtZero: false
                }
            }
        }
    });
</script>

<style>
    /* Order Book Table Styling */
    .order-book table {
        font-size: 14px;
    }

    .table td {
        text-align: right;
    }

    /* Trading Data Panel Styling */
    .trading-data {
        background-color: #2d2d2d;
        padding: 15px;
        border-radius: 8px;
        color: #fff;
    }

    .trading-data h3 {
        color: blue;
        font-size: 20px;
    }
</style>