<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Settings</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <script type="text/javascript" src="/js\doc.js"></script>
        <link rel="stylesheet" type="text/css" href="\style/docStyle.css"></style>
</head>


<body class="grey lighten-4">
    <div class="container">
        <div class="row" style="height:auto; display: flex">
            <div class="col s12 m6" style="height:auto">
                <div class="card white black-text" style="height:100%; margin-bottom:1%" >
                    <div class="card-title red white-text"><span style="padding:0%;">Sessions</span></div>
                    <div class="card-title"> Add Sessions </div>
                    <div class="card-content">
                        <div>
                            <form action="{{route('addSession')}}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col s5" >
                                        <span class="black-text" for="startTime" style="float:left">Start: </span>
                                        <input id="startTime" class="timepicker" type="time" name="startTime" value="07:00:00"  required>
                                    </div>
                                    <div class="col s5 offset-s1" >
                                        <span class="black-text" for="endTime">End: </span><br>
                                        <input id="endTime" class="timepicker" type="time" name="endTime" value="08:00:00" required>
                                    </div>
                                </div>
                                <!-- <div class="section">
                                    <input type="checkbox" name="availableNow" id="availableNow">
                                    <label for="availableNow">Make the Session Available from Now</label>
                                </div> -->
                                
                                <div class="section">
                                    <input class="waves-effect waves-light btn red" type="submit" value="Add Session" style="float:right">
                                </div>
                            </form>                               
                        </div>                            
                    </div>
                    <br>
                    <div class="card-title"> Available Sessions </div>
                        <div class="row" id="sessionsDisplay" style="padding: 0% 10% 5% 10%">
                                    <table class = "striped">
                                        @foreach (\App\session::where('available',TRUE)->get() as $avbSession)
                                        <tr>
                                            <td>
                                            <label class="black-text" for="{{$avbSession->id}}"> {{$avbSession->time_Period}} </label>
                                            </td>
                                            <td>
                                            <a href="{{route('deleteSession',['id' => $avbSession->id])}}"><span> Delete </span></a>
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </table>                                    
                        </div>
                                
                </div>
            </div>

            <div class="col s12 m6" style="height:auto">
                <div class="card white black-text" style="height:100%; margin-bottom:1%" >
                    <div class="card-title  light-blue darken-4 white-text"><span style="padding:0%;">Unavailable Periods</span></div>
                    <div class="card-title">Mark Unavailable</div>
                    <div class="card-content">
                        <div>
                            <form action="{{route('unavailablePeriod')}}" method="post" id="unavForm">                      
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col s2 offset-s1" >
                                        <span class="black-text" for="startDate" style="float:left">From: </span>
                                    </div>
                                    <div class="col s5" >
                                        <input id="startDate" class="date" type="date" name="startDate" value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s2 offset-s1" >
                                        <span class="black-text" for="endDate" style="float:left">To: </span>
                                    </div>
                                    <div class="col s5" >
                                        <input id="endDate" class="date" type="date" name="endDate" value="" min="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="radio" name="dayType" id="radio1" value="holiday" checked/>
                                    <label for="radio1" class="black-text" > Mark as a vaccation </label> <br/>
                                    <input type="radio" name="dayType" value="halfday" id="radio2" /> 
                                    <label for="radio2" class="black-text" > Make sessions unavailable</label>
                                </div>
                                <div class="row" id="sessions" style="padding: 10%">
                                    
                                    @foreach (\App\session::where('available',TRUE)->get() as $avbSession)
                                        <input type="checkbox" name="{{$avbSession->id}}" id="{{$avbSession->id}}">
                                        <label class="black-text" for="{{$avbSession->id}}"> {{$avbSession->time_Period}} </label>
                                        <br>
                                    @endforeach                                     
                                </div>
                                <div class="row">
                                    <div class="col s2 offset-s1" >
                                        <span class="black-text" for="endDate" style="float:left">Message:</span>
                                    </div>
                                    <div class="col s7 offset-s1" rows="5" cols="100" >
                                        <textarea id="message" name="message"></textarea> 
                                    </div>
                                </div>

                                    <input class="waves-effect waves-light btn light-blue darken-4" type="submit" value="Mark Unavailable" style="float:right">

                            </form>
                        </div><br><br>

                    </div>
                    <div class="card-title">Marked Periods</div>
                    <div class="card-content">
                        <ul class="collapsible striped" data-collapsible="accordion">
                        @foreach (\App\unavailablePeriod::where('expired',FALSE)->get() as $unavPeriod)
                            <li>

                            @if($unavPeriod->holiday)
                            <div class="collapsible-header red">
                            {{$unavPeriod->startDate}} - {{$unavPeriod->endDate}} <a href="{{route('deleteUnavPeriod',['id' => $unavPeriod->id])}}"><span style="float: right;">  Delete </span></a>
                            </div>
                            <div class="collapsible-body">
                            <ul style="margin: 5%">
                            <b>Full Day Unavailable</b>
                            <li>{{$unavPeriod->message}}</li>
                            </ul>
                            </div>

                            @else
                            <div class="collapsible-header">
                            {{$unavPeriod->startDate}} - {{$unavPeriod->endDate}} <a href="{{route('deleteUnavPeriod',['id' => $unavPeriod->id])}}"><span style="float: right;">  Delete </span></a>
                            </div>
                            <div class="collapsible-body">
                            <b style="margin: 5%">Unavailable Sessions</b>
                            <ul style="margin: 5%">
                            @foreach($unavPeriod->sessions as $session)
                            <li>{{$session->time_Period}}</li>
                            @endforeach
                            </ul>
                            </div>
                            @endif

                            </li>
                        @endforeach
                        </ul>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>