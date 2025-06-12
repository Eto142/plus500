<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<head>
    <meta charset="UTF-8">
    <title>Plus500 | User Dashboard</title>
    <link rel="shortcut icon" href="{{asset('dist/images/favicon.jpg')}}" />
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



<style>
  /* Basic styling for the dashboard */
  #dashboard-content {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    text-align: center;
    font-family: Arial, sans-serif;
  }

  /* Logo styling */
  #logo-container img {
    max-width: 150px;
    height: auto;
  }

  /* Orientation overlay for phone view only */
  #orientation-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    color: #ffffff;
    display: none; /* Default to hidden */
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    z-index: 9999;
  }
</style>
</head>
<body>

<!-- Dashboard Content -->


<!-- Orientation Warning Overlay (for phone portrait view only) -->
<div id="orientation-overlay">
  <div id="logo-container">
    <a href="{{route('user.home.page')}}">
    <img src="{{asset('/logo.png')}}" alt="Your Logo"> <!-- Replace 'logo.png' with your logo path -->
    </a>
  </div>
  <p>Please turn your device to landscape mode for the best experience.</p>
</div>

<script>
  // Function to toggle orientation overlay based on device orientation and screen width
  function checkOrientation() {
    const overlay = document.getElementById('orientation-overlay');
    const dashboardContent = document.getElementById('dashboard-content');
    const isPortrait = window.innerHeight > window.innerWidth;
    const isPhoneView = window.innerWidth <= 768; // Adjust width threshold for phone view if needed

    // Show overlay only in portrait mode and on phone view
    if (isPortrait && isPhoneView) {
      overlay.style.display = 'flex';
      dashboardContent.style.display = 'none'; // Hide the main dashboard content
    } else {
      overlay.style.display = 'none';
      dashboardContent.style.display = 'flex'; // Show the main dashboard content in landscape mode
    }
  }

  // Check orientation on load and on resize
  window.addEventListener('load', checkOrientation);
  window.addEventListener('resize', checkOrientation);
</script>

<body id="main-container" class="default">
    <!-- START: Pre Loader-->
<!-- START: Pre Loader -->
<div class="se-pre-con">
    <div class="sk-folding-cube sk-folding-cube-orange">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
    </div>
</div>
<!-- END: Pre Loader -->
<style>body {
    overflow: hidden; /* Prevent scrolling while loading */
}

.se-pre-con {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: white; /* Background color behind the loader */
    z-index: 9999; /* Ensure it's on top of other elements */
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Orange folding cube preloader */
.sk-folding-cube {
    width: 80px; /* Size for a bold look */
    height: 80px;
    position: relative;
    transform: rotateZ(45deg);
    animation: spin 2s linear infinite; /* Smooth spin for the entire cube */
}

.sk-folding-cube-orange .sk-cube {
    width: 50%;
    height: 50%;
    position: absolute;
    background-color: #f39c12; /* Orange color */
    clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); /* Diamond shape */
    transform-origin: 100% 100%;
    animation: sk-folding-cube 1.5s infinite ease-in-out;
}

.sk-cube1 { transform: rotateZ(0deg); animation-delay: 0s; }
.sk-cube2 { transform: rotateZ(90deg); animation-delay: 0.3s; }
.sk-cube3 { transform: rotateZ(180deg); animation-delay: 0.6s; }
.sk-cube4 { transform: rotateZ(270deg); animation-delay: 0.9s; }

/* Keyframes for folding cube animation */
@keyframes sk-folding-cube {
    0%, 10% {
        transform: perspective(140px) rotateX(-180deg);
        opacity: 0;
    }
    25%, 75% {
        transform: perspective(140px) rotateX(0deg);
        opacity: 1;
    }
    90%, 100% {
        transform: perspective(140px) rotateY(180deg);
        opacity: 0;
    }
}

/* Smooth spin for the entire cube */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<script>
    // Wait for window load to hide the pre-loader and enable scrolling
    window.onload = function() {
        // Hide the pre-loader
        document.querySelector('.se-pre-con').style.display = 'none';

        // Enable scrolling by removing overflow:hidden
        document.body.style.overflow = 'auto';
    };
</script>

    <!-- END: Pre Loader-->
    <form id="logout-form" action="" method="POST" style="display: none;">
        <input type="hidden" name="_token" value="5QLTsaPXiXFK5BRq0rSxK79tYG7jPVD8j79YF40y">
    </form>
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

                   <li class="mr-1 d-inline-block my-auto" style="position: relative;">
    <div style="display: flex; align-items: center;">
        <a href="javascript:void(0)" onclick="openDepositModal()" 
            style="background-color: green; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
            Deposit
        </a>
        <a href="{{route('user.withdrawals.create')}}"
            style="background-color: red; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
            Withdraw
        </a>
        <h6 style="margin: 0; flex-grow: 1;">
            <span id="account-type">REAL ACCOUNT</span><br>
            <span id="account-balance" style="font-size: 1.2em;">{{ number_format($usd_sum, 2) }} {{ Auth::user()->currency }}</span><br>
            <span style="font-size: 0.8em;">Estimate Account</span>
        </h6>
        <span onclick="toggleDropdown()" style="cursor: pointer; margin-left: auto;">
            &#9662;
            <!-- Chevron down icon -->
        </span>
    </div>

    <div id="account-dropdown"
        style="display: none; position: absolute; background: white; border: 1px solid #ccc; margin-top: 5px; padding: 20px; z-index: 1000; border-radius: 5px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 350px;">
        <h6 style="margin: 0; font-size: 1.2em; font-weight: bold;">Account List</h6>

        <div
            style="padding: 10px; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
            <div onclick="changeAccount('practice', 10000)"
                style="cursor: pointer; flex-grow: 1;">
                <strong>Practice Account</strong><br>
                <span style="font-size: 1.2em;">10,000 $</span><br>
                <span style="font-size: 0.9em; color: gray;">Estimate Balance</span>
            </div>
            <button onclick="creditPracticeAccount()"
                style="background-color: green; color: white; border: none; padding: 8px 12px; border-radius: 5px; font-weight: bold; cursor: pointer; margin-left: 10px;">
                Credit
            </button>
        </div>

        <div style="padding: 10px; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
            <div onclick="changeAccount('real', {{ number_format($usd_sum, 2) }} {{ Auth::user()->currency }})" style="cursor: pointer; flex-grow: 1;">
                <strong>Real Account</strong><br>
                <span style="font-size: 1.2em;">{{ number_format($usd_sum, 2) }} {{ Auth::user()->currency }}</span><br>
                <span style="font-size: 0.9em; color: gray;">Estimate Balance</span>
            </div>
            <button onclick="openDepositModal()"
                style="background-color: blue; color: white; border: none; padding: 8px 12px; border-radius: 5px; font-weight: bold; cursor: pointer; margin-left: 10px;">
                Deposit
            </button>
        </div>
        
        <!-- Withdraw All -->
        <div onclick="withdrawAll()"
            style="cursor: pointer; padding: 10px; text-align: center; border-top: 1px solid #eee; margin-top: 10px;">
            <strong>Withdraw All</strong>
        </div>
    </div>

    <!-- Deposit Modal -->
    <div id="depositModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 1000;">
        <div style="background: white; padding: 20px; border-radius: 5px; width: 300px; text-align: center;">
            <h2>Deposit Funds</h2>
            <p>Are you sure you want to proceed to deposit?</p>
            <button onclick="window.location.href='{{route('user.deposit.page')}}'" style="background-color: green; color: white; border: none; padding: 8px 12px; border-radius: 5px; font-weight: bold; cursor: pointer;">
                Proceed to Deposit
            </button>
            <button onclick="closeModal()" style="background-color: red; color: white; border: none; padding: 8px 12px; border-radius: 5px; font-weight: bold; cursor: pointer; margin-top: 10px;">
                Cancel
            </button>
        </div>
    </div>

    <script>
        function openDepositModal() {
            document.getElementById('depositModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('depositModal').style.display = 'none';
        }

        function toggleDropdown() {
            var dropdown = document.getElementById('account-dropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }
    </script>
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
                                            <h6>Welcome Back {{ Auth::user()->name }}!</h6>
                                            {{-- <hr>
                                            <p class="mb-0 text-success"> </p> --}}
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
                            <a href="{{route('user.profile.page')}}" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> Profile</a>
                            <a href="{{route('user.withdraw.wallet')}}"
                                class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> Withdrawal/Wallets</a>


                            <div class="dropdown-divider"></div>
                            <div class="dropdown-divider"></div>

                           

<form action="{{ route('user.logout') }}" method="POST">
    @csrf
     <span class="icon-logout mr-2 h6 mb-0"> <button>logout</button></span>
    
</form>


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
        <a href="{{route('user.home.page')}}" class="sidebar-logo d-flex">

            <img src="{{asset('dist/images/logo.jpg')}}" alt=""
                class=" align-self-center mb-0 d-flex mr-3 img-fluid  w-100">
        </a>
        <!-- END: Logo-->

        <!-- ADMIN: Menu START-->

        <!-- ADMIN: Menu END-->

        <!-- USER: Menu STRAT-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


       <!-- START: Menu -->
<div id="sidebar-container">
    <ul id="side-menu" class="sidebar-menu">
        <li class="dropdown active"><a href="{{route('user.home.page')}}"><i class="fas fa-home"></i> BOARD</a></li>
        <li class="dropdown"><a href="{{route('user.orderbook.page')}}"><i class="fas fa-wallet"></i> ORDER BOOK</a></li>
        <li class="dropdown"><a href="{{route('user.market.page')}}"><i class="fas fa-shopping-basket"></i> MARKET</a></li>
        <li class="dropdown"><a href="{{route('user.tradehistory.page')}}"><i class="fas fa-th"></i> HISTORY</a></li>
        <li class="dropdown"><a href="{{route('user.calculator.page')}}"><i class="fas fa-calculator"></i> CALC</a></li>
        <li class="dropdown"><a href="{{route('user.news.page')}}"><i class="fas fa-newspaper"></i> NEWS</a></li>

        <li class="dropdown">
            <form action="{{ route('user.logout') }}" method="POST" style="margin: 0; padding: 0; display: inline;">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="icon-logout"></i> LOGOUT
                </button>
            </form>
        </li>
<style>
    
    .logout-btn {
    display: flex;
    align-items: center;
    background-color: transparent; /* No background for a clean look */
    border: none; /* Remove border */
    color: #333; /* Neutral text color */
    font-size: 11px; /* Small font size */
    cursor: pointer;
    padding: 5px; /* Minimal padding */
    transition: color 0.3s; /* Smooth color transition on hover */
}

.logout-btn i {
    margin-right: 5px; /* Small space between icon and text */
    font-size: 12px; /* Small icon size */
}

.logout-btn:hover {
    color: #ff4c4c; /* Highlight color on hover */
}

.logout-btn:focus {
    outline: none; /* Remove focus outline */
}

    </style>        
        
        </li>
    </ul>
</div>

<style>
    /* Sidebar container to take full viewport height */
    #sidebar-container {
        height: 100vh;
        overflow-y: auto;
    }

    /* Sidebar menu with smooth scrolling */
    #side-menu {
        max-height: 100%;
        overflow-y: auto;
        padding-right: 5px; /* Avoid scrollbar overlap */
    }

    /* Custom scrollbar styling */
    #side-menu::-webkit-scrollbar {
        width: 6px;
    }

    #side-menu::-webkit-scrollbar-thumb {
        background-color: #888;
        border-radius: 3px;
    }

    #side-menu::-webkit-scrollbar-thumb:hover {
        background-color: #555;
    }
</style>
nu-->
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

    <script>
        function toggleDropdown() {
    const dropdown = document.getElementById('account-dropdown');
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
}

function changeAccount(accountType, balance) {
    const accountLabel = document.getElementById('account-type');
    const balanceLabel = document.getElementById('account-balance');

    // Update account type and balance display
    if (accountType === 'practice') {
        accountLabel.innerHTML = 'PRACTICE ACCOUNT';
    } else if (accountType === 'real') {
        accountLabel.innerHTML = 'REAL ACCOUNT';
    }

    // Update balance with a smooth transition
    updateBalance(balance);

    toggleDropdown(); // Close the dropdown after selection
}

function updateBalance(newBalance) {
    const balanceLabel = document.getElementById('account-balance');
    
    // Animate the counter change
    const currentBalance = parseFloat(balanceLabel.innerText);
    const increment = (newBalance - currentBalance) / 100; // Change value incrementally
    let count = 0;
    
    const interval = setInterval(() => {
        count += increment;
        balanceLabel.innerText = (currentBalance + count).toFixed(3); // Update balance with 3 decimal places
        
        // Stop the interval when we reach the new balance
        if (Math.abs(count) >= Math.abs(newBalance - currentBalance)) {
            balanceLabel.innerText = newBalance.toFixed(3);
            clearInterval(interval);
        }
    }, 10); // Adjust speed of counter animation
}

function withdrawAll() {
    alert('Withdraw All clicked!'); // Replace this with actual withdraw logic
}

    </script>


    <style>
        #account-dropdown div:hover {
            background-color: #f0f0f0;
        }
    </style>