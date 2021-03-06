<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <!--end of Nav bars-->
        <title>Patients</title>

    </head>

    <body class="grey lighten-4">
        <div class="container">

            <div class="row top-row">
                <div class="col s12">
                    <div class="row">
                        <!--Search bar-->
                        <div id="searchBar">
                            @include('doctor.patients.searchForm')
                        </div>


                        <div class="card light-green white-text hide-on-med-and-up">
                            <div class="card-title">Recent Patient Visits</div>
                            <div class="card-content" style="overflow-x:scroll; width:350px;">

                                @if ($patientVisits)
                                <table style="width:800px; border-spacing:0; word-break: break-all;
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
                            </div>
                            <div class="card light-green white-text hide-on-small-only">
                            <div class="card-title">Recent Patient Visits</div>
                            <div class="card-content">

                                @if ($patientVisits)
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
                                <a class="btn waves-effect green darken-2" href="{{route('viewAllPatients')}}">View All Patients</a>
                            </div>

                        </div>
                    </div>
                </div>
                @if (Auth::user()->role=='doctor')
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
                @endif
            </div>
        </div>
    </body>
</html>
