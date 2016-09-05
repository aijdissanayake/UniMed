<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Settings</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
    </head>


    <body>
        <div class="container">
            
            <div class="row top-row">
                <div class="col s12 m6">
                    <div class="card green white-text">
                        <div class="card-content">
                            <span class="card-title"><strong>My profile</strong></span>
                            <table>
                                <tr><td>Name</td><td>{{$doctor->doctorName}}</td></tr>
                                <tr><td>Registration Number</td><td>{{$doctor->RegNo}}</td></tr>
                                <tr><td>Email</td><td>{{$doctor->getUser->email}}</td></tr>
                            </table>
                            <a href="#!" class="waves-effect green darken-3 btn">
                                Edit
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

                <div class="col s12 m4">
                    <div class="card red white-text">
                        <div class="card-content">
                            <span class="card-title"><strong>Doctors</strong></span>
                            <p>Kalana Ishanka</p>
                            <p>lorem ipsum...</p>
                            <a href="#!" class="waves-effect red lighten-2 btn">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card blue-grey darken-2 white-text">
                        <div class="card-content">
                            <span class="card-title"><strong>Assistants</strong></span>
                            <p>lorem ipsum...</p>
                            <a href="#!" class="waves-effect blue-grey lighten-2 btn">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card yellow darken-2 white-text">
                        <div class="card-content">
                            <span class="card-title"><strong>Lab Assistants</strong></span>
                            <p>lorem ipsum...</p>
                            <a href="#!" class="waves-effect yellow darken-4 btn">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card grey white-text">
                        <div class="card-content">
                            <span class="card-title">Finances</span>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>
                            <p>lorem ipsum</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>