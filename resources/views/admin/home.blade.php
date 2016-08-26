<!DOCTYPE HTML>
<html>

    <head>
        @include('admin.nav_bar_admin')
        <title>Unicare - Admin</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    </head>

    <body>
        <div class="container">
            <div class="row" style="padding-top: 3rem">
                <div class="col s12">
                    <div class="card cyan white-text">
                        <div class="card-content">
                            <span class="card-title center-align"><h3>Heading for the page</h3></span>
                        </div>
                    </div>



                </div>
            </div>

        <div class="row">
            <div class="col s12 m6 l6">
                <div class="card red white-text">
                    <div class="card-content">
                        <span class="card-title"><h4>Change Administrator Password</h4></span>
                        <form action="#" method="post">
                            <div class="form_settings">
                                <p><span>Current Password</span><input type="text" name="name" value="" /></p>
                                <p><span>New Password</span><input type="text" name="name" value="" /></p>
                                <p align = "right" style="padding-top: 15px"><input class="submit" type="submit" name="submitButton" value="Change Password" /><a href="patients.html"><input class="submit" type="submit" name="backButton" value="Back" /></a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
