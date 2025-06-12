@include('user.layouts.header')
<main>
    <div class="container-fluid">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><b>Withdrawal Options</b></div>
                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Withdraw</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- START: Withdrawal Options -->
        <div class="row mt-3">
            <!-- Bank Transfer Card -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-lg text-center">
                    <img src="/dist/images/bank.png" class="card-img-top" alt="Bank Image">
                    <div class="card-body">
                        <h5 class="card-title">Bank Transfer</h5>
                        <p class="card-text">Withdraw funds directly to your bank account.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#bankModal">Details</button>
                    </div>
                </div>
            </div>

            <!-- PayPal Card -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-lg text-center">
                    <img src="/dist/images/paypal.png" class="card-img-top" alt="PayPal Image">
                    <div class="card-body">
                        <h5 class="card-title">PayPal</h5>
                        <p class="card-text">Instantly withdraw to your PayPal account.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#paypalModal">Details</button>
                    </div>
                </div>
            </div>

            <!-- Cryptocurrency Card -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-lg text-center">
                    <img src="/dist/images/cryptocurrency.png" class="card-img-top" alt="Cryptocurrency Image">
                    <div class="card-body">
                        <h5 class="card-title">Cryptocurrency</h5>
                        <p class="card-text">Withdraw funds to your cryptocurrency wallet.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#cryptoModal">Details</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Withdrawal Options -->

        <!-- Bank Transfer Modal -->
        <div class="modal fade" id="bankModal" tabindex="-1" aria-labelledby="bankModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bankModalLabel">Bank Transfer Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
    <div class="form-group">
        <label for="account-number">Account Number</label>
        <input type="text" class="form-control" id="account-number" placeholder="Enter your account number">
    </div>
    <div class="form-group">
        <label for="bank-name">Bank Name</label>
        <input type="text" class="form-control" id="bank-name" placeholder="Enter your bank name">
    </div>
    <div class="form-group">
        <label for="branch-name">Branch Name</label>
        <input type="text" class="form-control" id="branch-name" placeholder="Enter your branch name">
    </div>
    <div class="form-group">
        <label for="ifsc-code">IFSC Code</label>
        <input type="text" class="form-control" id="ifsc-code" placeholder="Enter IFSC code">
    </div>
    <div class="form-group">
        <label for="account-holder-name">Account Holder's Name</label>
        <input type="text" class="form-control" id="account-holder-name" placeholder="Enter account holder's name">
    </div>
    <div class="form-group">
        <label for="bank-address">Bank Address</label>
        <textarea class="form-control" id="bank-address" rows="3" placeholder="Enter bank address"></textarea>
    </div>
</form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">add</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- PayPal Modal -->
        <div class="modal fade" id="paypalModal" tabindex="-1" aria-labelledby="paypalModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="paypalModalLabel">PayPal Withdrawal Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="paypal-email">PayPal Email</label>
                                <input type="email" class="form-control" id="paypal-email" placeholder="Enter your PayPal email">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">add</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cryptocurrency Modal -->
        <div class="modal fade" id="cryptoModal" tabindex="-1" aria-labelledby="cryptoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cryptoModalLabel">Cryptocurrency Withdrawal Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>

                         <div class="form-group">
        <label for="crypto-type">Select Cryptocurrency</label>
        <select id="crypto-type" class="form-control" onchange="updateWalletAddress()">
            <option value="">Choose a cryptocurrency</option>
            <option value="bitcoin">Bitcoin</option>
            <option value="ethereum">Ethereum</option>
            <option value="litecoin">Litecoin</option>
        </select>
    </div>
                            <div class="form-group">
                                <label for="crypto-wallet">Wallet Address</label>
                                <input type="text" class="form-control" id="crypto-wallet" placeholder="Enter your wallet address">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">add</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- CSS Styles -->
        <style>
            .card {
                border-radius: 15px;
                transition: transform 0.2s;
                margin-bottom: 20px;
            }

            .card:hover {
                transform: scale(1.05);
            }

            .card-img-top {
                height: 150px;
                object-fit: cover;
                border-radius: 15px 15px 0 0;
            }

            .modal-header {
                background-color: #007bff;
                color: white;
            }

            .btn-primary {
                background-color: #007bff;
                border: none;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }
        </style>

    </div>
</main>
@include('user.layouts.footer')