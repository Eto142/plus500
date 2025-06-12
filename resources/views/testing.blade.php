@include('user.layouts.header')

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
    <div id="firstModal" class="modal">
        <div class="modal-content">
            <h2>Welcome</h2>
            <p>This is an introductory message.</p>
        </div>
    </div>

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
                        <img src="https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg" alt="France Flag">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/0/03/Flag_of_Italy.svg" alt="Italy Flag">
                        <span>Italy</span>
                    </label>
                </div>
                <div class="country">
                    <input type="radio" id="countryJapan" name="country" value="Japan">
                    <label for="countryJapan">
                        <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg" alt="Japan Flag">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="India Flag">
                        <span>India</span>
                    </label>
                </div>
                <div class="country">
                    <input type="radio" id="countryBrazil" name="country" value="Brazil">
                    <label for="countryBrazil">
                        <img src="https://upload.wikimedia.org/wikipedia/en/0/05/Flag_of_Brazil.svg" alt="Brazil Flag">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/f3/Flag_of_Russia.svg" alt="Russia Flag">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/9/9a/Flag_of_Spain.svg" alt="Spain Flag">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/4/4c/Flag_of_Sweden.svg" alt="Sweden Flag">
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

    <!-- Currency Selection Modal -->
    <div id="currencyModal" class="modal">
        <div class="modal-content">
            <h2>Select a Currency</h2>
            <form id="currencyForm" method="POST" action="{{ route('saveCurrency') }}">
                @csrf
                <div class="currency">
                    <input type="radio" id="currencyUSD" name="currency" value="USD">
                    <label for="currencyUSD">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/USDollar.svg" alt="USD">
                        <span>USD</span>
                    </label>
                </div>
                <div class="currency">
                    <input type="radio" id="currencyEUR" name="currency" value="EUR">
                    <label for="currencyEUR">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5b/Euro_symbol.svg" alt="EUR">
                        <span>EUR</span>
                    </label>
                </div>
                <div class="currency">
                    <input type="radio" id="currencyGBP" name="currency" value="GBP">
                    <label for="currencyGBP">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Pound_Sterling_symbol.svg"
                            alt="GBP">
                        <span>GBP</span>
                    </label>
                </div>
                <!-- Add more currencies as needed -->
            </form>
        </div>
    </div>

    <!-- Final Modal -->
    <div id="finalModal" class="modal">
        <div class="modal-content">
            <h2>Thank You</h2>
            <p>This is the final message. It will close automatically.</p>
        </div>
    </div>

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
                            showModal("currencyModal");
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
                            }, 30000);
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
    </script>
    @include('user.layouts.footer')