<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
  <title>Unicare - Assistant Profile</title>
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
                    <div class="card-title green accent-4 white-text"><i class="material-icons">person_pin</i> Assistant's Profile - Personal Information</div>
                        <div class="card-content green-text text-darken-4">
                          <table class="highlight bordered">
                            <form action="#" method="post">
                              <tr><td>Name</td><td>{{$assistant->firstName . " " . $assistant->lastName}}</td></tr>
                              <tr><td>NIC</td><td>{{$assistant->NIC}}</td></tr>
                              <tr><td>Contact No.</td><td>{{$assistant->telephoneNo}}</td></tr>
                            </form>
                          </table>  
                          <div class="section"> <a class="waves-effect waves-light green accent-4 btn" href="{{route('viewEditAssistant',['id'=>$assistant->id])}}">Edit</a> </div>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</body>
</html>

