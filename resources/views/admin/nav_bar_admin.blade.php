<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS Files -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="\materialize\css\materialize.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src="\materialize\js\materialize.min.js"></script>
<!--Custom js file-->
<script src="\js\init.js"></script>

<!-- Nav bars -->


<ul id="my_account" class="dropdown-content">
    <li><a href="{{route('dViewProfile')}}">Profile</a></li>
    <li class="divider"></li>
    <li><a href="{{route('settings')}}">Settings</a></li>
    <li class="divider"></li>
    <li><a href="/logout">Logout</a></li>
</ul>

<!-- width given to this specific dropdown menu, after considering the width of its content.
Position and line height also adjusted as necessary. -->

<ul id="manage" class="dropdown-content" style="width:175px">
    <li><a href="#!">Doctors</a></li>
    <li><a href="#">Patients</a></li>
    <li><a href="#">Assistants</a></li>
    <li><a href="#">Lab Assistants</a></li>
    
</ul>


<div class="navbar-fixed">
    <nav class="black">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo light-green-text text-accent-3">Logo</a>
            <a href="#" data-activates="mob-snav" class="button-collapse">
                <i class="material-icons light-green-text text-accent-3">menu</i>
            </a>

            <!-- desktop nav bar -->

            <ul class="right hide-on-med-and-down">
                
                <li><a href="" class="light-green-text text-accent-3">Home</a></li>
                <li><a href="" class="dropdown-button light-green-text text-accent-3" data-activates="manage" data-beloworigin="true" data-hover="true" data-constrainwidth="false">Manage<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="" class="light-green-text text-accent-3">Statistics</a></li>
                <li><a class="dropdown-button light-green-text text-accent-3" href="#9" data-activates="my_account" data-beloworigin="true" data-hover="true">My Account<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>

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
                                    <li><a href="{{route('dViewProfile')}}">Profile</a></li>
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
        </div>
    </nav>
</div>