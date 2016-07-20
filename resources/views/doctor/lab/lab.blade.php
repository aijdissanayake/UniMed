<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.navBarDoctor')
  <title>Unicare - Lab</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="/style/style.css" />
</head>

<body>
  <div id="main">

    <div id="site_content">
      <div id="content">
        <div class='form_settings'>
            <p><h2>Search Lab Reports</h2></p>
        @include('doctor.lab.searchForm')
<!--        <form action="#" method="post" >
         <span ><b>Patient's Name</b></span><span> </span>
         <input type="text" name="name" value="" /><input class="submit" type="submit" name="searchButton" value="Search" style="float:none" />
        </form>-->
        </div>
        
        <div class="Lab_divsetting">
            <p><h2>Recent Lab Reports</h2></p>
            <table style="width:100%; border-spacing:0;">
              <tr><th width = "40%">Patient</th><th>Report type </th></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
            </table>
        </div>
        
        <div class="Lab_divsetting">
            <table style="width:100%; border-spacing:0;">
              <tr><th width = "40%">Date</th><th>Report type</th></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
            </table>
        </div>
        <h2>Add a New Lab Tech</h2>
        <form action="#" method="post">
          <div class="form_settings">
          	<p><span>First Name</span><input type="text" name="name" value="" /></p>
            <p><span>Last Name</span><input type="text" name="name" value="" /></p>
            <p><span>Birth Year</span><input type="text" name="name" value="" /></p>
            <p><span>Telephone No.</span><input type="text" name="name" value="" /></p>
            <p><span>Home Addrress</span><input type="text" name="name" value="" /></p>
            <p><span>Lab Addrress</span><input type="text" name="name" value="" /></p>
			<p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Add New Lab Technician" /></p>
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
