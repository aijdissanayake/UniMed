<!DOCTYPE HTML>
<html>


<head>

    @include('patient.nav_bar_pat')
    <title>Unicare - Home</title>
    <script type="text/javascript" src="/js\init.js"></script>
    <script type="text/javascript" src="/js\patient.js"></script>
    <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <style type="text/css">

        .picker__date-display, .picker__weekday-display
        {
            background-color: #de49d4;
        }

        .picker__date-display 
        {
            text-align: center;
            background-color: #f398ed;
            color: #fff;
            padding-bottom: 15px;
            font-weight: 300;
        }

        .picker__day.picker__day--today
        {
            color: #d423c8;
        }

        .picker__day--selected, .picker__day--selected:hover, .picker--focused .picker__day--selected
        {
           border-radius: 50%;        
           -webkit-transform: scale(0.9);
           transform: scale(0.9);
           background-color: #d423c8;
           color: #ffffff;
       }
       .picker__close, .picker__today {
        font-size: 1.1rem;
        padding: 0 1rem;
        color: #d423c8;
    }

    .btn-flat
    {
       box-shadow: none;
       background-color: transparent;
       color: #d423c8;
       cursor: pointer;
   }

   .dropdown-content li>a, .dropdown-content li>span {
        color:#d423c8;
   }


   ::-webkit-input-placeholder 
   {
    color: black;
}

:-moz-placeholder { /* Firefox 18- */
   color: black;  
}

::-moz-placeholder {  /* Firefox 19+ */
    color: black;  
}

:-ms-input-placeholder {  
    color: black;  
}
</style>

</head>

<body class="grey lighten-4">

    <div class="container">
        <div class="row" style="margin-top: 15px;">
            <div class="col s12 ">
                <div class="card">
                    <div class="card-title  white-text " style="background-color:#b31fa2">
                        <span style="font-family:Calibri ,sans-serif">
                            <i class="small material-icons" style="vertical-align:middle">event</i>&nbsp;&nbsp;Appointments
                        </span>
                    </div>
                    <div class="card-content">
                        <div class="row"> 
                            <div class="section col s12 m6">
                                <div id="policyDiv" >
                                    <div class="row hide-on-med-and-up" style="margin-left:10px">
                                       <a  class="purple-text" id="policyButton">View Appointment Policy</a>
                                    </div>
                                    <div id="policyS" class="purple lighten-5 grey-text z-depth-1 hide-on-med-and-up" style="margin-top: 20px">
                                        <div style="overflow-y: scroll; height: 250px;">
                                            <ul class="purple lighten-5 ">
                                                <li>&nbsp;1. Appointments should be made at least day prior to the appointment date.</li><br>
                                                <li>&nbsp;2. All reserved appointments are given reservation order based priority.</li><br>
                                                <li>&nbsp;3. Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                                                <li>&nbsp;4. Patients can roughly calculate his/her appointment time by assuming 10 mins for each patient.</li><br>
                                                <li>&nbsp;5. If the patient is not available when his/her appointment number is called, then the next number will be called.
                                                </li><br>
                                                <li>&nbsp;6. In case of late arrival of a patient with a higher priority number and another patient is examined during the arrival, the arrived patient will be called immediately after the current examination.</li><br>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="policyL" class="purple lighten-5 grey-text z-depth-1 hide-on-small-only" 
                                    style="padding: 20px 20px 0px 20px; margin-top: 20px;  height: 350px; border-radius:0%">
                                        <span class="purple-text" id="title"><h5> Appointment Policy </h5> <br> </span>
                                            <div class="divider purple"></div>
                                        <div style="overflow-y: scroll; height: 250px;">
                                            <ul id="sentences" class="purple lighten-5 " style="border-radius:0%">
                                                <li>1. Appointments should be made at least day prior to the appointment date.</li><br>
                                                <li>2. All reserved appointments are given reservation order based priority.</li><br>
                                                <li>3. Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                                                <li>4. Patients can roughly calculate his/her appointment time by assuming 10 mins for each patient.</li><br>
                                                <li>5. If the patient is not available when his/her appointment number is called, then the next number will be called.</li>
                                                <br>
                                                <li>6. In case of late arrival of a patient with a higher priority number and another patient is examined during the arrival, the arrived patient will be called immediately after the current examination.</li><br>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="purple lighten-5 grey-text z-depth-1 section col s12 m6" style="padding: 20px 20px 0px 20px; margin-top: 20px; height: 350px">

                            @if($directing == 0 || $directing == 1 || $directing == 2 ||  $directing==4 || $directing == 5)

                            @if(!$hasAppointment || $had)

                                <form action="{{route('appointment')}}" method="post" onsubmit="return ValidationEvent">
                                {{ csrf_field() }}

                                    <span class="purple-text" id="title"><h5> Make Appointment </h5> <br> </span>
                                    <div class="row">
                                        <div class="input-field " style="padding:10px" >
                                            <div class="black-text ">
                                                <input type="date" class="datepicker " id="appointmentDate" name="appointmentDate" placeholder="Pick a Date" required=""/>
                                                <label for="appointmentDate" class="purple-text text-lighten-2" >Reservation Date :</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field" style="padding:10px">
                                            <select class="black-text text-lighten-1" name="session" id="session" data-beloworigin="true" required="">
                                                <option  value="" disabled selected >Choose your preferred session</option>
                                                <option value=1> 8am - 11am </option>
                                                <option value=2> 12noon - 3pm </option>
                                                <option value=3>4pm - 8pm</option>
                                            </select>
                                            <label for="session" class="purple-text text-lighten-2"> Session :</label>
                                        </div>
                                        <div id="invalidSession" title="Invalid Session" class=" z-depth-1 White purple-text col s3" style="margin:40px 0px 0px 30px; order-color:red; border-style:solid; border-width:1px; border-radius:1% ">
                                    Select a Valid Session! &nbsp;&nbsp;&nbsp;
                                            <a href="#"><span class=" grey-text z-depth-0" id="close" style="height:15px; width:25px; vertical-align:middle; border-color:grey; border-style:solid; border-width:1px">&nbsp;X&nbsp; </span></a>
                                        </div>
                                    </div>                         
                                    <input class="waves-effect waves-light btn grey lighten-3 black-text" type="submit" name="appointmentButton" id="appSubmit">	
                                </form>
               

                            @else

                                <div>
                                    <form action="{{route('cancelAppointment')}}" method="get">
                                        <input class="waves-effect waves-dark btn red" type="submit" name="cancelButton" value="CancelAppointment" />
                                    </form>

                                @if($directing == 5)
                                    @if($hasAppointment)

                                        <h2><div style=" width: 600px ; text-align:center ; background-color: orange; color: white; font-size:20px ;">Appointment Canceled !
                                            </div>
                                        </h2>
                                    @else
                                        <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">No Appointments to Cancel !
                                            </div>
                                        </h2>
                                    @endif
                                @endif
                                </div>

                            @endif
                            @endif

                            @if($directing == 3)
                                <div class="card section">
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
                                    <h2><div  style=" width: 250px ; text-align:center ; background-color: greenyellow; color: white; font-size:20px ; ">You have an Appointment<br> {{$currentAppDetails}}</div>
                                    </h2>
                                @endif
                            @elseif ($directing == 2)
                                @if(!$hasAppointment)
                                    <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                                        Sorry, All the Online Appointments are reserved. Please Contact Doctor for Arrangements.
                                        </div>
                                    </h2>
                                @endif
                            @elseif ($directing == 3)
                                @if(!$hasAppointment)
                                    <h2><div style=" width: 280px ; text-align:center ; background-color: greenyellow; color: white; font-size:20px ;">Appointment Created<br> {{$currentAppDetails}}</div>
                                    </h2>
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
            </div>
        </div>
    </div> 

    <div id="footer">
        <p>&nbsp;</p>
    </div>

</body>
</html>
