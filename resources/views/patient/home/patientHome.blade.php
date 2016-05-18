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
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/jquery-ui.css">
    <script src="style/jquery-1.10.2.js"></script>
    <script src="style/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />

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
				$(function() {
				$( "#datepicker" ).datepicker();
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
            <input class="submit" type="submit" name="appointmentButton"  />	
                
                </div>
                </form>
      <br>
        @if($directing == 1)
           @if($hasAppointment)
           
           <h2><div  style=" width: 220px ; text-align:center ; background-color: greenyellow; color: white; font-size:20px ; ">You have an Appointment</div></h2>
           @endif
        @elseif ($directing == 2)
            @if(!$hasAppointment)
            <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                    Sorry, All the Online Appointments are reserved. Please Contact Doctor for Arrangements.
           </div></h2>
           @endif
        @elseif ($directing == 3)
            @if(!$hasAppointment)
            <h2><div style=" width: 600px ; text-align:center ; background-color: greenyellow; color: white; font-size:20px ;">
                    Appointment Created
           </div></h2>
           @endif
        @elseif ($directing == 4)
            @if($hasAppointment)
            <h2><div style=" width: 600px ; text-align:center ; background-color: red; color: white; font-size:20px ;">
                    You already have an Appointment, cancel it to create a new appointment
           </div></h2>
           @endif
        @endif
           <br><br>          
            
   
		<h3><strong>Appointment Reservation Policy</strong></h3>
		<div
            <ul>
                <li>All reserved appointments are given reservation order based priority.</li><br>
                <li>Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                <li>Patients can roughly calculate his/her appointment time by assuming 10 mins for each patient.</li><br>
                <li>If the patient is not available when his/her appointment number is called, then the next number will be called.</li><br>
                <li>In case of late arrival of a patient with a higher priority number and another patient is examined during the arrival, the       arrived patient will be called immediately after the current examination.</li><br>
            </ul>
        </div>
        </div>
	  
	   <div class="form_settings">
        <input class="submit" type="submit" name="cancelButton" value="Cancel Appointment" />
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
