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

    <body class="grey lighten-4">
        <div class="container">
            <div class="row" style="padding-top: 3rem">
                <div class="col s12">
                    <div class="card">
                        <div class="card-title blue white-text">New Patient</div>
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
                            <form action="{{route('patientAdded')}}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="section">
                                            <span>First Name<span class="red-text">*</span></span><input type="text" name="firstName" value="{{old('firstName')}}" required=""/>
                                            <p>Note: Default password will be set to "unicare101"</p>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="section"><span>Last Name<span class="red-text">*</span></span><input type="text" name="lastName" value="{{old('lastName')}}"  required=""/></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="section"><span>Birth Year<span class="red-text">*</span></span><input type="number" min="1900" max="2016"  maxlength="4" name="birthYear" value="{{old('birthYear')}}"  required="" validate="true"/></div>
                                    </div>
                                    <div class="col s1 m6">
                                        <div class="section"><span>Gender<span class="red-text">*</span></span>
                                            <p>
                                                <input type="radio" name="gender" value="1" checked="true" id="gender_male">
                                                <label for="gender_male" >Male</label>
                                            </p>
                                            <p>
                                                <input type="radio" name="gender" value="0" id="gender_female">
                                                <label for="gender_female">Female</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="section"><span>Email<span class="red-text">*</span></span>
                                            <input type="email" id="email" name="email" value="{{old('email')}}" required="" />
                                            <p id="checkResp"></p>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="section"><span>Contact No.<span class="red-text">*</span></span>
                                            <input type="tel" name="contactNo" value="{{old('contactNo')}}" maxlength="10" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="section"><span>Locale<span class="red-text">*</span></span>
                                            <input type="text" name="locale" value="{{old('locale')}}"/>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="section"><span>Blood Group<span class="red-text">*</span></span><select name="bloodGroup" value="{{old('bloodGroup')}}"  required="">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div></div>

                                </div>

                                <div class="section"><span>Remarks</span><textarea rows="4" cols="50" name="remarks" value="{{old('remarks')}}"></textarea></div>

                                <div class="section">
                                    <input class="btn" type="submit" name="submitButton" value="Register" />
                                    <input class="btn" type="hidden" name="updateButton" value="Update" />
                                    <a class='form_settings' href="{{route('patientsTab')}}"><button class="btn" type="submit" name="backButton" value="Back">Back</button></a></p>
                                </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
