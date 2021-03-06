<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Add new Assistant</title>

        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    </head>

    <body class="grey lighten-4">
        <div class="container">
            <div class="row" style="padding-top: 3rem">
                <div class="col s12">
                    <div class="card">
                        <div class="card-title blue white-text">New Assistant</div>
                        <div class="card-content">
                            <form action="{{route('saveNewAssistant')}}" method="post">
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
                                        <div class="section"><span>NIC<span class="red-text">*</span></span><input type="text" name="NIC" value="{{old('birthYear')}}"  required="" validate="true"/></div>
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
                                </div>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="section"><span>email<span class="red-text">*</span></span>
                                            <input type="email" id="email" name="email" value="{{old('email')}}" required="" validate="True" />
                                            <p id="checkResp"></p>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="section"><span>Contact No<span class="red-text">*</span></span>
                                            <input type="tel" name="contactNo" value="{{old('contactNo')}}" maxlength="10" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="section"><span>Address<span class="red-text">*</span></span>
                                            <input type="text" name="address" value="{{old('address')}}" />
                                    </div>
                                </div>
                                

                                <div class="section">
                                    <input class="btn" type="submit" name="submitButton" value="Register" />
                                    <input class="btn" type="hidden" name="updateButton" value="Update" />
                                    <a class='form_settings' href="{{route('viewManageAssistants')}}"><button class="btn" type="submit" name="backButton" value="Back">Back</button></a></p>
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
