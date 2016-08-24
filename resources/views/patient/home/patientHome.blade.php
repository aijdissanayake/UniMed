<!DOCTYPE HTML>
<html>


    <head>

        @include('patient.nav_bar_pat')
        <title>Unicare - Home</title>
        <script type="text/javascript" src="/js\init.js"></script>
        <script type="text/javascript" src="/js\patient.js"></script>
        <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    </head>

    <body class="teal lighten-5">
        <div class="container">
            <!-- insert the finance content here -->

            <div class="row" style="margin-top: 100px;">
                <div class="col s12 ">
                    <div class="card blue-grey lighten-1">
                        <div class="card-content white-text">
                            <span class="card-title " style="font-family:Century Gothic"><h2>Make Appointment</h2></span>
                            <div class="divider blue darken-1"></div>

         <div class="section" >

         <div id="policyDiv" >
         <button class="waves-effect waves-light btn" id="policyButton">Appointment Policy</button>



                    <div id="policy" class="grey white-text">


                        <ul class="grey">
                            <li> </li>
                            <li>Appointments should be made at least day prior to the appointment date.</li>
                            <li>All reserved appointments are given reservation order based priority.</li><br>
                            <li>Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                            <li>Patients can roughly calculate his/her appointment time by assuming 10 mins for each patient.</li><br>
                            <li>If the patient is not available when his/her appointment number is called, then the next number will be called.</li><br>
                            <li>In case of late arrival of a patient with a higher priority number and another patient is examined during the arrival, the arrived patient will be called immediately after the current examination.</li><br>
                            <li></li>
                        </ul>
  
                    </div>
                    </div>
                    </div>


                            @if($directing == 0 || $directing == 1 || $directing == 2 ||  $directing==4 || $directing == 5)

                            @if(!$hasAppointment || $had)

                            <form action="{{route('appointment')}}" method="post">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="input-field col s6">

                                        <div class="blue-text text-lighten-1">

                                        <input type="date" class="datepicker " name="appointmentDate" placeholder="Pick a Date">

                                        <label for="appointmentDate" class="white-text" >Reservation Date :</label>

                                        <script type="text/javascript">

                                            $('.datepicker').pickadate({
                                                selectMonths: true, // Creates a dropdown to control month
                                                selectYears: 15 // Creates a dropdown of 15 years to control year
                                            });

                                        </script>

                                        <script type="text/javascript">


                                            $('#appointmentDate').focusout(function () {
                                                var appointmentDate = document.getElementById('appointmentDate').value;
                                                var d = new Date();

                                                console.log(d);
                                                if (appointmentDate < d) {
                                                    console.log("Invalid date");
                                                }
                                            });
                                        </script>
                                      </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="input-field col s6">

                                        <select class="grey-text text-lighten-1" name="session" id="sessionID">
                                            <option value="0" disabled selected ><span >Choose your preferred session</span></option>
                                            <option value=1> 8am - 11am </option>
                                            <option value=2> 12noon - 3pm </option>
                                            <option value=3>4pm - 8pm</option>
                                        </select>
                                        <label for="sessionID" class="white-text"> Session :</label>

                                    </div>
                                </div>

                                <input class="waves-effect waves-light btn grey lighten-3 black-text" type="submit" name="appointmentButton"  />	

                            </form>

                            @else

                            <div>
                                <form action="{{route('cancelAppointment')}}" method="get">
                                    <input class="waves-effect waves-dark btn red" type="submit" name="cancelButton" value="CancelAppointment" />
                                </form>
                                @if($directing == 5)
                                @if($hasAppointment)

                                <h2><div style=" width: 600px ; text-align:center ; background-color: orange; color: white; font-size:20px ;">
                                        Appointment Canceled !
                                    </div></h2>
                                @else
                                <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                                        No Appointments to Cancel !
                                    </div></h2>
                                @endif
                                @endif
                            </div>

                            @endif
                            @endif

                            @if($directing == 3)
                            <div class="section">
                            <form action="{{route('cancelAppointment')}}" method="get">
                                <input class="waves-effect waves-dark btn red" type="submit" name="cancelButton" value="CancelAppointment" />
                            </form>
                            </div>
                            @endif


                             @if($directing == 0)
<!--                            <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                                    Invalid Date
                                </div></h2> -->

                            @elseif($directing == 1)
                            @if($hasAppointment)

                            <h2><div  style=" width: 250px ; text-align:center ; background-color: greenyellow; color: white; font-size:20px ; ">
                                    You have an Appointment<br> {{$currentAppDetails}}</div></h2>
                            @endif
                            @elseif ($directing == 2)
                            @if(!$hasAppointment)
                            <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                                    Sorry, All the Online Appointments are reserved. Please Contact Doctor for Arrangements.
                                </div></h2>
                            @endif
                            @elseif ($directing == 3)
                            @if(!$hasAppointment)
                            <h2><div style=" width: 280px ; text-align:center ; background-color: greenyellow; color: white; font-size:20px ;">
                                    Appointment Created<br> {{$currentAppDetails}}
                                </div></h2>
                            @endif
                           <!--  @elseif ($directing == 4)
                            @if($hasAppointment)
                            <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                                    You already have an Appointment.<br>{{$currentAppDetails}}<br> Cancel it to create a new appointment<br> 
                                </div></h2>
                            @endif -->
                            @endif


                        </div>
                    </div>
                </div>


               
            </div>


    <div id="footer">
        <p>&nbsp;</p>
    </div>

</body>
</html>
