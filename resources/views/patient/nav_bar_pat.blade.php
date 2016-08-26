<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS Files -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="\materialize\css\materialize.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src="\materialize\js\materialize.min.js"></script>
<script src="\js\init.js"></script>


<!-- Content -->

<header>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{route('pViewProfile')}}">My profile</a></li>
        <li class="divider"></li>
        <li><a href="/logout">Logout</a></li>
    </ul>


    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue">
                <a href="#!" class="brand-logo">Unicare</a>
                <a href="#" data-activates="mob-snav" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>

                <!-- desktop nav bar -->

                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('patient')}}">Home</a></li>
                    <li><a href="#!">Appointments</a></li>
                    <li><a href="{{route('patientLabTab')}}">Lab</a></li>
                    <li><a class="dropdown-button" href="#9" data-activates="dropdown1" data-beloworigin="true" >My Account<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>

                <!-- Mobile nav bar -->

                <ul class="side-nav hide-on-large-only" id="mob-snav">
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li><a href="{{route('patient')}}">Home</a></li>
                            <li><a href="#!">Appointments</a></li>
                            <li><a href="{{route('patientLabTab')}}">Lab</a></li>
                            <li><a class="collapsible-header waves-effect waves-teal">My Account<i class="material-icons right">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="{{route('pViewProfile')}}">My profile</a></li>
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
</header>
