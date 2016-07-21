@extends('layouts.appLayout')

@section('header')
@include('assistant.navBarAssistant')
  <title>Unicare - Finance</title>
@stop

@section('body')
<body>
  <div id="main">
    
    
    <div id="site_content">
      <div id="content">
        <!-- insert the finance content here -->
        <div >
        <h2>Transaction Details</h2>
        <form action="#" method="post">
          <div class="form_settings">
          	<p><span>Transaction Type</span><select id="id" name="name"><option value="1">Income</option><option value="2">Expense</option></select></p>
            <p><span>Value (LKR)</span><input type="text" name="name" value="" /></p>
            <p><span>Description</span><textarea rows="4" cols="50" name="name"></textarea></p>
            <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Add Entry" /></p>
          </div>
        </form>
      </div>
        <h1>&nbsp;</h1>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
@stop
