@extends('layouts.appLayout')

@section('header')
  <title>Unicare - Home</title>
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
          <li class='current'><a href="{{route('ast')}}">Home</a></li>
          <li><a href="{{route('astFinance')}}">Finance</a></li>
          <li><a href="{{route('astInventory')}}">Inventory</a></li>
          <li><a href="{{route('astLab')}}">Lab</a></li>        </ul>
      </div>
    </div>
    <div id="site_content">
<div id="content">
      <!-- insert the finance content here -->
      
      <h1>&nbsp;</h1>
      <div id="appointments">Appointments
      		<ol class="list">
            	<li></li>
                <li></li>
                <li></li>
            	
            </ol>
      </div>
      <div id="inventory">Inventory Status
      		<ol class="list">
            	<li></li>
                <li></li>
                <li></li>
            	
            </ol>
      </div>
      <p></p>
      <p></p>
      <div id="clarification">Clarification Requests
      	<ol class="list">
            	<li></li>
                <li></li>
                <li></li>
        </ol> 
      </div>
      		
      <p></p>
      
</div>
    </div>
<div id="footer">
    <p>&nbsp;</p>
    </div>
  </div>
</body>
@stop
