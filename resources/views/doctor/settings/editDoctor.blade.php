<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Edit doctor</title>

        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    </head>

    <body class="grey lighten-4">
        <div class="container">
            <div class="row" style="padding-top: 3rem">
                <div class="col s12 m12 l8">
                    <div class="card">
                        <div class="card-title blue white-text">New Doctor</div>
                        <div class="card-content">
                            <form action="{{route('saveNewDoctor')}}" method="post">
                                {{ csrf_field()}}
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
                                        <div class="section"><span>Registration number<span class="red-text">*</span></span><input type="text" name="regNo" value="{{old('birthYear')}}"  required="" validate="true"/></div>
                                    </div>
                                    <div class="col s12 m3 l3  ">
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
                                    <div class="col col s12 m3 l3">
                                        <div class="section"><span>Role<span class="red-text">*</span></span>
                                            <p>
                                                <input type="radio" name="role" value="doctor" checked="true" id="role_doc">
                                                <label for="role_doc" >Doctor</label>
                                            </p>
                                            <p>
                                                <input type="radio" name="role" value="assistantDoctor" id="role_assistant">
                                                <label for="role_assistant">Assistant doctor</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="section"><span>Email<span class="red-text">*</span></span>
                                            <input type="email" id="email" name="email" value="{{old('email')}}" required="" validate="True" />
                                            <p id="checkResp"></p>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="section"><span>Contact No(//add this to database)<span class="red-text">*</span></span>
                                            <input type="tel" name="contactNo" value="{{old('contactNo')}}" maxlength="10" />
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="section">
                                    <input class="btn" type="submit" name="submitButton" value="Register" />
                                    <input class="btn" type="hidden" name="updateButton" value="Update" />
                                    <a class='form_settings' href="{{route('manageDoctors')}}"><button class="btn" type="submit" name="backButton" value="Back">Back</button></a></p>
                                </div>
                        </div>
                        </form>

                    </div>
                </div>
            <div class="col s12 m4">
            <div class="card">
                <div class="card-title red white-text">Account Management</div>
                <div class="card-content">
                    <form action="{{route('changeUserPassword',[$doctor->getUser->id])}}" method="post">
                        {{csrf_field()}}
                        <p class="grey-text">Change password</p>
                        <div class="section">
                        @if (session()->has('msg'))
                        <br>
                        <p class="red-text">{{session('msg')}}</p>
                        <br>
                        @endif
                            <div class="row">
                                <div class="col s12">
                                    <span>New Password<span class="red-text">*</span></span>
                                    <input type="password" name="newPassword" id="newPassword"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <span>Confirm password<span class="red-text">*</span></span>
                                    <input type="password" name="newPWC" id="newPWC"/>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="changePWBtn" id="changePWBtn">Change password</button>
                            <script type="text/javascript">
                                var newPassword = $('#newPassword');
                                var newPWC = $('#newPWC');
                                var changePWBtn = $('#changePWBtn');

                                changePWBtn.addClass('disabled');

                                newPassword.keyup(function(){

                                    console.log("new password= " + newPassword.val()+ " PWC= " +  newPWC.val());
                                    if (newPassword.val().length >4){
                                        if (newPWC.val()===newPassword.val()){
                                            changePWBtn.removeClass('disabled');
                                        }else{
                                            if (!(changePWBtn.hasClass('disabled'))){
                                                changePWBtn.addClass('disabled');
                                            }
                                        }
                                    }else{
                                            if (!(changePWBtn.hasClass('disabled'))){
                                                changePWBtn.addClass('disabled');
                                            }
                                        }
                                });

                                newPWC.keyup(function(){

                                    console.log("new password= " + newPassword.val()+ " PWC= " +  newPWC.val());
                                    if (newPWC.val().length >4){
                                        if (newPWC.val()===newPassword.val()){
                                            changePWBtn.removeClass('disabled');
                                        }else{
                                            if (!(changePWBtn.hasClass('disabled'))){
                                                changePWBtn.addClass('disabled');
                                            }
                                        }
                                    }else{
                                            if (!(changePWBtn.hasClass('disabled'))){
                                                changePWBtn.addClass('disabled');
                                            }
                                        }
                                });
                            </script>
                        </div>
                        <div class="divider"></div><br>
                        <div class="section">
                            <p class="grey-text">Account status</p>
                            <div class="section" >
                                @if ($doctor->getUser->active == 1)
                                <p>The account is currently <mark style="background-color: green; color: white; border-radius: 16px; padding: 0 5px">active</mark> and the doctor can login remotely.</p><br>
                                <a class="btn waves-effect waves-round red" href="">Deactivate</a>
                                @else
                                <p>The account is currently <mark style="background-color: red; color: white; border-radius: 16px; padding: 0 5px">inactive</mark> and the doctor cannot login remotely.</p>
                                <a class="btn waves-effect waves-round green" href="{{route('userAccountStatus',[$doctor->getUser->id])}}">Activate</a>
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
