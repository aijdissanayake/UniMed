<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
    <title>Unicare - Edit {{$patient->firstName}} {{$patient->lastName}}</title>

    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
</head>

<body class="grey lighten-4">
    <div class="container">
        <div class="row top-row">
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-title blue white-text">Edit {{$patient->firstName}} {{$patient->lastName}}</div>
                    <div class="card-content">

                        <!--Validation errors-->

                        @if (count($errors) > 0)
                        <div class="alert alert-danger" style="background-color: red">
                            <ul> 
                                @foreach ($errors->all() as $error)
                                <li style="color: white">ERROR:  {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('updatePatient',[$patient->id])}}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="section">
                                        <span>First Name<span class="red-text">*</span></span><input type="text" name="firstName" value="{{$patient->firstName}}" />
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="section"><span>Last Name<span class="red-text">*</span></span><input type="text" name="lastName" value="{{$patient->lastName}}" /></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="section"><span>Birth Year<span class="red-text">*</span></span><input type="number" min="1900" max="2016"  maxlength="4" name="birthYear" value="{{$patient->birthYear}}" validate="true"/></div>
                                </div>
                                <div class="col s1 m6">
                                    <div class="section"><span>Gender<span class="red-text">*</span></span>
                                        <p>
                                            <input type="radio" name="gender" value="1" @if ($patient->gender==1)checked="true" @endif id="gender_male">
                                            <label for="gender_male" >Male</label>
                                        </p>
                                        <p>
                                            <input type="radio" name="gender" value="0" @if ($patient->gender==0)checked="true" @endif id="gender_female">
                                            <label for="gender_female">Female</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="section"><span>Height (in cm)<span class="red-text">*</span></span>
                                        <input type="number" min="20" max="220"  maxlength="6" name="height" value="{{$patient->height}}" validate="true"/>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="section"><span>Occupation<span class="red-text">*</span></span>
                                        <input type="text" name="occupation" value="{{$patient->occupation}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="section"><span>Email<span class="red-text">*</span></span>
                                        <input type="email" id="email" name="email" value="{{$patient->getUser->email}}" />
                                        <!-- paragraph for username check -->
                                        <p id="checkResp"></p>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="section"><span>Contact No.<span class="red-text">*</span></span>
                                        <input type="tel" name="contactNo" value="{{$patient->telephoneNo}}" maxlength="10"  />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <div class="section"><span>Locale<span class="red-text">*</span></span>
                                        <input type="text" name="locale" value="{{$patient->locale}}"/>
                                    </div>
                                </div>
                                <div class="col s12 m6">
                                    <div class="section"><span>Blood Group<span class="red-text">*</span></span><select name="bloodGroup" selected="{{$patient->bloodType}}"  >
                                        <option value="A+" @if ($patient->bloodType=='A+') selected @endif>A+</option>
                                        <option value="A-" @if ($patient->bloodType=='A-') selected @endif>A-</option>
                                        <option value="B+" @if ($patient->bloodType=='B+') selected @endif>B+</option>
                                        <option value="B-" @if ($patient->bloodType=='B-') selected @endif>B-</option>
                                        <option value="AB+" @if ($patient->bloodType=='AB+') selected @endif>AB+</option>
                                        <option value="AB-" @if ($patient->bloodType=='AB-') selected @endif>AB-</option>
                                        <option value="O+" @if ($patient->bloodType=='O+') selected @endif>O+</option>
                                        <option value="O-" @if ($patient->bloodType=='O-') selected @endif>O-</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="section">
                            <button class="btn" type="submit" name="updateButton">Update<i class="material-icons right">send</i></button>
                            <a class='btn' href="{{route('viewPatient',[$patient->id])}}">Back</a></p>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-title red white-text">Account Management</div>
                <div class="card-content">
                    <form action="" method="post">
                        {{csrf_field()}}
                        <p class="grey-text">Change password</p>
                        <div class="section">
                            <div class="row">
                                <div class="col s12">
                                    <span>New Password<span class="red-text">*</span></span>
                                    <input type="password" name="firstName" value="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <span>Confirm password<span class="red-text">*</span></span>
                                    <input type="password" name="lastName" value="" />
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Change password</button>
                        </div>
                        <div class="divider"></div><br>
                        <div class="section">
                            <p class="grey-text">Account status</p>
                            <div class="section" >
                                @if ($patient->getUser->active == 1)
                                <p>The account is currently <mark style="background-color: green; color: white; border-radius: 16px; padding: 0 5px">active</mark> and the patient can login remotely.</p><br>
                                <a class="btn waves-effect waves-round red" href="">Deactivate</a>
                                @else
                                <p>The account is currently <mark style="background-color: red; color: white; border-radius: 16px; padding: 0 5px">inactive</mark> and the patient cannot login remotely.</p>
                                <a class="btn waves-effect waves-round green" href="">Activate</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>
