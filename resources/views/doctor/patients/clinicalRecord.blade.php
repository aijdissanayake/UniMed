<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - add_new_patients</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/style2.css" />
  
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
        <div class="slogan"><img src="style/logo.png" /></div>
      </div>
      <div id="heading"><h2> New Clinical Record</h2></div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>Clinical Record</h2>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>PatientID</span><input type="text" name="name" value="" /></p>
            <p><span>Diagnosis</span><textarea rows="4" cols="50" name="name"></textarea></p>
            <p><span>Prognosis</span><textarea rows="4" cols="50" name="name"></textarea></p>
            <p><span>Prescribed Drugs</span><textarea rows="4" cols="50" name="name"></textarea></p>
            <p><span>Special Remarks</span><textarea rows="4" cols="50" name="name"></textarea></p>
			<p><span>Next Visit Date</span><input type="date" id="datepicker"></p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
				});
			</script>
            <p align = "right" style="padding-top: 15px">
                <input class="submit" type="submit" name="submitButton" value="Submit Record" />
                <input class="submit" type="button" name="submitButton" value="Back" />
            </p>
          </div>
        </form>
		
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
  
</body>

</html>
