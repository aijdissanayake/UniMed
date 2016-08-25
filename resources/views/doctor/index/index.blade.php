<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <!--end of Nav bars-->
        <title>Unicare - Home</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />

    </head>

    <body>

            <div class="container">

                <div class="row top-row">
                    <div class="col s12 m10 l10 offset-m1 offset-l1">

                        <!--Appointment data-->

                        <div class="card white-text" id="appointments">
                            <div class="card-title yellow darken-2">Upcoming Appointments</div>
                            <div class="card-content black-text grey lighten-5">
                                
                                <?php $appointments = $homeData[0]; ?>
                                @if (count($appointments)!=0)
                                Appointments
                                <table style="width:70%; border-spacing:0; text-align:right ">
                                    <tr><th width = 40%>Patient</th>
                                        <th>Appointment Date</th>
                                        <th>Session</th>
                                        <th>Appointment No. </th>
                                    </tr>


                                    @foreach ($appointments as $appointment)
                                    <tr><td >{{$appointment->getPatient->getUser->name}}</td>
                                        <td align="right">{{date('Y:m:d',strtotime($appointment->aDate))}}</td>
                                        <td align="right">{{$appointment->session}}</td>
                                        <td align="right">{{$appointment->appointmentNo}}</td>
                                    </tr>
                                    @endforeach

                                </table>
                                @if ($homeData[2] > 10)
                                <a href=""> See all Appointments</a>
                                @endif

                                @else
                                <div>There are no pending appointments right now.</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p></p>

        <div id="footer">
            <p>&nbsp;</p>
        </div>
    </body>
</html>
