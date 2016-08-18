<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
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
          
          <table class="table table-striped"  style='font-family: trebuchet ms'>
              <thead>
            <tr>
                <th width='45px' style='text-align: center'>id</th>
                <th width='75px' style='text-align: center'>user_id</th>
                <th width='135px' style='text-align: center'>First name</th>
                <th width='135px' style='text-align: center'>Last name</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            @foreach ($patients as $patient)
            <tr>
                <td width='45px' style='text-align: center'>{{$patient->id}}</td>
                <td width='75px' style='text-align: center'>{{$patient->user_id}}</td>
                <td width='135px' style='text-align: center'>{{$patient->firstName}}</td>
                <td width='135px' style='text-align: center'>{{$patient->lastName}}</td>
                <td width='75px' style='text-align: center'>Edit</td>
                <td width='150px' style='text-align: center'>
                    <a href="">Add visit record
                    </a>
                    </td>
            </tr>
            
            @endforeach
        </table>
          
          
          
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
