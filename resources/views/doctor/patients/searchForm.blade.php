

<div class="card">
    <div class="card-content">
        <div class="row">
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
                    <input id="value" name="value" type="text" class="autocomplete" required placeholder="Search" autocomplete="off">
                </div>
                <ul id="results" class="dropdown-content" style="opacity:100; display: block">

                </ul>
                <script>
                    $(document).ready(function () {
                        $('#value').keyup(function () {

                            var value = document.getElementById("value").value;
                            var col_name = document.getElementById("col_name").value;

                            if (value.length > 2 && col_name !== "") {
                                var outData = {value: value.toString(), col_name: col_name.toString()};


                                $.ajax({
                                    type: 'GET',
                                    url: 'patients/search',
                                    data: outData,
                                    success: function (data) {
                                        $('#results').empty();

                                        if (!data.patients.length) {
                                            $.each(data.patients, function (name, id) {

                                                var matchStart = name.toLowerCase().indexOf("" + value.toLowerCase() + ""),
                                                        matchEnd = matchStart + value.length - 1,
                                                        beforeMatch = name.slice(0, matchStart),
                                                        matchText = name.slice(matchStart, matchEnd + 1),
                                                        afterMatch = name.slice(matchEnd + 1);

                                                console.log(matchStart, matchEnd, beforeMatch, matchText, afterMatch);

                                                var hl_li = "<span>"+beforeMatch + "<span style='color:red'>" + matchText + "</span>" + afterMatch + "</span>";

                                                var li = "<a href='patients/view/" + id + "'>" + "<li class='results'>" + hl_li + "</li></a>";

                                                $('#results').append(li);
                                            });

//
                                        } else {
                                            $('#results').append("<li class='results' style='padding: 14px 16px'>No match</li>");
                                        }

                                        $('.results').css({'font-size': '16px', 'color': '#26a69a', 'display': 'block', 'line-height': '22px'});
                                    }
                                });

                            }

                        });

                        $(document).click(function () {
                            if (!$(event.target).closest('#results').length) {
                                $('#results').empty();
                            }
                        });

                    });



//                        console.log("page loaded.");
//                        $('#value').keyup(function (e) {
//                            if ($("autocomplete-content")) {
//                                console.log("exists");
//                                $("ul").remove(".autocomplete-content:first");
//                            }
//                            var value = document.getElementById("value").value;
//                            var col_name = document.getElementById("col_name").value;
//                            if (value !== "" && col_name !== "") {
//                                console.log(value + " " + col_name);
//                                var outData = {value: value.toString(), col_name: col_name.toString()};
//
//
//
//                                $.ajax({
//                                    type: 'GET',
//                                    url: 'patients/search',
//                                    data: outData,
//                                    success: function (data) {
//
//                                        });
//                                    }
//                                });
//
//                            } else {
//                                return;
//                            }
//
//                        });

                </script>
            </div>
        </div>

    </div>
</div>
