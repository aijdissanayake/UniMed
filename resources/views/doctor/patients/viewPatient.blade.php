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
                                    <tr><td><strong>First Name</strong></td><td>{{$patient->firstName}}</td></tr>
                                    <tr><td><strong>Last Name</strong></td><td>{{$patient->lastName}}</tr>
                                    <tr><td><strong>Birth Year</strong></td><td>{{$patient->birthYear}}</td></tr>
                                    <tr><td><strong>Gender</strong></td><td>
                                            @if ($patient->gender==0)
                                            Female
                                            @else
                                            Male
                                            @endif</td></tr>
                                    <tr><td><strong>Email</strong></td><td>{{$patient->getUser->email}}</td></tr>
                                    <tr><td><strong>Contact No.</strong></td><td>{{$patient->telephoneNo}}</td></tr>
                                    <tr><td><strong>Locale</strong></td><td>{{$patient->locale}}</td></tr>
                                    <tr><td><strong>Blood Group</strong></td><td>{{$patient->bloodType}}</td></tr>
                                </table>

                                <div class="section">
                                    <a class="btn waves-effect waves-ripple blue darken-1" href="{{route('patientsTab')}}">Edit</a>
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
                                    <table>
                                        @foreach ($visitRecs as $visitRec) 
                                        <tr>
                                            <td>{{$visitRec->created_at}}</td>
                                            <td><a href="vr/{{$visitRec->id}}">{{$visitRec->diagnosis}}</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    @else  
                                        <p>There are no records yet.</p>
                                    @endif
                                    
                                    
                                </div>

                                <a class="btn waves-effect waves-ripple orange accent-4" href="{{route('createPatientVisitRecord',[$patient->id])}}">Add new record</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
