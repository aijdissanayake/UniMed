<!DOCTYPE HTML>
<html>


<head>
    @include('patient.navBarPatient')
    <title>Unicare - Home</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="/style/style.css" />

    <meta charset="utf-8">
    <link rel="stylesheet" href="style/jquery-ui.css">
    <script src="style/jquery-1.10.2.js"></script>
    <script src="style/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>

    </head>

<body>
<div id="main">
    <div id="header">
        <div id="logo">
            <h1>Unicare Medical</h1>

        </div>
                <div id="menubar">
                    <ul id="menu">
                        <!-- put class="current" in the li tag for the selected finance - to highlight which finance you're on -->
                        <li class="current"><a href="{{route('patient')}}">Home</a></li>
                        <li><a href="{{route('patientLabTab')}}">Lab</a></li>
                    </ul>
                </div>
            </div>
            <div id="site_content">
                <div id="content">
                    <!-- insert the finance content here -->
                    <h2>Online Appointment Reservation</h2>
                    <form action="{{route('appointment')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form_settings">
                            <p><span>Reservation Date :</span>
                                <input type="date" id="reserveDate" name="appointmentDate"/>
                                <script>
        $(function () {
            
            $("#datepicker").datepicker();
        });
                                </script>

                                <label>&nbsp;&nbsp; Session :
                                    <select  name="session" id="sessionID" class="form-control input-sm">
                                        <option value=1> 8am - 11am </option>
                                        <option value=2> 12noon - 3pm </option>
                                        <option value=3>4pm - 8pm</option>
                                    </select>
                                </label></p>
                            <br>
                            
                            <h3><strong>Appointment Reservation Policy</strong></h3>
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
                            <br>
                            <input class="submit" type="submit" name="appointmentButton"  />	

                        </div>
                    </form>
                    <br>
                                                           
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
                    <br><br>
                      
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
    <h1>&nbsp;</h1>
</div>
</div>
<div id="footer">
    <p>&nbsp;</p>
</div>
</div>
</body>
</html>
