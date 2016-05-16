<!DOCTYPE HTML>
<html>

<head>
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
    <div id="header">
      <div id="logo">
        <h1>Unicare Medical</h1>
        <div class="slogan"><img src="/style/logo.png" /></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected finance - to highlight which finance you're on -->
          <li><a href="{{route('homeTab')}}">Home</a></li>
          <li><a href="{{route('patientsTab')}}">Patients</a></li>
          <li><a href="{{route('financeTab')}}">Finance</a></li>
          <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
          <li class='current'><a href="{{route('labTab')}}">Lab</a></li>
        </ul>
      </div>
    </div>
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
    
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>