<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
  <title>Unicare - View Report</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="/style/view_clinical_report_style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="heading"><h2> Clinical Records</h2></div>
    </div>
    <div id="site_content">
      <h2 style="padding:10px 20px 20px 20px">Patient Name:&nbsp;&nbsp;<span style="color:#555">{{$newVRec->getPatient->firstName}} {{$newVRec->getPatient->lastName}}</span></h2>
      <div id="content">

        <h2>Clinical reports</span></h2>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Visit date</span>{{$newVRec->created_at}}</p>
            <p><span>Diagnosis</span>{{$newVRec->diagnosis}}</p>
            <p><span>Prognosis</span>{{$newVRec->prognosis}}</p>
            <p><span>Prescribed Drugs</span>{{$newVRec->prescDrugs}}</p>
            <p><span>Remarks</span>{{$newVRec->remarks}}</p>
            <p><span>Next visit date</span>{{$newVRec->nextVisitDate}}</p>
            
          </div>
        </form>
        <p align = "right" style="padding-top: 15px"><a href="{{route('patientsTab')}}"><input class="submit" type="submit" name="backButton" value="Back" /></a></p>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
