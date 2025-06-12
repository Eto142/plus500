@include('admin.header')
<div class="main-panel">
	<div class="content bg-dark ">
		<div class="page-inner">
			@if(session('success'))
			<div class="alert alert-success mb-2">{{session('success')}}</div>
			@endif
			<div class="mt-2 mb-4">
				<h1 class="title1 text-light">Deposit History</h1>
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
                                    {{-- <th>Deposit Type</th> --}}
                                    <th>ID</th>
                                    <th>Amount</th>
                                    {{-- <th>Payment Mode</th> --}}
                                    <th>Status</th>
                                    {{-- <th>Proof</th> --}}
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deposits as $deposit)
                                <tr>
                                    {{-- <td>{{ $deposit->deposit_type }}</td> --}}
                                    <td>{{ $deposit->id }}</td>
                                    <td>{{ $deposit->amount }}</td>
                                    
                                    {{-- <td>{{ $deposit->payment_mode }}</td> --}}
                                    <td>{{ $deposit->status }}</td>
                                    <td>{{ $deposit->created_at }}</td>
                                    {{-- <td>
                                        @if($deposit->proof)
                                        <a href="{{ asset($deposit->proof) }}" target="_blank">View Proof</a>
                                        @else
                                        N/A
                                        @endif
                                    </td> --}}
                                    <td>
                                        <form action="{{ route('admin.deposits.approve', $deposit->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-success"
                                                onclick="return confirm('Are you sure you want to approve this deposit?')">Approve</button>
                                        </form>

                                        <form action="{{ route('admin.deposits.reject', $deposit->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to reject this deposit?')">Reject</button>
                                        </form>
                                    </td>
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