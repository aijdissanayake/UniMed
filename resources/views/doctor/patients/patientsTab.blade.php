<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <!--end of Nav bars-->
        <title>Unicare - Patients</title>

        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />

    </head>

    <body>
        <div class="container">

            <div class="row top-row">

                <!--Search bar-->

                <div class="col s12 m10 l10 offset-m1 offset-l1">
                    <div id="searchBar">
                        @include('doctor.patients.searchForm')
                    </div>


                    <div class="card light-green white-text">
                        <div class="card-content">
                            <div class="card-title"><h4>Recent Patient Visits</h4></div>
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
                        <div class="card-content">


                            <p></p>
                            <p></p>

                            <a href="{{route('addPatient')}}" class="waves-effect green darken-2 btn">
                                Add a New Patient
                            </a>

                            <a href="{{route('stats')}}" class="waves-effect green darken-2 btn">
                                Patient Statistics
                            </a>

                            <!--                            <div class="form_settings">
                                                            <a href="{{route('addPatient')}}">
                                                                <input class="submit" type="submit" name="addNewPatient"
                                                                       value="Add a New Patient" />
                                                            </a>
                                                        </div>
                                                        <div class="form_settings"  >
                                                            <a href="{{route('stats')}}">
                                                                <input class="submit" type="submit" name="PatientsStat"
                                                                       value=" Patient Statistics " />
                                                            </a>
                                                        </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
