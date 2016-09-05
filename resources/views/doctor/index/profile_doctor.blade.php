<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
  <title>Unicare - Doctor's Profile</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

</head>

<body class="grey lighten-4">
  <div class="container">
    <div class="row top-row">
        <div class="row">
            <div class="col s12 m10 offset-m1 l10 offset-l1">
                <div class="card">
                    <div class="card-title green accent-4 white-text"><i class="material-icons">person_pin</i> Doctor's Profile - Personal Information</div>
                        <div class="card-content green-text text-darken-4">
                          <table class="highlight bordered">
                            <form action="#" method="post">
                              <tr><td>Name</td><td>{{$doctor->doctorName}}</td></tr>
                              <tr><td>Registered No.</td><td>{{$doctor->RegNo}}</td></tr>
                              <tr><td>Email</td><td>{{$doctor->getUser->email}}</td></tr>
                            </form>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</body>
</html>
