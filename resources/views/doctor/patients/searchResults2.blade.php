<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - Patients</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="/patient/style/style.css" />
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
          <li><a href="index.html">Home</a></li>
          <li class="current"><a href="patients.html">Patients</a></li>
          <li><a href="finance.html">Finance</a></li>
          <li><a href="inventory.html">Inventory</a></li>
          <li><a href="lab.html">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        
          <h2>
              Search Results
          </h2>
          
          <table class="table table-striped" >
              <thead>
            <tr>
                <th>id</th>
                <th>user_id</th>
                <th>first name</th>
                <th>last name</th>
                <th></th>
            </tr>
            </thead>
            @foreach ($patients as $patient)
            <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->user_id}}</td>
                <td>{{$patient->firstName}}</td>
                <td>{{$patient->lastName}}</td>
                <td>edit</td>
            </tr>
            
            @endforeach
        </table>
          
          
          
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
