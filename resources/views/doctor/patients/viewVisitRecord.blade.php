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
          <a href="{{route('viewPatient', [$VRec->getPatient->id])}}">Patient Name:  {{$VRec->getPatient->getUser->name}}</a>
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
      <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
          <a class="btn-floating btn-large waves-effect waves-circle red" data-position="left" data-delay="15">
            <i class="large material-icons">mode_edit</i>
          </a>
          <ul>
            <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="25" data-tooltip="New Patient" href="{{route('addPatient')}}"><i class="material-icons">person_add</i></a></li>
            <li><a class="btn-floating yellow tooltipped" data-position="left" data-delay="25" data-tooltip="New Visit Record" href="{{route('newVisitRecord')}}"><i class="material-icons">note_add</i></a></li>
          </ul>
        </div>
    </div>
  </div>
</body>
</html>
