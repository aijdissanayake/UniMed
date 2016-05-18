<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.navBarDoctor')
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
        <div class="slogan"></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{{route('homeTab')}}">Home</a></li>
          <li><a href="{{route('patientsTab')}}">Patients</a></li>
          <li><a href="{{route('financeTab')}}">Finance</a></li>
          <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
          <li><a href="{{route('labTab')}}">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        
          <h2>
              Search Results
          </h2>

		  <p>Oops. Sorry but your search matched no one in our database.
		  <a href="{{route('patientsTab')}}">Try again?</a>
		  </p>
                  <div class="form_settings"
          @include('doctor.patients.searchForm')
          </di</div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
