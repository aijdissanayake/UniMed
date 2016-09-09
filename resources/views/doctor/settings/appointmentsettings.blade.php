<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Settings</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
    </head>


    <body class="blue lighten-5">
        <div class="container">
             <div class="row" style="height:auto; display: flex">
                <div class="col s12 m6" style="height:auto">
                    <div class="card white black-text" style="height:100%; margin-bottom:1%" >
                        <div class="card-title red white-text"><span style="padding:0%;">Add Session</span></div>
                        <div class="card-content" style="padding:5% 5% 0 5%;">
                            <div style=" height:150px; overflow:auto; padding-top:2%">
                             Select time:
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
                            <a href="#!" class="waves-effect purple darken-3 btn" style="margin:5% 0 0 0 ">
                                Change Settings
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
                            <p>Kalana Ishanka</p>
                            <p>lorem ipsum...</p>
                            <p>lorem ipsum...</p>
                            <p>lorem ipsum...</p>
                            <a href="#!" class="waves-effect red lighten-2 btn">
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
                            <a href="#!" class="waves-effect blue-grey lighten-2 btn">
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
        </div>

    </body>
</html>