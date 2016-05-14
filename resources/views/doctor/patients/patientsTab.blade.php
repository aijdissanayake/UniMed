<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - Patients</title>
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
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{route('homeTab')}}">Home</a></li>
          <li class="current"><a href="{{route('patientsTab')}}">Patients</a></li>
          <li><a href="{{route('financeTab')}}">Finance</a></li>
          <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
          <li><a href="{{route('labTab')}}">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <p><h2>Registered Patients' Details</h2></p>
        <!--<form action="{{route('searchPatients')}}" method="post">-->
        <div class="form_settings">
<!--		<p><span>Search patient by</span>
		<select id="id" name="name"><option value="1">First Name</option><option value="2">Last Name</option><option value="2">Telephone No.</option></select>
		<input type="text" name="name" placeholder="Enter value here" value="" />
		<input class="submit" type="submit" name="searchButton" value="Search" />
		</p>-->
		@include('doctor.patients.searchForm')
        </div>
        <!--</form>-->
        <table style="width:100%; border-spacing:0;">
          <tr><th width = 20%>Details</th><th>Description</th></tr>
          <tr><td>First Name</td><td></td></tr>
          <tr><td>Last Name</td><td></td></tr>
          <tr><td>Contact No.</td><td></td></tr>
          <tr><td>Email</td><td></td></tr>
          <tr><td>Locale</td><td></td></tr>
          <tr><td>Blood Group</td><td></td></tr>
          <tr><td>Remarks</td><td></td></tr>
        </table>
        <div class="form_settings">
            <a href="{{route('addPatient')}}">
            <input class="submit" type="submit" name="addNewPatient" 
               value="Add a New Patient" />
            </a>
        </div>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
