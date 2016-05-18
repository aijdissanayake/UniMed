@extends('layouts.appLayout')

@section('header')
@include('labTech.navBarLabTech')
  <title>Unicare - Lab</title>
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
          <li><a href="{{route('lt')}}">Home</a></li>          
          <li class="current"><a href="{{route('ltLab')}}">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
		<h2>Your Lab Reports</h2>
		<h2>Lab Report Details</h2>
        <h1>&nbsp;</h1>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
@stop
