<!DOCTYPE html>
<!-- saved from url=(0066)file:///D:/Emrys/unimed/resources/views/Patient/Patients.blade.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Unicare - Patients</title>
  <meta name="description" content="website description">
  <meta name="keywords" content="website keywords, website keywords">
  
  <link rel="stylesheet" type="text/css" href="/patient/style/css">
  <link rel="stylesheet" type="text/css" href="/patient/style/css(1)">
  <link rel="stylesheet" type="text/css" href="/patient/style/style.css">
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
          <li><a href="file:///D:/Emrys/unimed/resources/views/Patient/index.html">Home</a></li>
          <li class="current"><a href="file:///D:/Emrys/unimed/resources/views/Patient/patients.html">Patients</a></li>
          <li><a href="file:///D:/Emrys/unimed/resources/views/Patient/finance.html">Finance</a></li>
          <li><a href="file:///D:/Emrys/unimed/resources/views/Patient/inventory.html">Inventory</a></li>
          <li><a href="file:///D:/Emrys/unimed/resources/views/Patient/lab.html">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>Patient Registration/Edit</h2>
        <form action="{{ url('patients/test') }}" method="post">
            {{ csrf_field() }}
          <div class="form_settings">
            <p><span>First Name</span><input type="text" name="firstName" value=""></p>
            <p><span>Last Name</span><input type="text" name="lastName" value=""></p>
            <p><span>Email</span><input type="text" name="email" value=""></p>
            <p><span>Birth Year</span><input type="text" name="birthYear" value=""></p>
            <p><span>Contact No.</span><input type="text" name="contactNo" value=""></p>
            <p><span>Locale</span><input type="text" name="locale" value=""></p>
            <p><span>Blood Group</span><input type="text" name="bloodGroup" value=""></p>
            <p><span>Gender</span>
                <input class="checkbox" type="radio" name="gender" value="male" checked>Male
                <input class="checkbox" type="radio" name="gender" value="female">Female<br>
            </p>
            <p><span>Dropdown list example</span><select id="id" name="name"><option value="1">Example 1</option><option value="2">Example 2</option></select></p>
            <p style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Register"></p>
          </div>
        </form>
        <h2>Registered Patients' Details</h2>
        <table style="width:100%; border-spacing:0;">
          <tbody><tr><th>Item</th><th>Description</th></tr>
          <tr><td>Item 1</td><td>Description of Item 1</td></tr>
          <tr><td>Item 2</td><td>Description of Item 2</td></tr>
          <tr><td>Item 3</td><td>Description of Item 3</td></tr>
          <tr><td>Item 4</td><td>Description of Item 4</td></tr>
        </tbody></table>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>


</body></html>