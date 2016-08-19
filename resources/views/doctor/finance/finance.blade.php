<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
  <title>Unicare - Finance</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

</head>

<body>
  <div class="container">

    <div class="row">
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
          <tr><th style="width:1%">No.</th><th style="width:12%">Date</th><th>Income Description</th><th style="width:20%">Value (LKR)</th></tr>
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
          <tr><th style="width:1%">No.</th><th style="width:12%">Date</th><th>Expense Description</th><th style="width:20%">Value (LKR)</th></tr>
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
          <tr><th style="width:40%">Description</th><th >Value (LKR)</th></tr>
          <tr><td>Income</td><td></td></tr>
          <tr><td>Less: Expenses</td><td></td></tr>
          <tr><td>Gross Profit</td><td></td></tr>
        </table>
        <form action="#" method="post">
        <h2>Financial Summary of a given Time Period</h2>
        <div class="form_settings">
        <p><span>From</span><input type="date" id="datepicker"></p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
				});
			</script>
			<p><span>To</span><input type="date" id="datepicker"></p>
			<script>
				$(function() {
				$( "#datepicker" ).datepicker();
				});
			</script>
            <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="newTransaction" value="Show Transaction Summary" /></p>
            </div>
         </form>
         <h2>Add a new Assistant</h2>
         <form action="#" method="post">
          <div class="form_settings">
          	<p><span>First Name</span><input type="text" name="name" value="" /></p>
            <p><span>Last Name</span><input type="text" name="name" value="" /></p>
            <p><span>Birth Year</span><input type="text" name="name" value="" /></p>
            <p><span>Telephone No.</span><input type="text" name="name" value="" /></p>
            <p><span>Home Addrress</span><input type="text" name="name" value="" /></p>
			<p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Add New Assistant" /></p>
          </div>
        </form>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
