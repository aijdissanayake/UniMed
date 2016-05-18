<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.navBarDoctor')
        <title>Unicare - Patients</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
        <link rel="stylesheet" type="text/css" href="/style/style.css" />
    </head>

    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <h1>Unicare Medical</h1>
                    <div class="slogan"><img src="/style/logo.png" /></div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                        <li><a href="{{route('homeTab')}}">Home</a></li>
                        <li class="current"><a href="{{route('patientsTab')}}">Patients</a></li>
                        <li><a href="{{route('financeTab')}}">Finance</a></li>
                        <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
                        <li><a href="{{route('labTab')}}">Lab</a></li>
                    </ul>
                </div>
            </div>
            <div id="site_content">
                <div id="content" >

                    <!--<form action="{{route('searchPatients')}}" method="post">-->
                    <div class="form_settings">
                        <!--		<p><span>Search patient by</span>
                                <select id="id" name="name"><option value="1">First Name</option><option value="2">Last Name</option><option value="2">Telephone No.</option></select>
                                <input type="text" name="name" placeholder="Enter value here" value="" />
                                <input class="submit" type="submit" name="searchButton" value="Search" />
                                </p>-->
                        @include('doctor.patients.searchForm')
                    </div>
                    <!--</form>-->

                    <div><p>


                        <h2>Recent Patient Visits</h2>
                        </p>
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
                        <div>    You have no patient visits to display currently.</div>
                        @endif
                        <p><div class="form_settings">
                            <a href="{{route('addPatient')}}">
                                <input class="submit" type="submit" name="addNewPatient"
                                       value="Add a New Patient" />
                            </a>
                        </div>
                        <div class="form_settings"  >
                            <a href="{{route('stats')}}">
                                <input class="submit" type="submit" name="PatientsStat"
                                       value=" Patient Statistics " />
                            </a></div></p>
                    </div>
                </div>
                <div id="footer">
                    <p>&nbsp;</p>
                </div>
            </div>
    </body>
</html>
