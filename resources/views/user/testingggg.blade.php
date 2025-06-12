<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Modal Sequence</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

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
            width: 100px;
            height: 100px;
            border-radius: 10px;
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
                <!-- Add more countries as needed -->
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
</body>

</html>