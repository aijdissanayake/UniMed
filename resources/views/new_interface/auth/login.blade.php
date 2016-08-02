<!DOCTYPE html>
<html>
    <head>
        <title>Unicare Medical Centre</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="materialize\css\materialize.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
        <script src="materialize\js\materialize.min.js"></script>             
    </head>
    <body>

        <div class="container">
            <div class="section">
                <h3 class="center-align blue-text">Unicare Medical Centre</h3>
            </div>
            <div class="divider"></div>
            <div class="section">
                <div class="row">
                    <div class="col s10 m6 l4 offset-s1 offset-m3 offset-l4 center gray z-depth-2">
                        <form role="form" method="POST" action="{{url('/login')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="section">
                                    <div class="input-field col s9 offset-s1 {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="username" type="text" class="validate" name="email" value="{{ old('email') }}">
                                        <label for="username" class="left-align">Username</label>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="input-field col s9 offset-s1 {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" class="validate" name="password">
                                        <label for="password" class="left-align">Password</label>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                </div>
                                <button class="btn waves-effect waves-light" type="submit">Login</a>
                            </div>

                            <div class="divider"></div>

                            <div class="row">
                                <div class="section">
                                    <a href="#">
                                        <p class="center-align">Forgot password?</p>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>