<!DOCTYPE html>
<html>
<head>
	@include('doctor.nav_bar_doc')
	<title>View Transactions</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <script type="text/javascript" src="/js\financeAll.js"></script>

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
								<div class="input-field col s6 m4">
									<select id="tType">
										<option value="" disabled selected>Transaction Type</option>
										<option value="1">Income</option>
										<option value="2">Expense</option>
										<option value="3" selected="">All</option>
									</select>
								</div>
                                <div class="col offset-m2 s12 m1" >
                                    <span class="black-text" for="startDate" style="float:left">From: </span>
                                </div>
                                <div class="col s12 m2" >
                                    <input id="startDate" class="date" type="date" name="startDate" placeholder="select date" value="" required>
                                </div>
                                <div class="col s12 m1" >
                                    <span class="black-text" for="endDate" style="float:left">To: </span>
                                </div>
                                <div class="col s12 m2" >
                                    <input id="endDate" class="date" type="date" name="endDate" value="" min="" required>
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