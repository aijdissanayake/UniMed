@extends('layouts.appLayout')

@section('header')
@include('assistant.navBarAssistant')
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
          <!-- put class="current" in the li tag for the selected finance - to highlight which finance you're on -->
          <li><a href="{{route('ast')}}">Home</a></li>
          <li><a href="{{route('astFinance')}}">Finance</a></li>
          <li><a href="{{route('astInventory')}}">Inventory</a></li>
          <li class='current'><a href="{{route('astLab')}}">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <!-- insert the finance content here -->
        
        <p></p>
        
        <div id="searchReport">
        <h2>Search Lab Reports</h2>
        <p></p>
        <form action="#" method="post" >
         <span ><b>Patient's Name</b></span><span> </span><input type="text" name="name" value="" /><input class="submit" type="submit" name="searchButton" value="Search" style="float:none" />
        </form>
        </div>
        
        <div class="Lab_divsetting">
        	<h2>Recent Lab Reports</h2>
            <table style="width:100%; border-spacing:0;">
              <tr><th width = "40%">Patient</th><th>Report type </th></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
            </table>
        </div>
        
        <div class="Lab_divsetting">
            <table style="width:100%; border-spacing:0;">
              <tr><th width = "40%">Date</th><th>Report type</th></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>
            </table>
        </div>
    
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
@stop
