<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - Home</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
    <!--  jQuery -->
<script type="text/javascript" src="style/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already used Bootstrap -->
<link rel="stylesheet" href="style/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="style/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="style/bootstrap-datepicker3.css"/>

</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Unicare Medical</h1>
        <div class="slogan"><img src="style/logo.png" /></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected finance - to highlight which finance you're on -->
          <li class="current"><a href="patientHome.html">Home</a></li>
          <li><a href="patientLab.html">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
<div id="patientHomeContent">
      <!-- insert the finance content here -->
      <h2>Online Appointment Reservation</h2>
		<div class="bootstrap-iso">
         <div class="container-fluid">
          <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12">
        
            <!-- Form code begins -->
            <form method="post">
              <div class="form-group col-md-11"> <!-- Date input -->
                <label class="control-label" for="date">Appointment Date</label>
                <input class="form-control" id="appDate" name="appDate" placeholder="dd/mm/yyyy" type="text"/>
              </div>
              <div class="form-group"> <!-- Submit button -->
                <button class="btn btn-primary " name="submit" type="submit">Check Availability</button>
              </div>
             </form>
             <!-- Form code ends --> 
        
           </div>
         </div>    
        </div>
        <script>
		 	var date_input=$('input[name="appDate"]'); //our date input has the name "date"
			var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			var options={
        		format: 'dd/mm/yyyy',
        		container: container,
        		todayHighlight: true,
        		autoclose: true,
    		};
    		date_input.datepicker(options); //initiali110/26/2015 8:20:59 PM ze plugin
		</script>
        </div>
		<div class="form_settings">
        <input class="submit" type="submit" name="reserveButton" value="Reserve Appointment" />
        </div>
	  <h2>Reserved Appointment Details</h2>
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
