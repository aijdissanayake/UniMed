@extends('layouts.appLayout')

@section('header')
@include('assistant.navBarAssistant')
  <title>Unicare - Home</title>
@stop

@section('body')
<body>
  <div id="main">
    
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
