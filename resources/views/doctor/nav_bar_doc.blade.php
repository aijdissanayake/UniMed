<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS Files -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet prefetch" href="/materialize2/materialize.min.css">
<script type="text/javascript" src="/materialize2/jquery-2.2.4.min.js"></script>       
<script src="/materialize2/materialize.min.js""></script>
    
<!--Custom CSS File-->
<link rel="stylesheet" href="\materialize\css\custom.css">
<!--Custom js file-->
<script src="\js\init.js"></script>

<!-- Nav bars -->


<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{route('navBarViewProfile')}}">Profile</a></li>
    <li class="divider"></li>
    <li><a href="{{route('settings')}}">Settings</a></li>
    <li class="divider"></li>
    <li><a href="/logout">Logout</a></li>
</ul>

<!-- width given to this specific dropdown menu, after considering the width of its content.
    Position and line height also adjusted as necessary. -->

    <ul id="dropdown2" class="dropdown-content" style="width:175px">
        <li><a href="#!">Messages<span class="new badge" style="position:absolute; line-height:inherit">1</span></a></li>
        <li><a href="#">Lab Reports<span class="new badge" style="position:absolute; line-height:inherit">1</span></a></li>
    </ul>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue">
                <div class="card-title">
                    <span><a href="{{route('homeTab')}}" class="brand-logo"><i class="small material-icons" style="vertical-align:middle; padding-left:10px; float:left">local_hospital</i>Unicare</a>
                    </span>
                </div>
                <!-- desktop nav bar -->

                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('homeTab')}}" class="dropdown-button" data-activates="dropdown2" data-beloworigin="true" data-hover="true" data-constrainwidth="false">Home<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="{{route('patientsTab')}}">Patients</a></li>
                    <li><a href="{{route('financeTab')}}">Finance</a></li>
                    <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
                    <li><a href="{{route('labTab')}}">Lab</a></li>
                    <li><a class="dropdown-button" href="#9" data-activates="dropdown1" data-beloworigin="true" data-hover="true">My Account<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>

                <a href="#" data-activates="mob-snav" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>

    <!-- Mobile nav bar -->

    <ul class="side-nav hide-on-large-only" id="mob-snav">
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li><a href="{{route('homeTab')}}">Home</a></li>                                      
                <li><a href="#">Messages<span class="badge" style="position:absolute; line-height:inherit">1</span></a></li>
                <li><a href="#!">Lab Reports<span class="new badge" style="position:absolute; line-height:inherit">1</span></a></li>
                <li><a href="{{route('patientsTab')}}">Patients</a></li>
                <li><a href="{{route('financeTab')}}">Finance</a></li>
                <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
                <li><a href="{{route('labTab')}}">Lab</a></li>
                <li><a class="collapsible-header waves-effect waves-teal">My Account<i class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('navBarViewProfile')}}">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('settings')}}">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    