<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
    <title>Unicare - View Patient</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
</head>

<body class="grey lighten-4">
    <div class="container">
        <div class="row top-row">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-title blue darken-2 white-text">Patient Details</div>
                        <div class="card-content">
                            <table>
                                <tr><td><strong>Name</strong></td><td>{{$patient->firstName}} {{$patient->lastName}}</td></tr>
                                <tr><td><strong>Birth Year</strong></td><td>{{$patient->birthYear}}</td></tr>
                                <tr><td><strong>Gender</strong></td><td>
                                    @if ($patient->gender==0)
                                    Female
                                    @else
                                    Male
                                    @endif</td></tr>
                                    <tr><td><strong>Blood Group</strong></td><td>{{$patient->bloodType}}</td></tr>
                                    <tr><td><strong>Height</strong></td><td>{{$patient->height}} cm</td></tr>
                                    <tr><td><strong>Weight</strong></td><td>@if ($patient->weight ==0) Not set. Add visit record. @else ($patient->weight ==0) kg @endif</td></tr>
                                    <tr><td><strong>BMI</strong></td><td>@if ($patient->bmi==0) Not set. Add visit record. @else {{$patient->bmi}} @endif</td></tr>
                                    <tr><td><strong>Email</strong></td><td>{{$patient->getUser->email}}</td></tr>
                                    <tr><td><strong>Contact No.</strong></td><td>{{$patient->telephoneNo}}</td></tr>
                                    <tr><td><strong>Occupation</strong></td><td>{{$patient->occupation}}</td></tr>
                                    <tr><td><strong>Locale</strong></td><td>{{$patient->locale}}</td></tr>
                                    
                                </table>

                                <div class="section">
                                    <a class="btn waves-effect waves-ripple blue darken-1" href="{{route('editPatient',[$patient->id])}}">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-title orange white-text">Recent visits</div>
                            <div class="card-content">
                                <div class="section">

                                    @if (!($visitRecs->isEmpty()))
                                    <ul class="collapsible popout" data-collapsible="accordion">
                                        @foreach ($visitRecs as $VRec)
                                        <li>
                                          <div class="collapsible-header"><i class="material-icons">library_books</i>{{$VRec->created_at}}
                                          </div>
                                          <div class="collapsible-body">
                                            <div class="card-content">
                                              <table>
                                                <tr>
                                                  <td>Complaints & Problems</td>
                                                  <td class="truncate">{{$VRec->complaints}}</td>
                                              </tr>
                                              <tr>
                                                  <td>Diagnosis</td>
                                                  <td class="truncate">{{$VRec->diagnosis}}</td>
                                              </tr>
                                              <tr>
                                                  <td>Prescribed Drugs</td>
                                                  <td class="truncate">{{$VRec->prescDrugs}}</td>
                                              </tr>
                                              <tr>
                                                  <td>Remarks</td>
                                                  <td class="truncate">{{$VRec->remarks}}</td>
                                              </tr>
                                          </table>
                                          <a href="vr/{{$VRec->id}}" class="btn waves-effect waves-ripple" target="_blank">View</a>
                                      </div>
                                  </div>
                              </li>

                              @endforeach
                          </ul>
                          @else
                          <p>There are no records yet.</p>
                          @endif


                      </div>
                      <a class="btn waves-effect waves-ripple orange accent-4" href="{{route('createPatientVisitRecord',[$patient->id])}}">Add new record</a>
                      @if (!($visitRecs->isEmpty()))
                      <a class="btn waves-effect waves-ripple orange accent-4" href="{{route('viewAllVisits',[$patient->id])}}">View All Visits</a>
                      @endif
                  </div>
              </div>
          </div>

          <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large waves-effect waves-circle red" data-position="left" data-delay="15">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="25" data-tooltip="New Patient" href="{{route('addPatient')}}"><i class="material-icons">person_add</i></a></li>
                <li><a class="btn-floating yellow tooltipped" data-position="left" data-delay="25" data-tooltip="New Visit Record" href="{{route('newVisitRecord')}}"><i class="material-icons">note_add</i></a></li>
                <li><a class="btn-floating green tooltipped"  data-position="left" data-delay="25" data-tooltip="View Statistics" href="{{route('stats')}}"><i class="material-icons">info_outline</i></a></li>
            </ul>
        </div>



    </div>
</div>
</body>
</html>
