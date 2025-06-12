@include('admin.header')
<div class="main-panel">
	<div class="content bg-dark ">
		<div class="page-inner">
			@if(session('success'))
			<div class="alert alert-success mb-2">{{session('success')}}</div>
			@endif
			<div class="mt-2 mb-4">
				<h1 class="title1 text-light">Withdrawal History</h1>
			</div>
			<div>
			</div>
			<div>
			</div>
			<div class="mb-5 row">
				<div class="col-12">
					{{-- <small class="text-light">if you can't see the image, try switching your uploaded location to
						another option from your admin settings page.</small> --}}
				</div>
				<div class="col-12 card shadow p-4 bg-dark">
					<div class="table-responsive" data-example-id="hoverable-table">
						<table id="ShipTable" class="table table-hover text-light">
                    <thead>
                        <tr>
                            {{-- <th>Transaction ID</th> --}}
                            <th>Method</th>
                            <th>Crypto Type</th>
                            <th>Wallet Address</th>
                            <th>Account Name</th>
                            <th>Account Number</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($withdrawals as $withdrawal)
                        <tr>
                            {{-- <td>{{ $withdrawal->transaction_id }}</td> --}}
                            <td>{{ $withdrawal->method }}</td>
                            <td>{{ $withdrawal->crypto }}</td>
                            <td>{{ $withdrawal->wallet }}</td>
                            <td>{{ $withdrawal->account_name }}</td>
                            <td>{{ $withdrawal->account_number }}</td>
                            <td>{{ number_format($withdrawal->amount, 2) }}</td>
                            <td>{{ ucfirst($withdrawal->status) }}</td>
                            <td>{{ $withdrawal->created_at->format('Y-m-d') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
					</div>
				</div>
			</div>
		</div>
	</div>

@include('admin.footer')