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

    <!-- toastr-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
        alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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
        display: none;
        /* Default to hidden */
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
            <img src="{{asset('/logo.png')}}" alt="Your Logo"> <!-- Replace 'logo.png' with your logo path -->
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
        <style>
            body {
                overflow: hidden;
                /* Prevent scrolling while loading */
            }

            .se-pre-con {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: white;
                /* Background color behind the loader */
                z-index: 9999;
                /* Ensure it's on top of other elements */
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /* Orange folding cube preloader */
            .sk-folding-cube {
                width: 80px;
                /* Size for a bold look */
                height: 80px;
                position: relative;
                transform: rotateZ(45deg);
                animation: spin 2s linear infinite;
                /* Smooth spin for the entire cube */
            }

            .sk-folding-cube-orange .sk-cube {
                width: 50%;
                height: 50%;
                position: absolute;
                background-color: #f39c12;
                /* Orange color */
                clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
                /* Diamond shape */
                transform-origin: 100% 100%;
                animation: sk-folding-cube 1.5s infinite ease-in-out;
            }

            .sk-cube1 {
                transform: rotateZ(0deg);
                animation-delay: 0s;
            }

            .sk-cube2 {
                transform: rotateZ(90deg);
                animation-delay: 0.3s;
            }

            .sk-cube3 {
                transform: rotateZ(180deg);
                animation-delay: 0.6s;
            }

            .sk-cube4 {
                transform: rotateZ(270deg);
                animation-delay: 0.9s;
            }

            /* Keyframes for folding cube animation */
            @keyframes sk-folding-cube {

                0%,
                10% {
                    transform: perspective(140px) rotateX(-180deg);
                    opacity: 0;
                }

                25%,
                75% {
                    transform: perspective(140px) rotateX(0deg);
                    opacity: 1;
                }

                90%,
                100% {
                    transform: perspective(140px) rotateY(180deg);
                    opacity: 0;
                }
            }

            /* Smooth spin for the entire cube */
            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


        <style>
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.4);
            }

            .modal-content {
                background-color: #fff;
                margin: 10% auto;
                padding: 20px;
                border-radius: 10px;
                width: 50%;
                text-align: center;
            }

            .currency,
            .country {
                display: inline-block;
                text-align: center;
                margin: 15px;
                cursor: pointer;
            }

            .currency img,
            .country img {
                width: 50px;
                height: 50px;
                border-radius: 5px;
                transition: transform 0.3s ease;
            }

            .currency img:hover,
            .country img:hover {
                transform: scale(1.1);
            }

            /* Hide the radio buttons */
            .currency input[type="radio"],
            .country input[type="radio"] {
                display: none;
            }

            #countryForm {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
                /* Adjust number of columns */
                gap: 15px;
                /* Space between items */
            }

            .country label {
                display: flex;
                flex-direction: column;
                align-items: center;
                font-size: 14px;
            }

            .country img {
                width: 40px;
                /* Adjust size of images */
                height: auto;
            }

            .country span {
                margin-top: 5px;
            }
        </style>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        </head>

        <body>
            <!-- First Modal -->
            <!-- Modal Structure -->
            <div id="firstModal" class="modal">
                <div class="modal-content">
                    <span class="close-btn" onclick="closeModal()">&times;</span>
                    <h2>Welcome to Plus500</h2>
                    <p>Please complete your account setup to get started.</p>
                    <button onclick="continueSetup()">Continue</button>
                </div>
            </div>

            <!-- Styles -->
            <style>
                /* Modal Background */
                .modal {
                    display: block;
                    /* Change to 'none' to hide initially */
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                /* Modal Content */
                .modal-content {
                    background-color: #fff;
                    padding: 30px;
                    border-radius: 10px;
                    width: 90%;
                    max-width: 400px;
                    text-align: center;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    animation: fadeIn 0.5s;
                }

                /* Close Button */
                .close-btn {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    font-size: 24px;
                    color: #333;
                    cursor: pointer;
                }

                /* Modal Heading */
                .modal-content h2 {
                    color: #1d3557;
                    margin-bottom: 10px;
                }

                /* Modal Text */
                .modal-content p {
                    color: #555;
                    margin-bottom: 20px;
                }

                /* Continue Button */
                .modal-content button {
                    background-color: #1d3557;
                    color: #fff;
                    border: none;
                    padding: 10px 20px;
                    font-size: 16px;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                .modal-content button:hover {
                    background-color: #457b9d;
                }

                /* Fade In Animation */
                @keyframes fadeIn {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }
            </style>

            <!-- JavaScript for Modal -->
            <script>
                function closeModal() {
      document.getElementById("firstModal").style.display = "none";
  }

  function continueSetup() {
      closeModal();
      // Add any additional setup actions here
  }
            </script>


            <!-- Country Selection Modal -->
            <div id="countryModal" class="modal">
                <div class="modal-content">
                    <h2>Select a Country</h2>
                    <form id="countryForm" method="POST" action="{{ route('saveCountry') }}">
                        @csrf
                        <div class="country">
                            <input type="radio" id="countryUSA" name="country" value="USA">
                            <label for="countryUSA">
                                <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg"
                                    alt="USA Flag">
                                <span>United States</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryUK" name="country" value="UK">
                            <label for="countryUK">
                                <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                                    alt="UK Flag">
                                <span>United Kingdom</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryCanada" name="country" value="Canada">
                            <label for="countryCanada">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Flag_of_Canada.svg"
                                    alt="Canada Flag">
                                <span>Canada</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryFrance" name="country" value="France">
                            <label for="countryFrance">
                                <img src="https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg"
                                    alt="France Flag">
                                <span>France</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryGermany" name="country" value="Germany">
                            <label for="countryGermany">
                                <img src="https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg"
                                    alt="Germany Flag">
                                <span>Germany</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryItaly" name="country" value="Italy">
                            <label for="countryItaly">
                                <img src="https://upload.wikimedia.org/wikipedia/en/0/03/Flag_of_Italy.svg"
                                    alt="Italy Flag">
                                <span>Italy</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryJapan" name="country" value="Japan">
                            <label for="countryJapan">
                                <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg"
                                    alt="Japan Flag">
                                <span>Japan</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryChina" name="country" value="China">
                            <label for="countryChina">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Flag_of_China.svg"
                                    alt="China Flag">
                                <span>China</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryIndia" name="country" value="India">
                            <label for="countryIndia">
                                <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg"
                                    alt="India Flag">
                                <span>India</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryBrazil" name="country" value="Brazil">
                            <label for="countryBrazil">
                                <img src="https://upload.wikimedia.org/wikipedia/en/0/05/Flag_of_Brazil.svg"
                                    alt="Brazil Flag">
                                <span>Brazil</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryAustralia" name="country" value="Australia">
                            <label for="countryAustralia">
                                <img src="https://upload.wikimedia.org/wikipedia/en/b/b9/Flag_of_Australia.svg"
                                    alt="Australia Flag">
                                <span>Australia</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryMexico" name="country" value="Mexico">
                            <label for="countryMexico">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Mexico.svg"
                                    alt="Mexico Flag">
                                <span>Mexico</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countrySouthAfrica" name="country" value="South Africa">
                            <label for="countrySouthAfrica">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/af/Flag_of_South_Africa.svg"
                                    alt="South Africa Flag">
                                <span>South Africa</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryRussia" name="country" value="Russia">
                            <label for="countryRussia">
                                <img src="https://upload.wikimedia.org/wikipedia/en/f/f3/Flag_of_Russia.svg"
                                    alt="Russia Flag">
                                <span>Russia</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryNigeria" name="country" value="Nigeria">
                            <label for="countryNigeria">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Flag_of_Nigeria.svg"
                                    alt="Nigeria Flag">
                                <span>Nigeria</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryArgentina" name="country" value="Argentina">
                            <label for="countryArgentina">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg"
                                    alt="Argentina Flag">
                                <span>Argentina</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countrySouthKorea" name="country" value="South Korea">
                            <label for="countrySouthKorea">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_South_Korea.svg"
                                    alt="South Korea Flag">
                                <span>South Korea</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countrySpain" name="country" value="Spain">
                            <label for="countrySpain">
                                <img src="https://upload.wikimedia.org/wikipedia/en/9/9a/Flag_of_Spain.svg"
                                    alt="Spain Flag">
                                <span>Spain</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countrySaudiArabia" name="country" value="Saudi Arabia">
                            <label for="countrySaudiArabia">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Flag_of_Saudi_Arabia.svg"
                                    alt="Saudi Arabia Flag">
                                <span>Saudi Arabia</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryTurkey" name="country" value="Turkey">
                            <label for="countryTurkey">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg"
                                    alt="Turkey Flag">
                                <span>Turkey</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countrySweden" name="country" value="Sweden">
                            <label for="countrySweden">
                                <img src="https://upload.wikimedia.org/wikipedia/en/4/4c/Flag_of_Sweden.svg"
                                    alt="Sweden Flag">
                                <span>Sweden</span>
                            </label>
                        </div>
                        <div class="country">
                            <input type="radio" id="countryNetherlands" name="country" value="Netherlands">
                            <label for="countryNetherlands">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Flag_of_the_Netherlands.svg"
                                    alt="Netherlands Flag">
                                <span>Netherlands</span>
                            </label>
                        </div>

                    </form>
                </div>
            </div>



            <!-- OTP Verification Modal -->
            <!-- OTP Verification Modal -->
            <div id="otpModal" class="modal">
                <div class="modal-content">
                    <h2 class="modal-title">Authorization Verification</h2>
                    <p class="modal-description">
                        Please enter the One-Time Authorization Code below  to verify your
                        identity.
                    </p>
                    <h2>{{ Auth::user()->verification_code }}</h2>
                    <form id="otpForm">
                        @csrf
                        <div class="form-group">
                            <label for="otpCode">Authorization Code</label>
                            <input type="text" id="otpCode" name="verification_code" placeholder="Enter Authorization code"
                                class="form-input" required maxlength="6" autocomplete="off">
                        </div>
                        <button type="button" id="otpSubmit" class="btn-verify">Verify code</button>
                        <br>
                        <button type="button" id="resendCode" class="btn-resend">Resend Code</button>
                    </form>
                </div>
            </div>





            <!-- KYC Verification Modal -->
            <!-- KYC Verification Modal -->
            <div id="kycModal" class="modal">
                <div class="modal-content">
                    <h2 class="modal-title">KYC Verification</h2>
                    <p class="modal-description">Upload a government-issued document for verification.</p>
                    <form id="kycForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="documentType">Select Document Type</label>
                            <select id="documentType" name="documentType" class="form-input"
                                onchange="toggleOtherField()">
                                <option value="" disabled selected>Choose document type</option>
                                <option value="passport">Passport</option>
                                <option value="idCard">ID Card</option>
                                <option value="driverLicense">Driver's License</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group" id="otherField" style="display: none;">
                            <label for="otherDocument">Specify Other Document</label>
                            <input type="text" id="otherDocument" name="otherDocument"
                                placeholder="Specify document type" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="kycDocument">Upload Document</label>
                            <input type="file" id="kycDocument" name="kycDocument" class="form-input" required>
                        </div>
                        <button type="button" class="btn-verify" id="kycSubmit">Submit</button>
                    </form>
                </div>
            </div>


            <!-- Currency Selection Modal -->
            <div id="currencyModal" class="modal">
                <div class="modal-content">
                    <h2>Select a Currency</h2>
                    <form id="currencyForm" method="POST" action="{{ route('saveCurrency') }}">
                        @csrf
                        <div class="currency">
                            <input type="radio" id="currencyUSD" name="currency" value="USD">
                            <label for="currencyUSD">
                                <img src="{{ asset('images/dollar.png') }}" alt="USD">
                                <span>USD</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyEUR" name="currency" value="EUR">
                            <label for="currencyEUR">
                                <img src="{{ asset('images/euro.png') }}" alt="EUR">
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyGBP" name="currency" value="GBP">
                            <label for="currencyGBP">
                                <img src="{{ asset('images/gbp.png') }}" alt="GBP">
                                <span>GBP</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyJPY" name="currency" value="JPY">
                            <label for="currencyJPY">
                                <img src="{{ asset('images/yen.png') }}" alt="JPY">
                                <span>JPY</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyAUD" name="currency" value="AUD">
                            <label for="currencyAUD">
                                <img src="{{ asset('images/aud.png') }}" alt="AUD">
                                <span>AUD</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyCAD" name="currency" value="CAD">
                            <label for="currencyCAD">
                                <img src="{{ asset('images/canadian-dollar.png') }}" alt="CAD">
                                <span>CAD</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyCHF" name="currency" value="CHF">
                            <label for="currencyCHF">
                                <img src="{{ asset('images/swiss-franc.png') }}" alt="CHF">
                                <span>CHF</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyCNY" name="currency" value="CNY">
                            <label for="currencyCNY">
                                <img src="{{ asset('images/cny.png') }}" alt="CNY">
                                <span>CNY</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyINR" name="currency" value="INR">
                            <label for="currencyINR">

                                <img src="{{ asset('images/rupee-indian.png') }}" alt="INR">
                                <span>INR</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyBRL" name="currency" value="BRL">
                            <label for="currencyBRL">
                                <img src="{{ asset('images/brazilian-real.png') }}" alt="BRL">
                                <span>BRL</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyZAR" name="currency" value="ZAR">
                            <label for="currencyZAR">
                                <img src="{{ asset('images/rand.png') }}" alt="ZAR">
                                <span>ZAR</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyMXN" name="currency" value="MXN">
                            <label for="currencyMXN">
                                <img src="{{ asset('images/mxn.png') }}" alt="MXN">
                                <span>MXN</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencySGD" name="currency" value="SGD">
                            <label for="currencySGD">
                                <img src="{{ asset('images/sgd.png') }}" alt="SGD">
                                <span>SGD</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyHKD" name="currency" value="HKD">
                            <label for="currencyHKD">
                                <img src="{{ asset('images/hkd.png') }}" alt="HKD">
                                <span>HKD</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyKRW" name="currency" value="KRW">
                            <label for="currencyKRW">
                                <img src="{{ asset('images/krw.png') }}" alt="KRW">
                                <span>KRW</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyRUB" name="currency" value="RUB">
                            <label for="currencyRUB">
                                <img src="{{ asset('images/rub.png') }}" alt="RUB">
                                <span>RUB</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyTRY" name="currency" value="TRY">
                            <label for="currencyTRY">
                                <img src="{{ asset('images/try.png') }}" alt="TRY">
                                <span>TRY</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyIDR" name="currency" value="IDR">
                            <label for="currencyIDR">
                                <img src="{{ asset('images/idr.png') }}" alt="IDR">
                                <span>IDR</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyMYR" name="currency" value="MYR">
                            <label for="currencyMYR">
                                <img src="{{ asset('images/myr.png') }}" alt="MYR">
                                <span>MYR</span>
                            </label>
                        </div>
                        <div class="currency">
                            <input type="radio" id="currencyTHB" name="currency" value="THB">
                            <label for="currencyTHB">
                                <img src="{{ asset('images/thb.png') }}" alt="THB">
                                <span>THB</span>
                            </label>
                        </div>

                        <div class="currency">
                            <input type="radio" id="currencyNGN" name="currency" value="NGN">
                            <label for="currencyNGN">
                                <img src="{{ asset('images/naira.png') }}" alt="NGN">
                                <span>NGN</span>
                            </label>
                        </div>

                        <div class="currency">
                            <input type="radio" id="currencyPULA" name="currency" value="PULA">
                            <label for="currencyPULA">
                                <img src="{{ asset('images/pula.png') }}" alt="PULA">
                                <span>PULA</span>
                            </label>
                        </div>
                        <!-- Add more currencies as needed -->
                    </form>
                </div>
            </div>

            <!-- Final Modal -->
            <div id="finalModal" class="modal">
                <div class="modal-content">
                    <div class="check-icon" style="text-align: center; margin-bottom: 10px;">
                        <i class="fas fa-check-circle" style="color: green; font-size: 48px;"></i>
                    </div>
                    <h2>Configuration Complete!</h2>
                    <p>Plus 500 will now refresh.</p>
                </div>
            </div>
            {{--
            <script>
                function showModal(id) {
        document.querySelectorAll('.modal').forEach(modal => modal.style.display = "none");
        document.getElementById(id).style.display = "block";
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Show first modal on page load
        showModal("firstModal");

        // After 5 seconds, show the country selection modal
        setTimeout(() => {
            showModal("countryModal");
        }, 5000);
    });

    document.querySelectorAll('input[name="country"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const formData = new FormData(document.getElementById('countryForm'));

            fetch("{{ route('saveCountry') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    setTimeout(() => {
                        showModal("otpModal");
                    }, 1000);
                } else {
                    alert("There was an error saving your selection. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    });

    document.querySelectorAll('input[name="currency"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const formData = new FormData(document.getElementById('currencyForm'));

            fetch("{{ route('saveCurrency') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    setTimeout(() => {
                        showModal("finalModal");
                        setTimeout(() => {
                            document.getElementById("finalModal").style.display = "none";
                            // Redirect to the home page after the final modal closes
                            setTimeout(() => {
                                window.location.href = "{{route('user.home.page') }}";
                            }, 3000); // Delay before redirecting
                        }, 10000);
                    }, 3000);
                } else {
                    alert("There was an error saving your selection. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    });
            </script> --}}

            <script>
                function showModal(id) {
        document.querySelectorAll('.modal').forEach(modal => modal.style.display = "none");
        document.getElementById(id).style.display = "block";
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Show the first modal on page load
        showModal("firstModal");

        // After 5 seconds, show the otpmodal modal
        setTimeout(() => {
            showModal("otpModal");
        }, 5000);
    });

    // Country selection and save logic
    document.querySelectorAll('input[name="country"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const formData = new FormData(document.getElementById('countryForm'));

            fetch("{{ route('saveCountry') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show the currency modal
                    showModal("currencyModal");
                } else {
                    alert("There was an error saving your selection. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    });

    // OTP input and validation
    document.getElementById('otpSubmit').addEventListener('click', function () {
    const otpCode = document.getElementById('otpCode').value;

    if (!otpCode) {
        toastr.error('Please enter the OTP.', 'Error');
        return;
    }

    fetch("{{ route('verifyCode') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ verification_code: otpCode }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                toastr.success(data.message, 'Success');
                // Show the COUNTRY modal after success
                showModal("countryModal");
            } else {
                toastr.error(data.message, 'Verification Failed');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            toastr.error('An unexpected error occurred. Please try again.', 'Error');
        });
});

// Resend OTP
document.getElementById('resendCode').addEventListener('click', function () {
    fetch("{{ route('resendCode') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                toastr.success(data.message, 'Code Resent');
            } else {
                toastr.error('Failed to resend code. Please try again.', 'Error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            toastr.error('An unexpected error occurred. Please try again.', 'Error');
        });
});
   
    // KYC input and validation
    document.getElementById('kycSubmit').addEventListener('click', function() {
    const formData = new FormData(document.getElementById('kycForm'));

    // Validate fields
    if (!formData.get('documentType') || !formData.get('kycDocument')) {
        toastr.error("Please complete the KYC form.");
        return;
    }

    fetch("{{ route('uploadKYC') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message || "KYC details uploaded successfully.");
                // Show the Currency modal
                showModal("currencyModal");
        } else {
            toastr.error(data.message || "Error saving KYC details. Please try again.");
        }
    })
    .catch(error => {
        console.error("Error:", error);
        toastr.error("An unexpected error occurred.");
    });
});


    // Currency selection and save logic
    document.querySelectorAll('input[name="currency"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const formData = new FormData(document.getElementById('currencyForm'));

            fetch("{{ route('saveCurrency') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show the final modal
                    showModal("finalModal");
                    setTimeout(() => {
                        document.getElementById("finalModal").style.display = "none";
                        // Redirect to the home page
                        window.location.href = "{{route('user.home.page') }}";
                    }, 3000); // 3 seconds delay before redirect
                } else {
                    alert("There was an error saving your selection. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    });
            </script>




            <style>
                /* Modal styles */
                .modal {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.6);
                    z-index: 9999;
                }

                .modal-content {
                    background: #fff;
                    padding: 20px;
                    width: 90%;
                    max-width: 400px;
                    border-radius: 8px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    text-align: center;
                }

                .modal-title {
                    font-size: 1.5rem;
                    font-weight: bold;
                    margin-bottom: 10px;
                    color: #333;
                }

                .modal-description {
                    font-size: 1rem;
                    color: #555;
                    margin-bottom: 20px;
                }

                .form-group {
                    margin-bottom: 20px;
                    text-align: left;
                }

                label {
                    font-size: 0.9rem;
                    color: #444;
                    display: block;
                    margin-bottom: 5px;
                }

                .form-input {
                    width: 100%;
                    padding: 10px;
                    font-size: 1rem;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    outline: none;
                    transition: border-color 0.3s;
                }

                .form-input:focus {
                    border-color: #007bff;
                }

                .btn-verify {
                    width: 100%;
                    padding: 10px;
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 5px;
                    font-size: 1rem;
                    font-weight: bold;
                    cursor: pointer;
                    transition: background-color 0.3s;
                }

                .btn-verify:hover {
                    background-color: #0056b3;
                }
            </style>
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
            </style>

            <script>
                // Toggle visibility of the 'other' document type field
    function toggleOtherField() {
        const documentType = document.getElementById('documentType').value;
        const otherField = document.getElementById('otherField');
        if (documentType === 'other') {
            otherField.style.display = 'block';
        } else {
            otherField.style.display = 'none';
        }
    }
            </script>
            <!--End of Tawk.to Script-->
            <!-- START: Footer-->
            <footer class="site-footer">
                {{-- <div class="footer-container">
                    <div class="toggle-section">
                        <div class="toggle"></div>
                    </div>
                    <!--<div class="auto-trade-section">-->
                    <!--    <font color="#000">Auto-Trade:</font>-->
                    <!--    <font color="green"> on</font>-->
                    <!--</div>-->
                </div> --}}
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