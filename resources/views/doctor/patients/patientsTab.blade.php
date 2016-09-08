<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <!--end of Nav bars-->
        <title>Patients</title>

        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />

    </head>

    <body>
        <div class="container">

            <div class="row top-row">
                <div class="col s12">
                    <div class="row">
                        <!--Search bar-->
                        <div id="searchBar">
                            @include('doctor.patients.searchForm')
                        </div>


                        <div class="card light-green white-text">
                            <div class="card-title">Recent Patient Visits</div>
                            <div class="card-content">

                                @if (!$patientVisits)
                                <table style="width:100%; border-spacing:0; word-break: break-all;
                                       word-wrap:break-word;overflow: hidden; text-overflow: ellipsis;">
                                    <tr>
                                        <th width="5%" style="text-align:center">No.</th>
                                        <th width="10%" style="text-align:center">First Name</th>
                                        <th width="10%" style="text-align:center">Last Name</th>
                                        <th width="25%" style="text-align:center">Diagnosis</th>
                                        <th width="25%" style="text-align:center">Prognosis</th>
                                        <th width="25%" style="text-align:center">Remarks</th></tr>
                                    <div style="display:none">{{$count=0}}</div>

                                    @foreach ($patientVisits as $patientVisit)
                                    <tr style="height: 25px">
                                        <td style="height: 10px">{{$count=$count+1}}</td>
                                        <td style="height: 10px">{{$patientVisit->getPatient->firstName}}</td>
                                        <td style="height: 10px">{{$patientVisit->getPatient->lastName}}</td>
                                        <td style="height: 10px">{{substr($patientVisit->diagnosis,0, 30)}}</td>
                                        <td style="height: 10px">{{substr($patientVisit->prognosis,0,30)}}</td>
                                        <td style="height: 10px">{{substr($patientVisit->remarks,0,30)}}</td>
                                    </tr>
                                    @endforeach


                                </table>
                                @else
                                <div>You have no patient visits to display currently.</div>
                                @endif
                            </div>
                            
                            <div class="row card-content hide-on-med-and-down">
                                <div class="col s8 m3 offset-s2">
                                    <a href="{{route('addPatient')}}" class="waves-effect green darken-2 btn">
                                        Add a New Patient
                                    </a>
                                </div>
                                <div class="col s8 m3 offset-s2">
                                    <a href="{{route('stats')}}" class="waves-effect green darken-2 btn">
                                        Patient Statistics
                                    </a>
                                </div>
                            </div>
                            <div class="card-content hide-on-large-only">
                                <div class="row center-align">
                                    <a href="{{route('addPatient')}}" class="waves-effect green darken-2 btn">
                                        Add a New Patient
                                    </a>
                                </div>
                                <div class="row center-align">
                                    <a href="{{route('stats')}}" class="waves-effect green darken-2 btn">
                                        Patient Statistics
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </body>
</html>
