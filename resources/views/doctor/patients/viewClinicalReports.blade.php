<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - add_new_patients</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/view_clinical_report_style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Unicare Medical</h1>
        <div class="slogan"><img src="style/logo.png" /></div>
      </div>
      <div id="heading"><h2> Clinical Records</h2></div>
    </div>
    <div id="site_content">
      <h2 style="padding:10px 20px 20px 20px">Patient Name:&nbsp;&nbsp;<span style="color:#555">name</span></h2>
      <div id="content">
      	<div class="leftSidePane">
        <h2>Clinical reports</span></h2>
        </div>
        <div class="rightSidePane">
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Visit date</span><input type="text" name="visitDate" value="" /></p>
            <p><span>Diagnosis</span><input type="text" name="diagnosis" value="" style="resize:vertical" /></p>
            <p><span>Prognosis</span><input type="text" name="prognosis" value="" style="resize:vertical"/></p>
            <p><span>Prescribed Drugs</span><input type="text" name="prescDrugs" value="" style="resize:vertical"/></p>
            <p><span>Remarks</span><input type="text" name="remarks" value="" style="resize:vertical"/></p>
            <p><span>Next visit date</span><input type="text" name="nextVisitDate" value="" /></p>
            <p align = "right" style="padding-top: 15px"><a href="patients.html"><input class="submit" type="submit" name="backButton" value="Back" /></a></p>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
