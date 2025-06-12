
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
                        <li class="breadcrumb-item active">Trade History</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- START: Card Data-->


        <div class="col-12 col-lg-12 col-xl-12 mt-3">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-body p-4">
                    <!-- Trade History Card -->
                    <div class="card card-primary card-outline border-0 shadow-sm">
                        <div class="card-body p-4">
                            <!-- Trade History Header -->
                            <h4 class="text-center font-weight-bold mb-4">Trade History</h4>
                            <hr class="my-3">
                            <!-- Trade History Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Amount in USD</th>
                                            <th>Crypto Amount</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Pair</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>${{ number_format($transaction->usd_value, 8) }}</td>
                                                <td>{{ number_format($transaction->crypto_amount, 8) }}</td> <!-- Show full crypto amount -->
                                                <td class="text-center" style="color: {{ $transaction->transaction_type == 'ADD' ? 'green' : ($transaction->transaction_type == 'SUBTRACT' ? 'red' : 'black') }};">
                                                    {{ $transaction->transaction_type == 'ADD' ? 'Buy' : ($transaction->transaction_type == 'SUBTRACT' ? 'Sell' : 'N/A') }}
                                                </td>
                                                
                                                <td>{{ $transaction->created_at->format('M d, Y H:i:s') }}</td>
                                                <td>
                                                    @if($transaction->currency_type == 'ethereum')
                                                        ETH/USD
                                                    @elseif($transaction->currency_type == 'bitcoin')
                                                        BTC/USD
                                                    @else
                                                        {{ strtoupper($transaction->currency_type) }}/USD
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        
        </div>

        <style>
            .table thead th {
                background-color: #4e73df;
                color: white;
                text-align: center;
                font-weight: bold;
            }
        
            .table tbody tr td {
                text-align: center;
                vertical-align: middle;
            }
        
            .card-body {
                padding: 20px;
            }
        
            .font-weight-bold {
                font-size: 1.2rem;
                color: #333;
            }
        
            hr {
                border-top: 1px solid #e0e0e0;
            }
        
            .table th, .table td {
                font-size: 0.95rem;
                padding: 1rem;
            }
        
            .table-bordered {
                border: 1px solid #d1d1d1;
            }
        
            .thead-dark {
                background-color: #343a40;
                color: white;
            }
        
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #f2f2f2;
            }
        
            .table-striped tbody tr:nth-of-type(even) {
                background-color: #ffffff;
            }
        
            .card-primary {
                border-left: 4px solid #4e73df;
            }
        
            .card-outline {
                border: 1px solid #e0e0e0;
            }
        
            /* Custom color for Buy (green) and Sell (red) */
            .buy {
                color: green;
            }
        
            .sell {
                color: red;
            }
        </style>
        
        
</main>
@include('user.layouts.footer')
