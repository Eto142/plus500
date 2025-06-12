<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<head>
    <meta charset="UTF-8">
    <title>Ditexcoin | User panel</title>
    <link rel="shortcut icon" href="{{asset('dist/images/favicon.ico')}}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="{{ asset('dist/vendors/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/weather-icons/css/pe-icon-set-weather.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/starrr/starrr.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/cryptofont/cryptofont.css') }}">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <!-- END: Custom CSS-->

    <script>
        jQuery(document).ready(function($) {
            $(".toggle").click(function() {
                $(".toggle").toggleClass("active");
                $("body").toggleClass("night");
                $.cookie("toggle", $(".toggle").hasClass('active'));
            });

            if ($.cookie("toggle") == "true") {
                $(".toggle").addClass("active");
                $("body").addClass("night");
            }
        });
    </script>
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->
<!-- START: Body-->
<!-- START: Body-->

<body id="main-container" class="default">
    <!-- START: Pre Loader-->
    <div class="se-pre-con">
        <img src="{{asset('dist/images/logo.jpg')}}" alt="logo" width="20" class="img-fluid" />
    </div>
    <!-- END: Pre Loader-->
    <form id="logout-form" action="https://ditexcoin.com/logout" method="POST" style="display: none;">
        <input type="hidden" name="_token" value="5QLTsaPXiXFK5BRq0rSxK79tYG7jPVD8j79YF40y">
    </form>
    <div id="languageModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Select your language</h2>
            </div>
            <div class="modal-body">
                <div class="languages">
                    <div class="language">
                        <img src="flags/arabic.png" alt="Arabic"> Arabic
                    </div>
                    <div class="language">
                        <img src="flags/bengali.png" alt="Bengali"> Bengali
                    </div>
                    <div class="language">
                        <img src="flags/chinese.png" alt="Chinese"> Chinese
                    </div>
                    <div class="language">
                        <img src="flags/czech.png" alt="Czech"> Czech
                    </div>
                    <div class="language">
                        <img src="flags/german.png" alt="German"> German
                    </div>
                    <div class="language">
                        <img src="flags/english.png" alt="English"> English
                    </div>
                    <div class="language">
                        <img src="flags/spanish.png" alt="Spanish"> Spanish
                    </div>
                    <div class="language">
                        <img src="flags/estonian.png" alt="Estonian"> Estonian
                    </div>
                    <div class="language">
                        <img src="flags/french.png" alt="French"> French
                    </div>
                    <div class="language">
                        <img src="flags/hindi.png" alt="Hindi"> Hindi
                    </div>
                    <div class="language">
                        <img src="flags/croatian.png" alt="Croatian"> Croatian
                    </div>
                    <div class="language">
                        <img src="flags/armenian.png" alt="Armenian"> Armenian
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- START: Header-->
    <div id="header-fix" class="header fixed-top">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header h4 mb-0 align-self-center d-flex">
                <a class="horizontal-logo align-self-center d-flex d-lg-none">
                    <span class="h5 align-self-center mb-0 ">iPONGDEV</span>
                </a>
                <a href="#" class="sidebarCollapse ml-2" id="collapse"><i class="icon-menu body-color"></i></a>
            </div>
            <div class="d-inline-block position-relative">
                {{-- <button id="tourfirst" data-toggle="dropdown" aria-expanded="false"
                    class="btn btn-primary p-2 rounded mx-3 h4 mb-0 line-height-1 d-none d-lg-block">
                    <span class="text-white font-weight-bold h5"><span
                            class="icon-wallet mr-2 h6  mb-0"></span>&#36;50.00</span></button> --}}

            </div>


            <div class="navbar-right ml-auto">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex">

                    <li class="mr-1 d-inline-block my-auto">
                        <div style="display: flex; align-items: center;">
                            <a href="your-deposit-link-here"
                                style="background-color: green; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
                                Deposit
                            </a>
                            <h6 style="margin: 0;">
                                PRACTICE ACCOUNT<br>
                                <span style="font-size: 1.2em;">9,893940</span><br>
                                <span style="font-size: 0.8em;">Estimate Account</span>
                            </h6>
                        </div>

                    </li>

                    <li class="mr-1 d-inline-block my-auto d-block d-lg-none">
                        </i>
                        </a>
                    </li>




                    <!-- Notification Page-->
                    <li class="dropdown align-self-center mr-1 d-inline-block">
                        <a href="#" class="nav-link px-2" data-toggle="dropdown" aria-expanded="false"><i
                                class="icon-bell h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                </span><span class="ring-point">
                                </span> </span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right border   py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
                                    href="#">
                                    <div class="media">
                                        <img src="/images/logo.jpg" alt=""
                                            class="d-flex mr-3 img-fluid rounded-circle w-50">
                                        <div class="media-body">
                                            <h6>Welcome</h6>
                                            <hr>
                                            <p class="mb-0 text-success"> From Admin</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- End Notification-->


                    <!-- START: Header Profile-->
                    <li class="dropdown user-profile d-inline-block py-1 mr-2">
                        <a href="#" class="nav-link px-2 py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                <div class="media-body align-self-center d-none d-sm-block mr-2">
                                    <p class="mb-0 text-uppercase line-height-1"><b>
                                        </b><br /><span>
                                        </span></p>

                                </div>
                                <img src="{{asset('dist/images/profilep.png')}}" alt=""
                                    class="d-flex img-fluid rounded-circle" width="45">
                            </div>
                        </a>

                        <div class="dropdown-menu  dropdown-menu-right p-0">
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-pencil mr-2 h6 mb-0"></span> Profile</a>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> Payment Details</a>

                            <div class="dropdown-divider"></div>
                            <div class="dropdown-divider"></div>

                            <a href=""
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span>Sign Out</a>


                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!-- END: Header-->



    <!-- START: Main Menu-->
    <!-- START: Main Menu-->
    <div class="sidebar">
        <a href="#"
            class="sidebarCollapse float-right h6 dropdown-menu-right mr-2 mt-2 position-absolute d-block d-lg-none">
            <i class="icon-close"></i>
        </a>
        <!-- START: Logo-->
        <a href="#" class="sidebar-logo d-flex">

            <img src="{{asset('dist/images/logo.jpg')}}" alt=""
                class=" align-self-center mb-0 d-flex mr-3 img-fluid  w-100">
        </a>
        <!-- END: Logo-->

        <!-- ADMIN: Menu START-->

        <!-- ADMIN: Menu END-->

        <!-- USER: Menu STRAT-->


        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
            <li class="dropdown active"><a href=""><i class="icon-home"></i>BOARD</a>
            </li>
            <li class="dropdown"><a href=""><i class="icon-wallet"></i>ORDER BOOK</a>
            </li>
            <li class="dropdown"><a href=""><i class="icon-basket"></i>MARKET</a>
            </li>
            <li class="dropdown"><a href=""><i class="icon-grid"></i>PORTFOLIO</a>
            <li class="dropdown"><a href="https://ditexcoin.com/dashboard/myplans"><i class="icon-grid"></i>CALC</a>
            <li class="dropdown"><a href="https://ditexcoin.com/dashboard/tradinghistory"><i
                        class="icon-grid"></i>NEWS</a>
                <!--- <div> 
                        <ul>
                            <li><a href="https://ditexcoin.com/dashboard/mplans"><i class="icon-loop"></i> Activate Package</a></li>
                            <li><a href="https://ditexcoin.com/dashboard/myplans"><i class="icon-eye"></i> Current Package</a></li>
                            <li><a href="https://ditexcoin.com/dashboard/tradinghistory"><i class="icon-compass"></i> Transaction ROI</a></li>                        
                        </ul> 
                    </div>-->

            </li>

            <li class="dropdown"><a href="#"><i class="icon-user"></i>Profile</a>
                <div>
                    <ul>
                        <li><a href=""><i class="icon-user-following"></i>
                                Personal Account</a></li>
                        <li><a href=""><i class="icon-pencil"></i> Update
                                Payment Details</a></li>
                    </ul>
                </div>

            </li>
            <li class="dropdown"><a href="https://ditexcoin.com/dashboard/referuser"><i
                        class="icon-link"></i>Referral</a>
            </li>
            <li class="dropdown"><a href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="icon-logout"></i>Logout</a>

            <li><a href="#"><i class=" "></i></a></li>

            </li>


        </ul>
        <!-- END: Menu-->
    </div>
    <!-- END: Main Menu-->
    <!-- END: Main Menu-->
    <!-- GetButton.io widget -->
    <script type="text/javascript">
        //     (function () {
    //     var options = {
    //         whatsapp: "+13134032154", // WhatsApp number
    //         call_to_action: "Reach-out on Whatsapp", // Call to action
    //         position: "left", // Position may be 'right' or 'left'
    //     };
    //     var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
    //     var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    //     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    //     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    // })();
    </script>
    <!-- /GetButton.io widget -->
    <!-- ADMIN DISPLAY STARTS-->

    <!-- ADMIN DISPLAY ENDS-->
    <!-- USER DISPLAY STARTS-->



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
    <!-- START: Footer-->
    <footer class="site-footer">
        <div class="footer-container">
            <div class="toggle-section">
                <div class="toggle"></div>
            </div>
            <div class="auto-trade-section">
                <font color="#000">Auto-Trade:</font>
                <font color="green"> on</font>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </footer>

    <!-- END: Footer-->


    <!-- START: Template JS-->
    <script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/flag-select/js/jquery.flagstrap.min.js') }}"></script>
    <!-- END: Template JS-->

    <!-- START: APP JS-->
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <!-- END: APP JS-->

    <!-- START: Page Vendor JS-->
    <script src="{{ asset('dist/vendors/amcharts/core.js') }}"></script>
    <script src="{{ asset('dist/vendors/amcharts/charts.js') }}"></script>
    <script src="{{ asset('dist/vendors/amcharts/animated.js') }}"></script>
    <script src="{{ asset('dist/vendors/amcharts/amchartsdark.js') }}"></script>
    <script src="{{ asset('dist/vendors/amcharts/plugins/timeline.js') }}"></script>
    <script src="{{ asset('dist/vendors/amcharts/plugins/bullets.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- START: Page Script JS-->
    <script src="{{ asset('dist/js/amcharts.script.js') }}"></script>
    <!-- END: Page Script JS-->


</body>
<!-- END: Body-->

</html>