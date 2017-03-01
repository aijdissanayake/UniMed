<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - Statistics</title>
  @include('doctor.nav_bar_doc')
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
      
      <div id="heading"><h2>Statistics Viewer</h2></div>
    </div>
    <div id="site_content">
      <div id="content">
        <form action="#" method="post">
          <div class="form_settings">
          	<h2>Statistics</h2>
          	<p>Select a period to view requested statistics</p>
			<p><span>From</span><input type="date" id="datepicker"></p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
				});
			</script>
			<p><span>To</span><input type="date" id="datepicker"></p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
				});
			</script>
            <p align = "right" style="padding-top: 15px">
                <input class="submit" type="submit" name="submitButton" value="View Statistics" />
                <input class="submit" type="button" name="Back" value="Back" />
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
