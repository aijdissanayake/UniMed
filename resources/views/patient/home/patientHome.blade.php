<!DOCTYPE HTML>
<html>
    <head>

        @include('patient.nav_bar_pat')
        <title>Unicare - Home</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <script src="//js.pusher.com/2.2/pusher.min.js"></script>
        <script type="text/javascript" src="/js/patient.js"></script>
        <link rel="stylesheet" type="text/css" href="/style/patientStyle.css">

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
                                                    <li>&nbsp;1. Appointments should be made at least a day prior to the appointment date.</li><br>
                                                    <li>&nbsp;2. All reserved appointments are given reservation order based priority.</li><br>
                                                    <li>&nbsp;3. Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                                                    <li>&nbsp;4. Patients can roughly calculate his/her appointment time by assuming 10 minutes for each patient.</li><br>
                                                    <li>&nbsp;5. If a patient is not present when his/her appointment number is called, the next number will be called.</li><br>
                                                    <li>&nbsp;6. 6. In case of late arrival of a patient with a higher priority number while another patient is being examined, the new patient will be called immediately after the current patient.</li><br>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="policyL" class="purple lighten-5 grey-text z-depth-1 hide-on-small-only" 
                                             style="padding: 20px 20px 0px 20px; margin-top: 20px;  height: 380px; border-radius:0%">
                                            <span class="purple-text" id="title"><h5> Appointment Policy </h5> <br> </span>
                                            <div class="divider purple lighten-3"></div>
                                            <div style="overflow-y: scroll; height: 250px;">
                                                <ul id="sentences" class="purple lighten-5 " style="border-radius:0%">
                                                    <li>1. Appointments should be made at least a day prior to the appointment date.</li><br>
                                                    <li>2. All reserved appointments are given reservation order based priority.</li><br>
                                                    <li>3. Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                                                    <li>4. Patients can roughly calculate his/her appointment time by assuming 10 minutes for each patient.</li><br>
                                                    <li>5. If a patient is not present when his/her appointment number is called, the next number will be called.</li><br>
                                                    <li>6. In case of late arrival of a patient with a higher priority number while another patient is being examined, the new patient will be called immediately after the current patient.</li><br>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="purple lighten-5 purple-text text-darken-4 z-depth-1 section col s12 m6" style="padding: 20px 20px 0px 20px; margin-top: 20px; height: 380px">

                                    @if(($directing == 1 && $hasAppointment) || $directing == 3 || $directing == 4)
                                    <span class="purple-text text-darken-4" id="title" title="Cancel this Appointment to create a new One">
                                        <h5>{{$title or ''}}</h5> <br>
                                    </span>
                                    <div class="divider purple darken-4"></div>
                                    <div style="height:58%; border-color:purple; border-style: solid; border-width:1px; border-radius:5px; padding:10px ;margin-top:10%">
                                        <br>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;{{$appDate or ''}}
                                        <br><br>Session :&nbsp;&nbsp;{{$session or ''}}
                                        <br><br>App. No :&nbsp;&nbsp;{{$appNo or ''}}<br>
                                        <form  action="{{route('cancelAppointment')}}"  method="get">
                                                <input id="cancelButton" class="btn tooltipped purple lighten-5 red-text" 
                                                data-position="bottomt" data-delay="50" data-tooltip="Cancel this Appointment to create a new One"style="float:right;  border-color:red; border-style: solid; border-width:1px;" type="submit" name="cancelButton" value="Cancel" />
                                        </form>
                                    </div>

                                        @if($directing == 3 || $directing == 1)
                                        <script type="text/javascript">
                                            Materialize.toast('You have an Appointment!', 4000, 'rounded blue');
                                        </script>
                                        @endif

                                    @elseif ($directing == 2 && !$hasAppointment)
                                    <span class="purple-text" id="title"><h5>{{$title or ''}}</h5> <br> </span>
                                    <div class="divider purple"></div>
                                    <div  class="purple darken-4" style=" width: 250px ; text-align:center ; color: white; font-size:20px ">
                                        Sorry, All the Online Appointments are reserved. Please Contact Doctor for Arrangements.
                                    </div>

                                    @elseif( ($directing == 1 && !$hasAppointment) || $directing == 2 || $directing == 5)

                                    <form action="{{route('appointment')}}" method="post" id="appForm">
                                        {{ csrf_field() }}

                                        <span class="purple-text" id="formtitle"><h5> Make Appointment </h5> <br> </span>
                                        <div class="row">
                                            <div class="input-field " style="padding:10px" >
                                                <div class="black-text ">
                                                    <input type="date" id="appointmentDate" name="appointmentDate" placeholder="Pick a Date" required=""/>
                                                    <label for="appointmentDate" class="purple-text text-lighten-2" >Reservation Date :</label>
                                                </div>
                                            </div>
                                        </div> 
                                        <!-- hidden field value is assigned at js file-->
                                        <input type="text" name="formattedDate" id="altFormat" style="display: none;" />
                                        <div class="row">
                                            <div id="sessionDiv" class="input-field"  style="padding:10px">
                                                <select class="black-text text-lighten-1" name="session" id="session" >
                                                    <option  value="0" disabled selected>Choose your preferred session</option>
                                                    <option value="0" > Option Test</option>
                                                </select>
                                                <label for="session" class="purple-text text-lighten-2"> Session :</label>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="input-field">                        
                                                <input class="btn grey lighten-3 black-text" style="float:right" type="submit" name="appointmentButton" id="appSubmit" value="submit">
                                            </div>
                                        </div>
                                    </form>
                                        @if($directing == 5)
                                        <script type="text/javascript">
                                            Materialize.toast('Appointmtment Cancelled!', 4000, 'rounded red');
                                        </script>
                                        @endif

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
