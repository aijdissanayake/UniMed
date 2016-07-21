<link rel="stylesheet" type="text/css" href="/style/navBar.css" />
<nav>
    <ul>
        <h1 style="float:left">Unicare Medical</h1>
        <li style="float:right">
            <a href="">My Account</a>
            <div>
                <ul>
                    <li><a href="{{route('stats')}}">Statistics</a></li>
                    <li><a href="{{route('ltViewProfile')}}">View</a></li>
                    <li><a href="{{route('ltEditProfile')}}">Edit</a></li>
                    <li><a href="/logout">Log Out</a></li>
                </ul>
            </div>
        </li>
        <li style="float:right"><a href="{{route('ltLab')}}">Lab</a></li>
        <li style="float:right"><a href="{{route('lt')}}">Home</a></li>
    </ul>
</nav>