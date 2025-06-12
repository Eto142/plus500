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
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- START: Card Data-->


        <div class="col-12  col-lg-12 col-xl-12 mt-3">
            <div class="card">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_6e482"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.MediumWidget(
  {
  "symbols": [
    [
      "BITSTAMP:BTCUSD|12M"
    ],
    [
      "BINANCE:ETHUSDT|12M"
    ],
    [
      "BINANCE:DOGEUSDT|12M"
    ],
    [
      "BINANCE:SHIBUSDT|12M"
    ],
    [
      "BITSTAMP:XRPUSD|12M"
    ]
  ],
  "chartOnly": false,
  "width": "100%",
  "height": 400,
  "locale": "en",
  "colorTheme": "light",
  "gridLineColor": "rgba(42 ,46, 57, 0)",
  "fontColor": "#787B86",
  "isTransparent": false,
  "autosize": false,
  "showFloatingTooltip": true,
  "scalePosition": "no",
  "scaleMode": "Normal",
  "fontFamily": "Trebuchet MS, sans-serif",
  "noTimeScale": false,
  "chartType": "area",
  "lineColor": "#2962FF",
  "bottomColor": "rgba(41, 98, 255, 0)",
  "topColor": "rgba(41, 98, 255, 0.3)",
  "container_id": "tradingview_6e482"
}
  );
                    </script>
                </div>
                <!-- TradingView Widget END -->

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
  "width": "100%",
  "height": 490,
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "BTC",
  "colorTheme": "light",
  "locale": "en"
}
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
@include('user.layouts.footer')