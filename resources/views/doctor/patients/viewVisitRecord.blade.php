<!DOCTYPE HTML>
<html>

<head>
  @include('doctor.nav_bar_doc')
  <title>Unicare - View Visit Record</title>
</head>

<body class="grey lighten-4">
  <div class="container">
  <div class="row top-row">
    <div class="card">
    <div class="card-title">
      Patient Name:  {{$VRec->getPatient->getUser->name}}</span></h2>
    </div>
      <div class="card-content">
            <p><span>Visit date</span>{{$VRec->created_at}}</p>
            <p><span>Diagnosis</span>{{$VRec->diagnosis}}</p>
            <p><span>Prognosis</span>{{$VRec->prognosis}}</p>
            <p><span>Prescribed Drugs</span>{{$VRec->prescDrugs}}</p>
            <p><span>Remarks</span>{{$VRec->remarks}}</p>
            <p><span>Next visit date</span>{{$VRec->nextVisitDate}}</p>
          <p align = "right" style="padding-top: 15px"><a href="{{route('patientsTab')}}"><input class="submit" type="submit" name="backButton" value="Back" /></a></p>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
