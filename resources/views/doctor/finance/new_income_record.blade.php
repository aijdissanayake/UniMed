<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
  <title>Unicare - add_new_patients</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/add_new_patient_style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Unicare Medical</h1>
        <div class="slogan"><img src="style/logo.png" /></div>
      </div>
      <div id="heading"><h2> New Transaction Entry</h2></div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>Transaction Details</h2>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>First Name</span><input type="text" name="name" value="" /></p>
            <p><span>Last Name</span><input type="text" name="name" value="" /></p>
            <p><span>Contact No.</span><input type="text" name="name" value="" /></p>
            <p><span>Email</span><input type="text" name="name" value="" /></p>
            <p><span>Locale</span><input type="text" name="name" value="" /></p>
            <p><span>Blood Group</span><input type="text" name="name" value="" /></p>
            <p><span>Remarks</span><textarea rows="4" cols="50" name="name"></textarea></p>
            <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Register" /><input class="submit" type="submit" name="updateButton" value="Update" /><a href="patients.html"><input class="submit" type="submit" name="backButton" value="Back" /></a></p>
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
