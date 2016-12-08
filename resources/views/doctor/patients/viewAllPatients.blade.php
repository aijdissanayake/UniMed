<!DOCTYPE html>
<html>
<head>
	<title>All Patients</title>
	@include('doctor.nav_bar_doc')
</head>
<body class="grey lighten-4">
	<div class="container">
		<div class="row top-row">
		<div class="card lime white-text">
				<div class="card-title">All patients</div>
				<div class="card-content">
					@if ($patients)
					<p>There are {{count($patients)}} registered patients.</p>
					<table style="border-spacing:0; word-break: break-all;
					word-wrap:break-word;overflow: hidden; text-overflow: ellipsis;">
					<tr>
						<th style="text-align: left">Patient ID</th>
						<th style="text-align:left">Name</th>
						<th style="text-align:left">Gender</th></tr>


						@foreach ($patients as $patient)
						<tr style="height: 25px">
							<td style="height: 10px">{{$patient->id}}</td>
							<td style="height: 10px"><a href="view/{{$patient->id}}">{{$patient->getUser->name}}</a></td>
							<td style="height: 10px">
								@if ($patient->gender)Male
								@else Female</td>
								@endif
							</tr>
							@endforeach


						</table>
						@else
						<div>You have no patients to display currently.</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>