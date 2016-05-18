<link rel="stylesheet" type="text/css" href="/style/navBar.css" />
<nav>
	<ul>
		<li style="float:right"><a href="/logout">Log Out</a></li>
		<li style="float:right">
			<a href="">My Account</a>
			<div>
				<ul>
					<li><a href="{{route('ltViewProfile')}}">View</a></li>
					<li><a href="{{route('ltEditProfile')}}">Edit</a></li>
				</ul>
			</div>
		</li>
	</ul>
</nav>