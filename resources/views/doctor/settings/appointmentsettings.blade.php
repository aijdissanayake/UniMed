<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Settings</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <script type="text/javascript" src="/js\doc.js"></script>
    </head>


    <body class="blue lighten-5">
        <div class="container">
             <div class="row" style="height:auto; display: flex">
                <div class="col s12 m6" style="height:auto">
                    <div class="card white black-text" style="height:100%; margin-bottom:1%" >
                        <div class="card-title red white-text"><span style="padding:0%;">Add Session</span></div>
                        <div class="card-content">
                            <div style=" height:150px;">
                                <form action="{{route('')}}">
                                    <div class="row">
                                        <div class="col s5" style="display: flex">
                                            <span class="black-text" for="startTime" style="float:left">Start Time : </span><br>
                                            <input id="startTime" class="timepicker" type="time" name="startTime" value="07:00:00" required>
                                        </div>
                                        <div class="col s5 offset-s2" style="display: flex">
                                            <span class="black-text" for="endTime">End Time : </span><br>
                                            <input id="endTime" class="timepicker" type="time" name="endTime" value="08:00:00" required>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="availableNow" id="availableNow">
                                        <label for="availableNow">Make the Session Available from Now</label>
                                    </div>
                                    <div class="input-field"><input type="checkbox" name="availability" value="Available Now"></div>
                                </form>
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
                            <form>
  <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
  <input type="checkbox" name="vehicle2" value="Car"> I have a car 
</form>                     
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