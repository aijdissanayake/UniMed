<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.navBarDoctor')
        <title>Unicare - Home</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
        <link rel="stylesheet" type="text/css" href="/style/style.css" />
    </head>
    
    
    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <h1>Unicare Medical</h1>
                    <div class="slogan"><img src="/style/logo.png" /></div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <!-- put class="current" in the li tag for the selected finance - to highlight which finance you're on -->
                        <li class="current"><a href="{{route('homeTab')}}">Home</a></li>
                        <li><a href="{{route('patientsTab')}}">Patients</a></li>
                        <li><a href="{{route('financeTab')}}">Finance</a></li>
                        <li><a href="{{route('inventoryTab')}}">Inventory</a></li>
                        <li><a href="{{route('labTab')}}">Lab</a></li>
                    </ul>
                </div>
            </div>
            <div id="site_content">
                <div id="content">
                    <!-- insert the finance content here -->

                    <div id="appointments">Appointments
                        <table style="width:50%; border-spacing:0;">
                        <tr><th width = 40%>Patient</th><th>Appointment Date</th></tr>
                        <?php $appointments = $homeData[0]; ?>
                        @foreach ($appointments as $appointment)
                        <tr><td>{{$appointment->getPatient->getUser->name}}</td><td>{{$appointment->aDate}}</td></tr>
                        @endforeach
                        </table>
                    </div>
                    <div id="inventory">Inventory Status
                        <table style="width:50%; border-spacing:0;">
                        <tr><th width = 40%>Inventory Item</th><th>Current Stock</th></tr>
                        <?php $inventory = $homeData[1]; ?>
                        @foreach ($inventory as $inventoryItem)
                        <tr><td>{{$inventoryItem->itemName}}</td><td>{{$inventoryItem->currStock}}</td></tr>
                        @endforeach
                        </table>
                    </div>
                    <p></p>
                    <p></p>
                    <!--<div id="clarification">Clarification Requests
                        <ol class="list">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ol> 
                    </div> -->

                    <p></p>

                </div>
            </div>
            <div id="footer">
                <p>&nbsp;</p>
            </div>
        </div>
    </body>
</html>
