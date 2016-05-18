@extends('layouts.appLayout')

@section('header')
@include('labTech.navBarLabTech')
<title>Unicare - LabTech Home</title>
@stop

@section('body')
<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <h1>Unicare Medical</h1>
            </div>
            <div id="menubar">
                <ul id="menu">
                    <li class="current"><a href="{{route('lt')}}">Home</a></li>
                    <li><a href="{{route('ltLab')}}">Lab</a></li>
                </ul>
            </div>
        </div>
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