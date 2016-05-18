<!DOCTYPE HTML>
<html>

<head>
    @include('patient.navBarPatient')
  <title>Unicare - Patient's Profile</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="/style/style2.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Unicare Medical</h1>
        <div class="slogan"></div>
      </div>
      <div id="heading"><h2>Patient's Profile</h2></div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>Personal Information</h2>
        <form action="#" method="post">
          <div class="form_settings">
          	<table style="width:70%; border-spacing:0;">
          <tr><td>First Name</td><td></td></tr>
          <tr><td>Last Name</td><td></td></tr>
          <tr><td>Gender</td><td></td></tr>
          <tr><td>Birth Year</td><td></td></tr>
		  <tr><td>Blood Type</td><td></td></tr>
		  <tr><td>Locale</td><td></td></tr>
		  <tr><td>Telephone No.</td><td></td></tr>
		  <tr><td>Email</td><td></td></tr>
        </table>
          </div>
        </form>
		<div class="form_settings">
		<p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="backButton" value="Back" /></p>
		</div>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
