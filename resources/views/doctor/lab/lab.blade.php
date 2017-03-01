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
            </div>

             <div class="col s12">


                <div>
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
                    


                </div>

            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large red">
                  <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                  <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                  <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                  <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                  <li><a class="btn-floating blue" href="{{route('addNewLabTech')}}"><i class="material-icons">recent_actors</i></a></li>
                </ul>
            </div>

        </div>
    </body>
</html>
