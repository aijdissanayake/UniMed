@extends('layouts.appLayout')

@section('header')
@include('labTech.nav_bar_labTech')
<title>Unicare - LabTech Home</title>
@stop

@section('body')
<body>
    <div id="main">
        <div id="site_content">
            <div id="content">
                <h2>New Lab Report Submission</h2>
                <div class="form_settings">
                    <form action="{{route('ltNewRep')}}" method='get'>
                        {{ csrf_field() }}
                        <span>Choose a report to submit</span>
                        <select id="id" name="reportType">
                            <option value=1>Full Blood Report</option>
                        </select>
                        <input class="submit" type="submit"
                               name="newReport" value="Enter Details" />
                    </form>
                </div>
                <p><h2>Submitted Lab Reports</h2></p>

                <h1>&nbsp;</h1>
            </div>
        </div>
        <div id="footer">
            <p>&nbsp;</p>
        </div>
    </div>
</body>
@stop