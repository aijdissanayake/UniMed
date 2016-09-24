<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Add new Assistant</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <script src="/js/user_check.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">
            <div class="row top-row">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-title green white-text">
                                <i class="material-icons left" style="vertical-align:middle">person_add</i>
                                Add a New Assistant
                            </div>
                            <div class="card-content">
                                    <div class="input-field col s12 m6">
                                        <label for="first_name">First Name<span class="red-text">*</span></label>
                                        <input id="first_name" type="text" class="validate">
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <label for="last_name">Last Name<span class="red-text">*</span></label>
                                        <input id="last_name" type="text" class="validate">
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <label for="birth_year">Birth Year<span class="red-text">*</span></label>
                                        <input id="birth_year" type="text" class="validate">
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <label for="tp_no">Telephone No.<span class="red-text">*</span></label>
                                        <input id="tp_no" type="tel" class="validate">
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="email">Email<span class="red-text">*</span></label>
                                        <input id="email" class="validate" type="email" required>
                                        <p id="checkResp"></p>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="home_address">Home Address</label>
                                        <textarea id="home_address" class="materialize-textarea" style="padding-bottom: 0px"></textarea>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <label for="username">username<span class="red-text">*</span></label>
                                        <input id="username" type="text" class="validate">
                                    </div>
                                <div class="row">
                                    <div class="col s12" align="right">
                                        <a class="waves-effect green btn"><i class="material-icons left">add</i>Add</a>
                                    </div>
                                </div>  
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
