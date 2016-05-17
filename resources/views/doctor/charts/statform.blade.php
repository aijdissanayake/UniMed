<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - add_new_patients</title>
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
  
  
  
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
          <h1 style="margin-left:0px">Unicare Medical</h1>
        
      </div>
      <div  id="heading"><h2 style="margin-left:28px">Statistics Viewer</h2></div>
    </div>
    <div id="site_content">
      <div id="content">
        <form action="{{route('patientsVisitsStat')}}" method="post">
            {{ csrf_field() }}
          <div class="form_settings">
          	<h2>Statistics</h2>
          	<p>Select a period to view requested statistics</p>
			<p><span>From :</span><input type="date" name="fromDatePicker" id="datepicker"/></p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
				});
			</script>
			<p><span>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><input type="date" name="toDatePicker" id="datepicker"/></p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
				});
			</script>
            <p align = "right" style="padding-top: 15px"> 
                
               <input class="submit" type="submit" name="submitButton" value="View Statistics" />
            </p>
            
          </div>
        </form>
          <p align = "right" style="padding-top: 15px">
	<div class="form_settings" align = "right" >
            <a href="{{route('patientsTab')}}">
            <input class="submit" type="submit" name="PatientsStat" 
               value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" />
            </a></div> 
           </p>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
  
</body>

</html>
