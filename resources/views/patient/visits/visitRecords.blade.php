<!DOCTYPE html>
<html>
<head>
	<title>Unicare - My Visits</title>
	@include('patient.nav_bar_pat')
	<style type="text/css">a:link.changedHLink, a:visited.changedHLink{
		color: black
	}
	a:hover.changedHLink{
		color:blue;
	}
</style>
</head>
<body class="grey lighten-4">
	<div class="container">
		<div class="row top-row">
			<div class="card">
				<div class="card-title">My Visit History</div>
				<div class="card-content">
					@if (!($vRecs->isEmpty()))
					<ul class="collapsible" data-collapsible="accordian">
						@foreach ($vRecs as $visitRec) 
						
						<li>
							<div class="collapsible-header"><div class="col s4">{{$visitRec['created_at']}}</div><div class="col s8 truncate">{{$visitRec['diagnosis']}}</div></div>
							<div class="collapsible-body"><p>Blank. Let's try that when we've finalized the visit record</p></div>
						</li>
							
						@endforeach

					</table>
					@else  
					<p>There are no records yet.</p>
					@endif
				</div>
				<div class="section">{!! (new Landish\Pagination\Materialize($vRecs))->render() !!}</div>
			</div>
		</div>
	</div>

</body>
</html>