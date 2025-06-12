@include('user.layouts.header')


<div class="container" style="margin-top: 80px;">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Withdraw Funds</h2>
        <form action="{{route('make.withdrawal') }}" method="POST">
            @csrf
            <!-- Select Withdrawal Method -->
            <div class="form-group mb-3">
                <label for="method" class="form-label">Select Withdrawal Method</label>
                <select class="form-control" id="method" name="method" onchange="toggleWithdrawalOptions()">
                    <option value="" disabled selected>Choose method</option>
                    <option value="cryptocurrency">Cryptocurrency</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>

            <!-- Cryptocurrency Options -->
            <div id="crypto-section" style="display: none;">
                <div class="form-group mb-3">
                    <label for="crypto" class="form-label">Select Cryptocurrency</label>
                    <select class="form-control" id="crypto" name="crypto">
                        <option value="Bitcoin">Bitcoin (BTC)</option>
                        <option value="Ethereum">Ethereum (ETH)</option>
                        <option value="Litecoin">Litecoin (LTC)</option>
                        <option value="USDT">Tether (USDT)</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="wallet" class="form-label">Wallet Address</label>
                    <input type="text" class="form-control" id="wallet" name="wallet"
                        placeholder="Enter your wallet address">
                </div>
            </div>

            <!-- Bank Transfer Options -->
            <div id="bank-section" style="display: none;">
                <div class="form-group mb-3">
                    <label for="bank_name" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" id="bank_name" name="bank_name"
                        placeholder="Enter your bank name">
                </div>

                <div class="form-group mb-3">
                    <label for="account_name" class="form-label">Account Name</label>
                    <input type="text" class="form-control" id="account_name" name="account_name"
                        placeholder="Enter your account name">
                </div>

                <div class="form-group mb-3">
                    <label for="account_number" class="form-label">Account Number</label>
                    <input type="text" class="form-control" id="account_number" name="account_number"
                        placeholder="Enter your account number">
                </div>

                <div class="form-group mb-3">
                    <label for="routing_number" class="form-label">Routing Number</label>
                    <input type="text" class="form-control" id="routing_number" name="routing_number"
                        placeholder="Enter your routing number">
                </div>
            </div>

            <!-- Withdrawal Amount -->
            <div class="form-group mb-4">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
            </div>

             <!-- Display error if the amount exceeds the balance -->
        @if ($errors->has('amount'))
        <div class="text-danger mt-2">
            {{ $errors->first('amount') }}
        </div>
    @endif

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit Withdrawal Request</button>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleWithdrawalOptions() {
        const method = document.getElementById("method").value;
        const cryptoSection = document.getElementById("crypto-section");
        const bankSection = document.getElementById("bank-section");

        if (method === "cryptocurrency") {
            cryptoSection.style.display = "block";
            bankSection.style.display = "none";
        } else if (method === "bank_transfer") {
            bankSection.style.display = "block";
            cryptoSection.style.display = "none";
        } else {
            cryptoSection.style.display = "none";
            bankSection.style.display = "none";
        }
    }
</script>



@include('user.layouts.footer')