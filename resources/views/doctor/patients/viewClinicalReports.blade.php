<!DOCTYPE HTML>
<html>

<head>
  @include('doctor.nav_bar_doc')
  <title>Unicare - All Visit Records</title>
</head>
<!-- This is a stub. Needs to be built. -->
<body class="grey lighten-4">
  <div class="container">
    <div class="row top-row">
      <div class="card">
        <div class="card-title red lighten-2 white-text">
          {{$Name}} - All Visit Records
        </div>
        <div class="card-content">
          <p>There are {{$Count}} records.</p>
          <ul class="collapsible popout" data-collapsible="accordion">
            @foreach ($VRecs as $VRec)
            <li>
              <div class="collapsible-header"><i class="material-icons">library_books</i>{{$VRec->created_at}}</div>
              <div class="collapsible-body">
                <div class="card-content">
                  <table>
                    <tr>
                      <td>Complaints & Problems</td>
                      <td>{{$VRec->complaints}}</td>
                    </tr>
                    <tr>
                      <td>Diagnosis</td>
                      <td>{{$VRec->diagnosis}}</td>
                    </tr>
                    <tr>
                      <td>Prescribed Drugs</td>
                      <td>{{$VRec->prescDrugs}}</td>
                    </tr>
                    <tr>
                      <td>Remarks</td>
                      <td>{{$VRec->remarks}}</td>
                    </tr>
                  </table>
                  <a href="{{route('viewVisitRecord',[$VRec->id])}}" class="btn waves-effect waves-ripple" target="_blank">View</a>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
          {!! (new Landish\Pagination\Materialize($VRecs))->render() !!}
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
