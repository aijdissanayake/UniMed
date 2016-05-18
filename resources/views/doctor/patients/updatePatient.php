<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.navBarDoctor')
  <title>Unicare - Update Patient</title>
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
      <div id="heading"><h2> New Patient Registration</h2></div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>Patient Registration Details</h2>
        <form action="{{route('patientAdded')}}" method="post">
            {{ csrf_field() }}
          <div class="form_settings">
              <p><span>First Name</span><input type="text" name="firstName" value="" required=""/>
              Note: Default password will be set to "unicare101"</p>
              <p><span>Last Name</span><input type="text" name="lastName" value=""  required=""/></p>
              <p><span>Birth Year</span><input type="text" name="birthYear" value=""  required=""/></p>
              <p><span>Gender</span>
                <input class="checkbox" type="radio" name="gender" value="male" checked>Male
                <input class="checkbox" type="radio" name="gender" value="female">Female<br>
            </p>
              <p><span>Email</span><input type="text" name="email" value="" required=""/></p>
              <p><span>Contact No.</span><input type="text" name="contactNo" value="" required="" /></p>
              <p><span>Locale</span><input type="text" name="locale" value=""/></p>
              <p><span>Blood Group</span><input type="text" name="bloodGroup" value=""  required=""/></p>
            <p><span>Remarks</span><textarea rows="4" cols="50" name="remarks"></textarea></p>
            
            <p align = "right" style="padding-top: 15px">
                <input class="submit" type="submit" name="submitButton" value="Register" />
                <input class="submit" type="submit" name="updateButton" value="Update" />
          </div>
        </form>
        <a class='form_settings' href="{{route('patientsTab')}}"><input class="submit" type="submit" name="backButton" value="Back" /></a></p>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
