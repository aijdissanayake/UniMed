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


<body class="blue lighten-5">
    <div class="container">
        <div class="row" style="height:auto; display: flex">
            <div class="col s12 m6" style="height:auto">
                <div class="card white black-text" style="height:100%; margin-bottom:1%" >
                    <div class="card-title red white-text"><span style="padding:0%;">Add Session</span></div>
                    <div class="card-content">
                        <div>
                            <form action="{{route('addSession')}}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col s5" style="display: flex">
                                        <span class="black-text" for="startTime" style="float:left">Start Time : </span><br>
                                        <input id="startTime" class="timepicker" type="time" name="startTime" value="07:00:00" required>
                                    </div>
                                    <div class="col s5 offset-s1" style="display: flex">
                                        <span class="black-text" for="endTime">End Time : </span><br>
                                        <input id="endTime" class="timepicker" type="time" name="endTime" value="08:00:00" required>
                                    </div>
                                </div>
                                <div class="section">
                                    <input type="checkbox" name="availableNow" id="availableNow">
                                    <label for="availableNow">Make the Session Available from Now</label>
                                </div>
                                <div   class="divider"></div>
                                <div class="section">
                                    <input class="waves-effect waves-light btn red" type="submit" value="Add Session" style="float:right">
                                </div>
                            </form>
                        </div>                            
                    </div>


                </div>
            </div>

            <div class="col s12 m6" style="height:auto">
                <div class="card white black-text" style="height:100%; margin-bottom:1%" >
                    <div class="card-title  light-blue darken-4 white-text"><span style="padding:0%;">Mark Unavailable</span></div>
                    <div class="card-content">
                        <div>
                            <form action="{{route('unavailablePeriod')}}" method="post">                      
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
                                    
                                    @foreach (\App\session::where('available',TRUE)->get() as $avbSession)
                                        <input type="checkbox" name="{{$avbSession->id}}" id="{{$avbSession->id}}">
                                        <label class="black-text" for="{{$avbSession->id}}"> {{$avbSession->time_Period}} </label>
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
                                <div class="card-action">
                                    <input class="waves-effect waves-light btn light-blue darken-4" type="submit" value="Mark Unavailable" style="float:right">
                                </div>

                            </form>
                        </div>

                    </div>


                </div>
            </div>

        </div>
        

            <div class="col s12 m4" style="align-self:stretch">
                <div class="card blue-grey darken-2 white-text" style="height:100%">
                    <div class="card-content">
                        <span class="card-title"><strong>Assistants</strong></span>
                        <p>lorem ipsum...</p>
                        <a href="#!" class="waves-effect blue-grey lighten-2 btn">
                            Manage
                        </a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4" style="align-self:stretch">
                <div class="card yellow darken-1 white-text" style="height:100%">
                    <div class="card-content">
                        <span class="card-title"><strong>Lab Assistants</strong></span>
                        <p>lorem ipsum...</p>
                        <a href="#!" class="waves-effect yellow darken-3 btn">
                            Manage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>