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
                <form action="{{route('ltNewFbr')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form_settings">

                        <div style="background-color: red; color: white">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>

                        <p><span>Name</span><input type="text" name="name" value="" required="" /></p>
                        <!--<p><span>Referred by</span><input type="text" name="name" value="" /></p>-->

                        <p style="margin-top: 15px" align="center"><strong>Hematological Tests - Specimen: Blood - FULL BLOOD COUNT (FBC)</strong></p>
                        <table style="width:100%; border-spacing:0;">
                            <tr><th width = 20%>Test</th><th>Result</th><th>Reference Range</th></tr>
                            <tr><td>Total Leucocytes Count (WBC)</td><td><input type="number" min="0" max="25" step ="0.1" name="leucocytesCount" placeholder="Enter value here" value="{{old('leucocytesCount')}}" /></td><td>4.1 - 10.1</td></tr>
                            <tr><td>Neutrophils</td><td><input type="number" min="0" max="20" step ="0.1" name="lcNeutrophils" placeholder="Enter value here" value="{{old('lcNeutrophils')}}" /></td><td>2.0 - 10.0</td></tr>
                            <tr><td>Lymphocytes</td><td><input type="number" min="0" max="15" step ="0.1" name="lcLymphocytes" placeholder="Enter value here" value="{{old('lcLymphocytes')}}" /></td><td>1.0 - 3.0</td></tr>
                            <tr><td>Eosinophils</td><td><input type="number" min="0" max="15" step ="0.1" name="lcEosinophils" placeholder="Enter value here" value="{{old('lcEosinophils')}}" /></td><td>0.2 - 1.0</td></tr>
                            <tr><td>Monocytes</td><td><input type="number" min="0" max="5" step ="0.1" name="lcMonocytes" placeholder="Enter value here" value="{{old('lcMonocytes')}}" /></td><td>0.0 - 0.5</td></tr>
                            <tr><td>Basophils</td><td><input type="number" min="0" max='1' step ="0.01" name="lcBasophils" placeholder="Enter value here" value="{{old('lcBasophils')}}" /></td><td>0.0 - 0.1</td></tr>
                            <tr><td>Differential Count (DC)</td><td></td><td></td></tr>
                            <tr><td>Neutrophils</td><td><input type="number" min="0" max='200' step ="0.1" name="dcNeutrophils" placeholder="Enter value here" value="{{old('dcNeutrophils')}}" /></td><td>41.0 - 73.0</td></tr>
                            <tr><td>Lymphocytes</td><td><input type="number" min="0" max="200" step ="0.1" name="dcLymphocytes" placeholder="Enter value here" value="{{old('dcLymphocytes')}}" /></td><td>20.0 - 44.0</td></tr>
                            <tr><td>Eosinophils</td><td><input type="number" min="0" max="10" step ="0.1" name="dcEosinophils" placeholder="Enter value here" value="{{old('dcEosinophils')}}" /></td><td>1.0 - 4.0</td></tr>
                            <tr><td>Monocytes</td><td><input type="number" min="0" step ="0.1" max="10" name="dcMonocytes" placeholder="Enter value here" value="{{old('dcMonocytes')}}" /></td><td>1.0 - 3.0</td></tr>
                            <tr><td>Basophils</td><td><input type="number" min="0" step ="0.1" max="5" name="dcBasophils" placeholder="Enter value here" value="{{old('dcBasophils')}}" /></td><td>0.0 - 1.0</td></tr>
                            <tr><td>Haemoglobin (HB)</td><td><input type="number" min="0" max="100" step ="0.1" name="hb" placeholder="Enter value here" value="{{old('hb')}}" /></td><td>11.0 - 17.0</td></tr>
                            <tr><td>Haematocrit (HCT)</td><td><input type="number" min="0" max="150" step ="0.1" name="hct" placeholder="Enter value here" value="{{old('hct')}}" /></td><td>33.0 - 48.0</td></tr>
                            <tr><td>Red Blood Cells Count (RBC)</td><td><input type="number" min="0" max="10" step ="0.1" name="rbc" placeholder="Enter value here" value="{{old('rbc')}}" /></td><td>3.50 - 5.50</td></tr>
                            <tr><td>MCH</td><td><input type="number" min="0" max="100" step ="0.1" name="mch" placeholder="Enter value here" value="{{old('mch')}}" /></td><td>26.0 - 32.0</td></tr>
                            <tr><td>MCV</td><td><input type="number" min="0" max="200" step ="0.1" name="mcv" placeholder="Enter value here" value="{{old('mcv')}}" /></td><td>80.0 - 99.0</td></tr>
                            <tr><td>MCHC</td><td><input type="number" min="0" max="100" step ="0.1" name="mchc" placeholder="Enter value here" value="{{old('mchc')}}" /></td><td>32.0 - 36.0</td></tr>
                            <tr><td>RDW</td><td><input type="number" min="0" step ="0.1" max="50" name="rdw" placeholder="Enter value here" value="{{old('rdw')}}" /></td><td>11.0 - 16.0</td></tr>
                            <tr><td>Platelet Count</td><td><input type="number" min="0" max="1000" step ="1" name="plateletCount" placeholder="Enter value here" value="{{old('plateletCount')}}" /></td><td>150 - 450</td></tr>
                        </table>

                        <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Submit Report" /></p>
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
