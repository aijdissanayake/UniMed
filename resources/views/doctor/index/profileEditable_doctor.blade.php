<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Doctor's Profile Editor</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
        <link rel="stylesheet" type="text/css" href="/style/style2.css" />
    </head>

    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <h1>Unicare Medical</h1>
                    <div class="slogan"></div>
                </div>
                <div id="heading"><h2>Doctor's Profile</h2></div>
            </div>
            <div id="site_content">
                <div id="content">
                    <h2>Personal Information</h2>
                    <form action="#" method="post">
                        <div class="form_settings">
                            <table style="width:70%; border-spacing:0;">
                                <tr><td>First Name</td><td><input type="text" name="firstName" placeholder="First name here" value="" /></td></tr>
                                <tr><td>Last Name</td><td><input type="text" name="lastName" placeholder="Last name here" value="" /></td></tr>
                                <tr><td>Registered No.</td><td><input type="number" min="0" max="100000" name="regNo" placeholder="Reg no. here" value="" /></td></tr>
                            </table>
                            <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Update" /></p>

                        </div>
                    </form>
                    <h2>Change Password</h2>
                    <form action="#" method="post">
                        <div class="form_settings">
                            <p><span>Current Password</span><input type="text" name="currPW" value="" placeholder="Enter current password" /></p>
                            <p><span>New Password</span><input type="text" name="newPW" value="" placeholder="Enter new password" /></p>
                            <p align = "right" style="padding-top: 15px">
                                <input class="submit" type="submit" name="submitButton" value="Change Password" />
                            </p>
                        </div>
                    </form>
                    <p align = "left" style="padding-top: 15px">
                        <a class="form_settings" href="{{route('homeTab')}}"><input class="submit" type="submit" name="backButton" value="Back" /></a>
                    </p>

                </div>
            </div>
            <div id="footer">
                <p>&nbsp;</p>
            </div>
        </div>
    </body>
</html>
