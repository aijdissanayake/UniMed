<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Manage doctors</title>

        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <script src="/js/user_check.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">
            <div class="row top-row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-title  red lighten-2 white-text"><strong>Doctors - Summary</strong></div>
                        <div class="card-content">
                            
                            <table>
                                <tr><td>No. of Doctors</td><td>{{$data[0]}}</td></tr>
                                <tr><td>No. of Assistant Doctors</td><td>{{$data[1]}}</td></tr>
                                <tr><td>No. of Active Doctors</td><td>{{$data[2]}}</td></tr>
                                <tr><td>No. of Active Assistant Doctors</td><td>{{$data[3]}}</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-title  red lighten-2 white-text"><strong>Doctors</strong></div>
                        <div class="card-content">
                            
                            <table class="responsive-table">
                                <thead>
                                  <tr>
                                      <th data-field="id">Name</th>
                                      <th data-field="name">Reg. No.</th>
                                      <th >Role</th>
                                      <th data-field="date">created</th>
                                  </tr>
                                </thead>
                                 @foreach ($doctors as $doctor)
                                    <tr><td> {{ $doctor->doctorName}}</td>
                                        <td>{{ $doctor->RegNo}}</td>
                                        <td>{{$doctor->getUser->role}}</td>
                                        <td>{{ $doctor->created_at}}</td>
                                        <td>
                                            @if( $doctor->getUser->active ==1)
                                                @if($data[4]==$doctor->user_id)
                                                    <a class="waves-effect waves-teal btn-flat disabled right" >Deactivate</a>
                                                @else
                                                    <a class="waves-effect waves-teal btn-flat right" href="{{route('deactivateDoctor',['id'=>$doctor->user_id])}}">Deactivate</a>
                                                @endif
                                                
                                            @else
                                                <a class="waves-effect waves-teal btn-flat right" href="{{route('activateDoctor',['id'=>$doctor->user_id])}}">Activate</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                
                                
                            </table>
                        </div>
                    </div>
                </div>
                    
                </div>


                <div class="fixed-action-btn">
                <a class="btn-floating btn-large red">
                  <i class="large material-icons">add</i>
                </a>
                <ul>
                  <li><a class="btn-floating red"><i class="material-icons">recent_actors</i></a></li>
                  <li><a class="btn-floating yellow darken-1 tooltipped" href="{{route('addNewDoctor')}}" data-position="left" data-delay="30" data-tooltip="Add new doctor"><i class="material-icons">perm_identity</i></a></li>
                  
                </ul>
              </div>
                
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('.tooltipped').tooltip({delay: 50});
                });

            </script>

            
        </div>


    </body>

   
</html>
