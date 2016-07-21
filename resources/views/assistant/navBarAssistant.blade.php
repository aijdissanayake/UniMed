<link rel="stylesheet" type="text/css" href="/style/navBar.css" />
<nav>
    <ul>
        
        <h1 style="float:left">Unicare Medical</h1>
        <li style="float:right">
            <a href="">My Account</a>
            <div>
                <ul>
                    <li><a href="{{route('astViewProfile')}}">View</a></li>
                    <li><a href="{{route('astEditProfile')}}">Edit</a></li>
                    <li><a href="/logout">Log Out</a></li>
                </ul>
            </div>
        </li>
        <li style="float:right"><a href="{{route('astLab')}}">Lab</a></li>
        <li style="float:right"><a href="{{route('astInventory')}}">Inventory</a></li>
        <li style="float:right"><a href="{{route('astFinance')}}">Finance</a></li>
        <li style="float:right"><a href="{{route('ast')}}">Home</a></li>
    </ul>
</nav>