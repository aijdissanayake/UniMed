<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.navBarDoctor')
  <title>Unicare - View Patient</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="/style/add_new_patient_style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Unicare Medical</h1>
        <div class="slogan"><img src="/style/logo.png" /></div>
      </div>
      <div id="heading"><h2>Patient Details</h2></div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>Patient Details</h2>
        <form action="{{route('patientAdded')}}" method="post">
            {{ csrf_field() }}
          <div class="form_settings">
              <p><span>First Name</span>{{$patient->firstName}}</p>
              <p><span>Last Name</span>{{$patient->lastName}}</p>
              <p><span>Birth Year</span>{{$patient->birthYear}}</p>
              <p><span>Gender</span>
                  @if ($patient->gender==0)
                        Female
                  @else
                        Male
                  @endif</p>
              <p><span>Email</span>{{$patient->getUser->email}}</p>
              <p><span>Contact No.</span>{{$patient->telephoneNo}}</p>
              <p><span>Locale</span>{{$patient->locale}}</p>
              <p><span>Blood Group</span>{{$patient->bloodType}}</p>
          </div>
        </form>
        <p align="right"><a class='form_settings' href="{{route('patientsTab')}}"><input class="submit" type="submit" name="backButton" value="Back" /></a></p>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
