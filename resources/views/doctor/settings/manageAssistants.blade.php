<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Manage assistants</title>

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
                        <div class="card-title  red darken-2 white-text"><strong>Assistants</strong></div>
                        <div class="card-content">
                            
                            <table class="responsive-table">
                                <thead>
                                  <tr>
                                      <th data-field="id">Name</th>
                                      <th data-field="name">NIC</th>
                                      <th data-field="date">created</th>
                                  </tr>
                                </thead>
                                 @foreach ($assistants as $assistant)
                                    <tr><td> <a href="{{route('viewAssistantProfile',['id'=>$assistant->id])}}"> {{$assistant->firstName . " " . $assistant->lastName }} </a></td>
                                        <td>{{ $assistant->NIC}}</td>
                                        <td>{{ $assistant->created_at}}</td>
                                        <td>
                                            @if( $assistant->getUser->active ==1)
                                                @if(Auth::user()->id==$assistant->user_id)
                                                    <a class="waves-effect waves-teal btn-flat disabled right" >Deactivate</a>
                                                @else
                                                    <a class="waves-effect waves-teal btn-flat right" href="{{route('userAccountStatus',['id'=>$assistant->user_id])}}">Deactivate</a>
                                                @endif
                                                
                                            @else
                                                <a class="waves-effect waves-teal btn-flat right" href="{{route('userAccountStatus',['id'=>$assistant->user_id])}}">Activate</a>
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
                  <li><a class="btn-floating yellow darken-1 tooltipped" href="{{route('addNewAssistant')}}" data-position="left" data-delay="30" data-tooltip="Add new assistant"><i class="material-icons">perm_identity</i></a></li>
                  
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
