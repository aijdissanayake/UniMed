@extends('layouts.appLayout')

@section('header')
@include('labTech.nav_bar_labTech')
<title>Unicare - Full Blood Report</title>
@stop


@section('body')
<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <h1>Unicare Medical</h1>
            </div>
            <div id="heading"><h2>Full Blood Report Entry</h2></div>
        </div>
        <div id="site_content">
            <div id="content">
                <h2>Report Details</h2>
                <form action="#" method="post">
                    {{ csrf_field() }}
                    <div class="form_settings">
                        <p><span>Name</span><input type="text" name="name" value="" /></p>
                        <!--<p><span>Referred by</span><input type="text" name="name" value="" /></p>-->

                        <p style="margin-top: 15px" align="center"><strong>Hematological Tests - Specimen: Blood - FULL BLOOD COUNT (FBC)</strong></p>
                        <table style="width:100%; border-spacing:0;">
                            <tr><th width = 20%>Test</th><th>Result</th><th>Reference Range</th></tr>
                            <tr><td>Total Leucocytes Count (WBC)</td><td>{{$fullBloodReport->leucocytesCount}}</td><td>4.1 - 10.1</td></tr>
                            <tr><td>Neutrophils</td><td>{{$fullBloodReport->lcNeutrophils}}</td><td>2.0 - 10.0</td></tr>
                            <tr><td>Lymphocytes</td><td>{{$fullBloodReport->lcLymphocytes}}</td><td>1.0 - 3.0</td></tr>
                            <tr><td>Eosinophils</td><td>{{$fullBloodReport->lcEosinophils}}</td><td>0.2 - 1.0</td></tr>
                            <tr><td>Monocytes</td><td>{{$fullBloodReport->lcMonocytes}}</td><td>0.0 - 0.5</td></tr>
                            <tr><td>Basophils</td><td>{{$fullBloodReport->lcBasophils}}</td><td>0.0 - 0.1</td></tr>
                            <tr><td>Differential Count (DC)</td><td></td><td></td></tr>
                            <tr><td>Neutrophils</td><td>{{$fullBloodReport->dcNeutrophils}}</td><td>41.0 - 73.0</td></tr>
                            <tr><td>Lymphocytes</td><td>{{$fullBloodReport->dcLymphocytes}}</td><td>20.0 - 44.0</td></tr>
                            <tr><td>Eosinophils</td><td>{{$fullBloodReport->dcEosinophils}}</td><td>1.0 - 4.0</td></tr>
                            <tr><td>Monocytes</td><td>{{$fullBloodReport->dcMonocytes}}</td><td>1.0 - 3.0</td></tr>
                            <tr><td>Basophils</td><td>{{$fullBloodReport->dcBasophils}}</td><td>0.0 - 1.0</td></tr>
                            <tr><td>Haemoglobin (HB)</td><td>{{$fullBloodReport->hb}}</td><td>11.0 - 17.0</td></tr>
                            <tr><td>Haematocrit (HCT)</td><td>{{$fullBloodReport->hct}}</td><td>33.0 - 48.0</td></tr>
                            <tr><td>Red Blood Cells Count (RBC)</td><td>{{$fullBloodReport->rbc}}</td><td>3.50 - 5.50</td></tr>
                            <tr><td>MCH</td><td>{{$fullBloodReport->mch}}</td><td>26.0 - 32.0</td></tr>
                            <tr><td>MCV</td><td>{{$fullBloodReport->mcv}}</td><td>80.0 - 99.0</td></tr>
                            <tr><td>MCHC</td><td>{{$fullBloodReport->mchc}}</td><td>32.0 - 36.0</td></tr>
                            <tr><td>RDW</td><td>{{$fullBloodReport->rdw}}</td><td>11.0 - 16.0</td></tr>
                            <tr><td>Platelet Count</td><td>{{$fullBloodReport->plateletCount}}</td><td>150 - 450</td></tr>
                        </table>

                        <p align = "right" style="padding-top: 15px"><a href="" class="submit">Download Copy</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div id="footer">
            <p>&nbsp;</p>
        </div>
    </div>
</body>
@stop
