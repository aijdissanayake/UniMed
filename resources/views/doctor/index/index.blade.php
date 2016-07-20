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
            <div id="site_content">
                <div id="content">
                    <!-- insert the finance content here -->

                    <div id="appointments">Appointments
                        <?php $appointments = $homeData[0]; ?>
                        @if ($appointments)
                        <table style="width:50%; border-spacing:0;">
                        <tr><th width = 40%>Patient</th><th>Appointment Date</th></tr>
                        
                        
                        @foreach ($appointments as $appointment)
                        <tr><td>{{$appointment->getPatient->getUser->name}}</td><td>{{date('Y:m:d',strtotime($appointment->aDate))}}</td></tr>
                        @endforeach
                        </table>
                        @else <div>You currently have no appointments.</div>
                        @endif
                    </div>
<!--                    <div id="inventory">Inventory Status
                        <?php $inventory = $homeData[1]; ?>
                        @if ($inventory)
                        <table style="width:50%; border-spacing:0;">
                        <tr><th width = 40%>Inventory Item</th><th>Current Stock</th></tr>
                        
                        @foreach ($inventory as $inventoryItem)
                        <tr><td>{{$inventoryItem->itemName}}</td><td>{{$inventoryItem->currStock}}</td></tr>
                        @endforeach
                        </table>
                        @else <div>You have no items in your inventory.</div>
                        @endif
                    </div>-->
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
