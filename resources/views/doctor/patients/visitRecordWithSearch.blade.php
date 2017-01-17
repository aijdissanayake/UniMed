<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Add New Visit Record</title>
        
    </head>

    <body class="grey lighten-4">
        <div class="container">
            <div class="row top-row">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-title purple darken-3 white-text">New Clinical Record</div>
                            <div class="card-content">
                                <div class="section">
                                    <form action="" method="post" id="crF">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div id="searchBar">
                                                <div class="">
                                                    <div class="card-content" style="padding: 0px 20px 10px 20px">
                                                        <div class="row" style="margin-bottom: 12px">
                                                            <div class="col s12 m3">
                                                                <div class="input-field">
                                                                    <select id="col_name" name="col_name">
                                                                        <option value="" disabled selected>Search patients by</option>
                                                                        <option value=1>First Name</option>
                                                                        <option value=2>Last Name</option>
                                                                        <option value=3>Telephone No.</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col s12 m9">
                                                                <div class="input-field">
                                                                    <input id="value" name="value" type="text" value="" class="autocomplete" required placeholder="Search" autocomplete="off">
                                                                </div>
                                                                <ul id="results" class="dropdown-content" style="opacity:100; display: block">

                                                                </ul>
                                                                <script>
                                                                    $(document).ready(function () {
                                                                        
                                                                        var $submitBtn = $('#crB');
                                                                        $submitBtn.addClass('disabled');

                                                                        var $resultsList = $('#results');
                                                                        $('#value').keyup(function () {

                                                                            var value = document.getElementById("value").value;
                                                                            var col_name = document.getElementById("col_name").value;
                                                                            if (value.length > 2 && col_name !== "") {
                                                                                var outData = {value: value.toString(), col_name: col_name.toString()};
                                                                                $.ajax({
                                                                                    type: 'GET',
                                                                                    url: 'search',
                                                                                    data: outData,
                                                                                    success: function (data) {
                                                                                        $resultsList.empty();
                                                                                        if (data.length !== 0) {
                                                                                            $.each(data, function (i, item) {

                                                                                                var res = "<span class='name'>" + item["name"] + "</span>" + "   <span style='color:#bdbdbd'>" + item["telephone"].toString() + "</span>";
                                                                                                var matchStart = res.toLowerCase().indexOf("" + value.toLowerCase() + ""),
                                                                                                        matchEnd = matchStart + value.length - 1,
                                                                                                        beforeMatch = res.slice(0, matchStart),
                                                                                                        matchText = res.slice(matchStart, matchEnd + 1),
                                                                                                        afterMatch = res.slice(matchEnd + 1);
                                                                                                var li = "<li class='results' value='" + item['id'] + "'>" + "<span>" + beforeMatch + "<span style='color:red'>" + matchText + "</span>" + afterMatch + "</span>" + "</li>";
                                                                                                $resultsList.append(li);
                                                                                            });
                                                                                            //
                                                                                        } else {
                                                                                            $resultsList.append("<li class='results' style='padding: 14px 16px'>No match</li>");
                                                                                        }

                                                                                        $('.results').css({'font-size': '16px', 'color': '#26a69a', 'display': 'block', 'line-height': '22px'});
                                                                                    }
                                                                                });
                                                                            } else if(value.length<=2){
                                                                                $resultsList.empty();
                                                                                $submitBtn.addClass('disabled');
                                                                                
                                                                            }
                                                                        });

                                                                        $(document).click(function () {
                                                                            if (!$(event.target).closest($resultsList).length) {
                                                                                $resultsList.empty();
                                                                            }
                                                                        });
                                                                        $resultsList.on('click', 'li', function () {
                                                                            var $ca = String($(this).attr('value'));
                                                                            console.log($ca);
                                                                            // Accessing the values of an inner span
                                                                            $('#value').val($(this).children('span').children("span[class='name']").text());
                                                                            $('#value').attr('value', $(this).attr('value'));
                                                                            
                                                                            var $formAction = "storeRecord/" + $ca + "";
                                                                            
                                                                            $('#crF').attr('action',$formAction);
                                                                            
                                                                            $submitBtn.removeClass('disabled');
                                                                            
                                                                            $resultsList.empty();
                                                                            
                                                                            $('#pID').text($ca);
                                                                        });
                                                                    });

                                                                </script>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="section">
                                                <div class="col s12 m6"><span>PatientID: <span id="pID"></span></span></div>
                                                <div class="input-field col s12">
                                                    <input name="complaints" type="text" class="validate" required>
                                                    <label for="complaints">Complaints & Problems</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input name="cFindings" type="text" class="validate" required>
                                                    <label for="cFindings">Clinical Findings</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input name="investigations" type="text" class="validate" required>
                                                    <label for="investigations">Investigations</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input name="diagnosis" type="text" class="validate" required>
                                                    <label for="diagnosis">Diagnosis</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input name="prognosis" type="text" class="validate" required>
                                                    <label for="prognosis">Prognosis</label>
                                                </div>
                                                <div class="input-field col s12 m6">
                                                    <input name="prescDrugs" type="text" class="validate" required>
                                                    <label for="prescDrugs">Prescribed Drugs</label>
                                                </div>
                                                <div class="input-field col s12 m6">
                                                    <input name="weight" type="number" min="0" max="200" step="0.001" class="validate" required>
                                                    <label for="weight">Weight (in kg)</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input name="remarks" type="text" class="validate" required>
                                                    <label for="remarks">Special Remarks</label>
                                                </div>
                                                <div class="input-field col s12 m6">
                                                    <input type="date" class="datepicker" name="nextVisitDate"  required>
                                                    <label for="nextVisitDate">Next Visit Date</label>
                                                </div>
                                            </div>
                                        </div>

                                        <input class="btn purple" type="submit" name="submitButton" value="Submit Record" id="crB" />
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
