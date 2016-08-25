<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Lab</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />

    </head>

    <body>
        <div class="container">

            <div class="row top-row">
                <div class="col s12">
                    <div class="card red lighten-2 white-text">
                        <div class="card-content">
                            <span class="card-title"><strong>Laboratory - Summary</strong></span>
                            <table>
                                <tr><td>Lab reports in database</td><td>...</td></tr>
                                <tr><td>New lab reports</td><td>...</td></tr>
                                <tr><td>Last report issued</td><td>...</td></tr>
                                <tr><td>Last report owner</td><td>...</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class='form_settings'>
                        <p><h2>Search Lab Reports</h2></p>
                        @include('doctor.lab.searchForm')
                        <!--        <form action="#" method="post" >
                                 <span ><b>Patient's Name</b></span><span> </span>
                                 <input type="text" name="name" value="" /><input class="submit" type="submit" name="searchButton" value="Search" style="float:none" />
                                </form>-->
                    </div>

                    <div class="Lab_divsetting">
                        <p><h2>Recent Lab Reports</h2></p>
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
                    <h2>Add a New Lab Tech</h2>
                    <form action="#" method="post">
                        <div class="form_settings">
                            <p><span>First Name</span><input type="text" name="name" value="" /></p>
                            <p><span>Last Name</span><input type="text" name="name" value="" /></p>
                            <p><span>Birth Year</span><input type="text" name="name" value="" /></p>
                            <p><span>Telephone No.</span><input type="text" name="name" value="" /></p>
                            <p><span>Home Addrress</span><input type="text" name="name" value="" /></p>
                            <p><span>Lab Addrress</span><input type="text" name="name" value="" /></p>
                            <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Add New Lab Technician" /></p>
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
