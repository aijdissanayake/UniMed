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
      <table>
            <tr>
            <td>Visit date</td>
            <td>{{$VRec->created_at}}</td>
            </tr>
            <tr>
            <td>Complaints & Problems</td>
            <td>{{$VRec->complaints}}</td>
            </tr>
            <tr>
            <td>Investigations</td>
            <td>{{$VRec->investigations}}</td>
            </tr>
            <tr>
            <td>Diagnosis</td>
            <td>{{$VRec->diagnosis}}</td>
            </tr>
            <tr>
            <td>Prognosis</td>
            <td>{{$VRec->prognosis}}</td>
            </tr>
            <tr>
            <td>Prescribed Drugs</td>
            <td>{{$VRec->prescDrugs}}</td>
            </tr>
            <tr>
            <td>Weight</td>
            <td>{{$VRec->weight}} kg</td>
            </tr>
            <tr>
            <td>Remarks</td>
            <td>{{$VRec->remarks}}</td>
            </tr>
            <tr>
            <td>Next visit date</td>
            <td>{{$VRec->nextVisitDate}}</td>
            </tr>
          
          </table>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
