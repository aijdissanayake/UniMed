<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Settings</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
    </head>


    <body class="grey lighten-4">
        <div class="container">
            
            <div class="row top-row">
                <div class="col s12 m6">
                    <div class="card green white-text">
                        <div class="card-content">
                            <span class="card-title"><i class="material-icons left">account_box</i><strong>My profile</strong></span>
                            <table>
                                <tr><td>Name</td><td>{{$doctor->firstName . " " . $doctor->lastName}}</td></tr>
                                <tr><td>Registration Number</td><td>{{$doctor->RegNo}}</td></tr>
                                <tr><td>Email</td><td>{{$doctor->getUser->email}}</td></tr>
                                <tr><td>Contact No.</td><td>{{$doctor->telNumber}}</td></tr>
                            </table>
                            <a href="{{route('dViewDocProfile',['id'=>$doctor->id])}}" class="waves-effect green darken-3 btn">
                                View Full Profile
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card light-blue white-text">
                        <div class="card-content">
                            <span class="card-title"><strong>Statistics</strong></span>
                            <table>
                                <tr><td></td><td>lorem ipsum</td></tr>
                                <tr><td></td><td>lorem ipsum</td></tr>
                                <tr><td></td><td>lorem ipsum</td></tr>
                            </table>

                            <a href="#!" class="waves-effect light-blue darken-3 btn">
                                See more...
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="height:auto; display: flex">
                <div class="col s12 m4" style="align-self:stretch">
                    <div class="card red white-text" style="height:100%">
                        <div class="card-content">
                            <span class="card-title"><strong>Doctors</strong></span>
                            @foreach ($doctors as $doctor)
                                <p>{{$doctor->firstName . " " . $doctor->lastName}}</p>
                            @endforeach
                            <a href="{{route('manageDoctors')}}" class="waves-effect red lighten-2 btn">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4" style="align-self:stretch">
                    <div class="card blue-grey darken-2 white-text" style="height:100%">
                        <div class="card-content">
                            <span class="card-title"><strong>Assistants</strong></span>
                            <p>lorem ipsum...</p>
                            <a href="{{route('viewManageAssistants')}}" class="waves-effect blue-grey lighten-2 btn">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4" style="align-self:stretch">
                    <div class="card yellow darken-1 white-text" style="height:100%">
                        <div class="card-content">
                            <span class="card-title"><strong>Lab Assistants</strong></span>
                            <p>lorem ipsum...</p>
                            <a href="#!" class="waves-effect yellow darken-3 btn">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="height:auto; display: flex">
                <div class="col s12 m6" style="height:auto">
                    <div class="card grey white-text" style="height:100%; margin-bottom:1%" >
                        <div class="card-content" style="padding:5% 5% 0 5%;">
                            <span class="card-title" style="padding:0%;">Finances</span>
                            <div class="white divider"></div>
                            <div style=" height:150px; overflow:auto; padding-top:2%">
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            
                            
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col s12 m6" style="height:auto">
                    <div class="card purple white-text" style="height:100%; margin-bottom:1%"  >
                        <div class="card-content" style="padding:5% 5% 0 5%;">
                            <span class="card-title" style="padding:0%;">Appointments</span>
                            <div class="white divider"></div>
                            <div style=" height:125px; overflow:auto; padding-top:2%">
                            <p>There are no of appintments for Today!</p><br>
                            <p>X sessions are available now !</p><br>                       
                            </div>
                            <a href="{{route('docAppSettings')}}" class="waves-effect purple darken-3 btn" style="margin:5% 0 0 0 ">
                                Change Settings
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>