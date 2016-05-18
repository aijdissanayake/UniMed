<link rel="stylesheet" type="text/css" href="/style/navBar.css" />
<nav>
	<ul>
            <li style="float:left"><a href="{{route('ast')}}">Home</a></li>
		<li style="float:right"><a href="/logout">Log Out</a></li>
		<li style="float:right">
			<a href="">My Account</a>
			<div>
				<ul>
					<li><a href="{{route('astViewProfile')}}">View</a></li>
					<li><a href="{{route('astEditProfile')}}">Edit</a></li>
				</ul>
			</div>
		</li>
	</ul>
</nav>