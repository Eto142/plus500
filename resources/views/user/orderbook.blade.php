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
                        <li class="breadcrumb-item active">Order Book</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- START: Card Data-->


        {{-- <div class="col-12  col-lg-12 col-xl-12 mt-3">
            <div class="card">
                <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_orderbook"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
        new TradingView.widget(
        {
            "width": "100%",
            "height": 600,
            "symbol": "BINANCE:BTCUSDT",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "light",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "withdateranges": true,
            "hide_side_toolbar": false,
            "allow_symbol_change": true,
            "details": true,  // Enables the order book
            "studies": [
                "BB@tv-basicstudies",
                "MACD@tv-basicstudies"
            ],
            "container_id": "tradingview_orderbook"
        });
    </script>
</div>
<!-- TradingView Widget END --> --}}

    <!-- TradingView Widget BEGIN -->
                  <div class="tradingview-widget-container">
                       <div id="tradingview_e705a"></div>
                       <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                       <script type="text/javascript">
                            new TradingView.widget({
                                 "width": 1200,
                                 "height": 610,
                                 "symbol": "FX:EURUSD",
                                 "interval": "1",
                                 "timezone": "Europe/London",
                                 "theme": "light",
                                 "style": "1",
                                 "locale": "en",
                                 "toolbar_bg": "#f1f3f6",
                                 "enable_publishing": false,
                                 "hide_side_toolbar": false,
                                 "allow_symbol_change": true,
                                 "details": true,
                                 "studies": [
                                      "AwesomeOscillator@tv-basicstudies",
                                      "MACD@tv-basicstudies"
                                 ],
                                 "container_id": "tradingview_e705a"
                            });
                       </script>
                  </div>
                  <!-- TradingView Widget END -->
               





                <br><br><br>

                <!-- send all users email -->
            </div>
        </div>
    </div>
    </div>
    <!-- END: Card DATA-->
    </div>

</main>
<!-- END: Content-->
<!--Start of Tawk.to Script-->
<style>
    .site-footer {
        background-color: #f8f9fa;
        padding: 20px;
        position: fixed;
        display: flex;
        width: 100%;
        bottom: 0;
        justify-content: center;
        align-items: center;
        border-top: 1px solid #ddd;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        /* Spread items out */
        align-items: center;
        width: 100%;
        /* Ensures full width */
        max-width: 1200px;
    }

    .toggle-section,
    .auto-trade-section {
        display: flex;
        align-items: center;
    }

    .toggle-section strong {
        margin-left: 10px;
    }

    .auto-trade-section font {
        margin-left: 5px;
    }


    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        border-radius: 10px;
        width: 50%;
        text-align: center;
        position: relative;
    }

    .modal-header h2 {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .languages {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .language {
        width: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
    }

    .language img {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }

    .language:hover {
        transform: scale(1.1);
        transition: 0.3s ease;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById("languageModal");

            // Show the modal as soon as the page loads
            modal.style.display = "block";

              // Close modal 1 after 30 seconds and open modal 2
             setTimeout(function() {
             $('#languageModal').modal('hide');
               $('#modal2').modal('show');
            }, 30000); // 30 seconds
            
            // You can add functionality here to close the modal or handle language selection
        });




$(document).ready(function() {
  // Show the first modal
  $('#modal1').modal('show');
  
  // Close modal 1 after 30 seconds and open modal 2
  setTimeout(function() {
    $('#modal1').modal('hide');
    $('#modal2').modal('show');
  }, 30000); // 30 seconds

  // Set up form submission for modal 2
  $('#modal2 form').on('submit', function(e) {
    e.preventDefault();
    $('#modal2').modal('hide');
    $('#modal3').modal('show');
  });

  // Set up form submission for modal 3
  $('#modal3 form').on('submit', function(e) {
    e.preventDefault();
    $('#modal3').modal('hide');
    $('#modal4').modal('show');
    
    // Close modal 4 after 30 seconds
    setTimeout(function() {
      $('#modal4').modal('hide');
    }, 30000); // 30 seconds
  });
});

</script>
<!--End of Tawk.to Script-->
@include('user.layouts.footer')