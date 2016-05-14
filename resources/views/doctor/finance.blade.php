<!DOCTYPE HTML>
<html>

<head>
  <title>Unicare - Finance</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="/patient/style/style.css" />
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
          <li><a href="{{route('homeTab')}}">Home</a></li>
          <li><a href="{{route('patientsTab')}}">Patients</a></li>
          <li class="current"><a href="{{route('financeTab')}}">Finance</a></li>
          <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
          <li><a href="{{route('labTab')}}">Lab</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <!-- insert the finance content here -->
        <h2>Finance Summary of Last 10 Trasactions</h2>
        <table style="width:100%; border-spacing:0;">
          <tr><th width = 1%>No.</th><th width = 12%>Date</th><th>Income Description</th><th width = 20%>Value (LKR)</th></tr>
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
          <tr><th width = 1%>No.</th><th width = 12%>Date</th><th>Expense Description</th><th width = 20%>Value (LKR)</th></tr>
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
          <tr><th width = 40%>Description</th><th >Value (LKR)</th></tr>
          <tr><td>Income</td><td></td></tr>
          <tr><td>Less: Expenses</td><td></td></tr>
          <tr><td>Gross Profit</td><td></td></tr>
        </table>
      </div>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
    </div>
  </div>
</body>
</html>
