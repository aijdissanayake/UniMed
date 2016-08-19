<link rel="stylesheet" type="text/css" href="/style/navBar.css" />
<nav>
    
	<ul>
            <h1 style="float:left">&nbsp;&nbsp;Unicare Medical</h1>
            <li style="float:right">
			<a href="">My Account</a>
			<div>
				<ul>
                                    <li><a href="{{route('stats')}}">Statistics</a></li>
					<li><a href="{{route('dViewProfile')}}">View</a></li>
					<li><a href="{{route('dEditProfile')}}">Edit</a></li>
                                        <li><a href="/logout">Log Out</a></li>
				</ul>
			</div>
		</li>
                <li style="float:right"><a href="{{route('labTab')}}">Lab</a></li>
                <li style="float:right"><a href="{{route('inventoryTab')}}">Inventory</a></li>
                <li style="float:right"><a href="{{route('financeTab')}}">Finance</a></li>
                <li style="float:right"><a href="{{route('patientsTab')}}">Patients</a></li>
                <li style="float:right"><a href="{{route('homeTab')}}">Home</a></li>
            
            
                        
                        
                        
                        
		
	</ul>
</nav>