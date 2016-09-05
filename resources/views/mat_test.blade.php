<!DOCTYPE html>
<html>
<head>
  <title>Test file</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS Files -->

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <!-- <script type="text/javascript" src="materialize\js\materialize.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <script type="text/javascript" src="materialize\js\materialize.min.js"></script>
  <link rel="stylesheet" href="materialize\css\materialize.min.css">
  <script type="text/javascript" src="js\init.js"></script>
   <script type="text/javascript" src="js\patient.js"></script>
  <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row top-row">
    <div class="row">
      <div class="col s12 m8 offset-m2 l4 offset-l4">
        <div class="card">
          <div class="card-title red white-text">First card</div>
          <div class="card-content red lighten-5">
          This card takes up all 12 columns (the full width) of a small screen, 2/3rds of a medium screen and half of a large screen.
          </div>
        </div>
      </div>
      <div class="col s12 m4 offset-m4 l4 offset-l4">
        <div class="card">
          <div class="card-title">Second card</div>
          <div class="card-content">
            This card takes up all 12 columns (the full width) of a small screen, 2/3rds of a medium screen and half of a large screen.
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col s12 m8 l4">
      <div class="card">
          <div class="card-title green white-text">Third card</div>
          <div class="card-content lime lighten-5">
            This card takes up all 12 columns (the full width) of a small screen, 2/3rds of a medium screen and half of a large screen.
          </div>
        </div>
    </div>
    </div>
  </div>

<button id="policyButton">Appointment Policy</button>



<div id="policy">

                        <ul>   
                            <li>Appointments should be made at least day prior to the appointment date.</li>
                            <li>All reserved appointments are given reservation order based priority.</li><br>
                            <li>Patients are advised to be present at the dispensary 10 minutes early.</li><br>
                            <li>Patients can roughly calculate his/her appointment time by assuming 10 mins for each patient.</li><br>
                            <li>If the patient is not available when his/her appointment number is called, then the next number will be called.</li><br>
                            <li>In case of late arrival of a patient with a higher priority number and another patient is examined during the arrival, the arrived patient will be called immediately after the current examination.</li><br>
                        </ul>
  
</div>



</div>

 
 <a  class="btn tooltipped col s2" data-position="right" data-delay="50" data-tooltip="I am tooltip"> Right</a>
 <br><br>
 {{$htmlCode}}       
</div>
</body>
</html>