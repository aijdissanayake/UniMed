<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Add new patient</title>

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
                                <tr><td>No. of Doctors</td><td>...</td><td>...</td><td>...</td></tr>
                                <tr><td>No. of Assistant Doctors</td><td>...</td></tr>
                                <tr><td>...............</td><td>...</td></tr>
                                <tr><td>................</td><td>...</td></tr>
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
                                      <th data-field="price">created</th>
                                  </tr>
                                </thead>
                                 @foreach ($doctors as $doctor)
                                    <tr><td> {{ $doctor->doctorName}}</td><td>{{ $doctor->RegNo}}</td><td>{{ $doctor->created_at}}</td>
                                        <td>
                                            @if( $doctor->getUser->active ==1)
                                                <a class="waves-effect waves-light btn right">Deactivate</a>
                                            @else
                                                <a class="waves-effect waves-light btn">Activate</a>
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
                  <li><a class="btn-floating yellow darken-1"><i class="material-icons">perm_identity</i></a></li>
                  
                </ul>
              </div>
                
            </div>

            
        </div>


    </body>

   
</html>
