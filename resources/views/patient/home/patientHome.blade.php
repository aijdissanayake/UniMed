<!DOCTYPE HTML>
<html>


    <head>
        @include('patient.nav_bar_pat')
        <title>Unicare - Home</title>
    </head>

    <body>
        <div id="container">
            <!-- insert the finance content here -->

            <div class="row">
                <div class="col s12 m8 l6 offset-m2 offset-l3">
                    <div class="card blue-grey lighten-1">
                        <div class="card-content white-text">
                            <span class="card-title"><h2>Make appointment:</h2></span>
                            <form action="{{route('appointment')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form_settings">
                                    <span>Reservation Date :</span>
                                    <input type="date" id="reserveDate" name="appointmentDate"/>
                                    <script>
                                        $(function () {

                                            $("#datepicker").datepicker();
                                        });
                                    </script>

                                    <div>
                                        <p>Session :</p>

                                        <div class="input-field">
                                            <p>Select
                                                <select  name="session" id="sessionID">
                                                    <option value="" disabled selected>Choose your preferred session</option>
                                                    <option value=1> 8am - 11am </option>
                                                    <option value=2> 12noon - 3pm </option>
                                                    <option value=3>4pm - 8pm</option>
                                                </select></p>

                                            <p></p>
                                        </div>
                                    </div>

                                    <input class="waves-effect waves-light btn" type="submit" name="appointmentButton"  />	

                                </div>
                            </form>

                            @if($directing == 0)
                            <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                                    Invalid Date
                                </div></h2>

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
                            @elseif ($directing == 4)
                            @if($hasAppointment)
                            <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                                    You already have an Appointment.<br>{{$currentAppDetails}}<br> Cancel it to create a new appointment<br> 
                                </div></h2>
                            @endif
                            @endif

                        </div>
                    </div>
                    <div class="card white">
                        <div class="card-content grey-text">
                            <span class="card-title"><h3><strong>Appointment Reservation Policy</strong></h3></span>
                            <div
                                <ul>
                                    <li>Appointments should be made at least day prior to the appointment date</li>
                                    <li>All reserved appointments are given reservation order based priority.</li><br>
                                    <li>Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                                    <li>Patients can roughly calculate his/her appointment time by assuming 10 mins for each patient.</li><br>
                                    <li>If the patient is not available when his/her appointment number is called, then the next number will be called.</li><br>
                                    <li>In case of late arrival of a patient with a higher priority number and another patient is examined during the arrival,<br>&nbsp;&nbsp;&nbsp; the arrived patient will be called immediately after the current examination.</li><br>
                                </ul>
                            </div>
                            <div class="form_settings">
                                <form action="{{route('cancelAppointment')}}" method="get">
                                    <input class="submit" type="submit" name="cancelButton" value="Cancel Appointment" />
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
                        </div>
                    </div>
                </div>
            </div>


            <h1>&nbsp;</h1>
        </div>
        <div id="footer">
            <p>&nbsp;</p>
        </div>
    </body>
</html>
