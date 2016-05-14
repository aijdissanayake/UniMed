<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - Finance</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
  <!--  jQuery -->
<script type="text/javascript" src="style/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already used Bootstrap -->
<link rel="stylesheet" href="style/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="style/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="style/bootstrap-datepicker3.css"/>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Unicare Medical</h1>
        <div class="slogan"><img src="style/logo.png" /></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected finance - to highlight which finance you're on -->
          <li><a href="index.html">Home</a></li>
          <li><a href="patients.html">Patients</a></li>
          <li class="current"><a href="finance.html">Finance</a></li>
          <li><a href="inventory.html">Inventory</a></li>
          <li><a href="lab.html">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="financialContent">
        <!-- insert the finance content here -->
        <h2>New Transaction Entry</h2>
        
        <form action="#" method="post">
          <div class="form_settings">
          	<p><span>Transaction Type</span><select id="id" name="name"><option value="1">Income</option><option value="2">Expense</option></select></p>
            <p><span>Value (LKR)</span><input type="text" name="name" value="" /></p>
            <p><span>Description</span><textarea rows="4" cols="50" name="name"></textarea></p>
			<p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Add Transaction Entry" /></p>
          </div>
        </form>
        <h2>Finance Summary of Last 10 Trasactions</h2>
        <table style="width:100%; border-spacing:0;">
          <tr><th "width = 1%">No.</th><th "width = 12%">Date</th><th>Income Description</th><th "width = 20%">Value (LKR)</th></tr>
          <tr><td>1)</td><td></td><td></td><td></td></tr>
          <tr><td>2)</td><td></td><td></td><td></td></tr>
          <tr><td>3)</td><td></td><td></td><td></td></tr>
          <tr><td>4)</td><td></td><td></td><td></td></tr>
          <tr><td>5)</td><td></td><td></td><td></td></tr>
          <tr><td>6)</td><td></td><td></td><td></td></tr>
          <tr><td>7)</td><td></td><td></td><td></td></tr>
          <tr><td>8)</td><td></td><td></td><td></td></tr>
          <tr><td>9)</td><td></td><td></td><td></td></tr>
          <tr><td>10)</td><td></td><td></td><td></td></tr>
        </table>
        <table style="width:100%; border-spacing:0;">
          <tr><th "width = 1%">No.</th><th "width = 12%">Date</th><th>Expense Description</th><th "width = 20%">Value (LKR)</th></tr>
          <tr><td>1)</td><td></td><td></td><td></td></tr>
          <tr><td>2)</td><td></td><td></td><td></td></tr>
          <tr><td>3)</td><td></td><td></td><td></td></tr>
          <tr><td>4)</td><td></td><td></td><td></td></tr>
          <tr><td>5)</td><td></td><td></td><td></td></tr>
          <tr><td>6)</td><td></td><td></td><td></td></tr>
          <tr><td>7)</td><td></td><td></td><td></td></tr>
          <tr><td>8)</td><td></td><td></td><td></td></tr>
          <tr><td>9)</td><td></td><td></td><td></td></tr>
          <tr><td>10)</td><td></td><td></td><td></td></tr>
        </table>
        <h2>Finance Summary of the Current Month</h2>
        <table style="width:40%; border-spacing:0;">
          <tr><th "width = 40%">Description</th><th >Value (LKR)</th></tr>
          <tr><td>Income</td><td></td></tr>
          <tr><td>Less: Expenses</td><td></td></tr>
          <tr><td>Gross Profit</td><td></td></tr>
        </table>
        <h2>Financial Summary of a given Time Period</h2>
        <div class="bootstrap-iso">
         <div class="container-fluid">
          <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12">
        
            <!-- Form code begins -->
            <form method="post">
              <div class="form-group col-md-11"> <!-- Date input -->
                <label class="control-label" for="date">From</label>
                <input class="form-control" id="fromDate" name="fromDate" placeholder="dd/mm/yyyy" type="text"/>
              </div>
              <div class="form-group"> <!-- Submit button -->
                <!--<button class="btn btn-primary " name="submit" type="submit">Submit</button>-->
              </div>
             </form>
             <!-- Form code ends --> 
        
           </div>
         </div>    
        </div>
        <script>
		 	var date_input=$('input[name="fromDate"]'); //our date input has the name "date"
			var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			var options={
        		format: 'dd/mm/yyyy',
        		container: container,
        		todayHighlight: true,
        		autoclose: true,
    		};
    		date_input.datepicker(options); //initiali110/26/2015 8:20:59 PM ze plugin
		</script>
        </div>
        <div class="bootstrap-iso">
         <div class="container-fluid">
          <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12">
        
            <!-- Form code begins -->
            <form method="post">
              <div class="form-group col-md-11"> <!-- Date input -->
                <label class="control-label" for="date">To</label>
                <input class="form-control" id="toDate" name="toDate" placeholder="dd/mm/yyyy" type="text"/>
              </div>
              <div class="form-group"> <!-- Submit button -->
                <!--<button class="btn btn-primary " name="submit" type="submit">Submit</button>-->
              </div>
             </form>
             <!-- Form code ends --> 
        
           </div>
         </div>    
        </div>
        <script>
		 	var date_input=$('input[name="toDate"]'); //our date input has the name "date"
			var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			var options={
        		format: 'dd/mm/yyyy',
        		container: container,
        		todayHighlight: true,
        		autoclose: true,
    		};
    		date_input.datepicker(options); //initiali110/26/2015 8:20:59 PM ze plugin
		</script>
        </div>
        <div class="form_settings">
        <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="newTransaction" value="Show Transaction Summary" /></p>
        </div>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
