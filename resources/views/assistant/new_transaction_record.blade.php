<!DOCTYPE HTML>
<html>

<head>
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
          	<p><span>Transaction Type</span><select id="id" name="name"><option value="1">Income</option><option value="2">Expense</option></select></p>
            <p><span>Value (LKR)</span><input type="text" name="name" value="" /></p>
            <p><span>Description</span><textarea rows="4" cols="50" name="name"></textarea></p>
            <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Add Entry" /></p>
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