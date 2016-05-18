<!DOCTYPE HTML>
<html>

    <head>
        <title>Unicare - Home</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
        <link rel="stylesheet" type="text/css" href="/style/style.css" />
    </head>
    
    <!--logout section-->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>
        @endif
    </ul>
    <!--{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}-->
    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <h1>Unicare Medical</h1>
                    <div class="slogan"><img src="/style/logo.png" /></div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <!-- put class="current" in the li tag for the selected finance - to highlight which finance you're on -->
                        <li class="current"><a href="{{route('homeTab')}}">Home</a></li>
                        <li><a href="{{route('patientsTab')}}">Patients</a></li>
                        <li><a href="{{route('financeTab')}}">Finance</a></li>
                        <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
                        <li><a href="{{route('labTab')}}">Lab</a></li>
                    </ul>
                </div>
            </div>
            <div id="site_content">
                <div id="content">
                    <!-- insert the finance content here -->

                    <div id="appointments">Appointments
                        <ol class="list">
                            @foreach ($appointments as $appointment)
                            <li>{{$appointment->getPatient->getUser->name}}</li>
                            @endforeach
                        </ol>
                    </div>
                    <div id="inventory">Inventory Status
                        <ol class="list">
                            <li></li>
                            <li></li>
                            <li></li>

                        </ol>
                    </div>
                    <p></p>
                    <p></p>
                    <div id="clarification">Clarification Requests
                        <ol class="list">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ol> 
                    </div>

                    <p></p>

                </div>
            </div>
            <div id="footer">
                <p>&nbsp;</p>
            </div>
        </div>
    </body>
</html>
