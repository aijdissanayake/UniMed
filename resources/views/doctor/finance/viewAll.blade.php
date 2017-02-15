<!DOCTYPE html>
<html>
<head>
	@include('doctor.nav_bar_doc')
	<title>View Transactions</title>

</head>
<body class="grey lighten-4">
	<div class="container">
		<div class="row top-row">
			<div class="row">
				<div class="col s12">
					<div class="card">
						<div class="card-title green white-text">
							<i class="material-icons left">list</i>
							Transactions
						</div>
						<div class="card-content">
							<div class="row">
								<div class="input-field col s8 l3">
									<select id="tType">
										<option value="" disabled selected>Transaction Type</option>
										<option value="1">Income</option>
										<option value="2">Expense</option>
										<option value="3" selected="">All</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<table class="highlight bordered striped" id="Trxns">
										<thead>

											<tr>
												<th style="padding: 0px 0px 0px 10px">Date</th>
												<th>Type</th>
												<th>Description</th>
												<th>Value (LKR)</th>
											</tr>
										</thead>
										<tbody id="trxnsBody">
									{{--	@foreach ($transactions as $transaction)
										<tr @if ($transaction->type =="income") class="green lighten-4 income" @else class="amber lighten-5 expense" @endif>
											<td style="padding: 0px 0px 0px 10px">{{$transaction->date}}</td>
											<td>{{$transaction->name}}</td>
											<td>{{$transaction->description}}</td>
											<td>{{$transaction->value}}</td>
										</tr>
										@endforeach --}}

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</body>
</html>