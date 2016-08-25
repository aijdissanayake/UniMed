<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Add New Visit Record</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />


    </head>

    <body>
        <div class="container">
            <div class="row top-row">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-title purple darken-3 white-text">New Clinical Record</div>
                            <div class="card-content">
                                <div class="section">
                                    <form action="{{route('storePatientVisitRecord',[$patient->id])}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col s12 m6"><p><span>PatientID</span>{{$patient->id}}</p></div>
                                            <div class="col s12 m6"><p><span>Patient name</span>{{$patient->firstName}} {{$patient->lastName}}</p></div>
                                            <div class="input-field col s12">
                                                <textarea id="diagnosis" type="text" class="materialize-textarea validate" required></textarea>
                                                <label for="diagnosis">Diagnosis</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="prognosis" type="text" class="materialize-textarea validate" required></textarea>
                                                <label for="prognosis">Prognosis</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <textarea id="prescDrugs" type="text" class="materialize-textarea validate" required></textarea>
                                                <label for="prescDrugs">Presctibed Drugs</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="remarks" type="text" class="materialize-textarea validate" required></textarea>
                                                <label for="remars">Special Remarks</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <input id="nextVisitDate" type="date" class="datepicker" required></textarea>
                                                <label for="nextVisitDate">Next Visit Date</label>
                                            </div>
                                            <div class="input-field col s12 m6"></div>
                                        </div>

                                        <input class="btn purple" type="submit" name="submitButton" value="Submit Record" />
                                        <div class="section">
                                            <a class="btn waves-effect purple" href="{{route('patientsTab')}}">Back</a>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>

</html>
