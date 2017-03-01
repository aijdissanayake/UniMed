

<div class="card">
    <div class="card-content" style="padding: 10px 20px 10px 20px">
        <div class="row" style="margin-bottom: 12px">
            
            <div class="col s12">
                <div class="input-field">
                    <input id="value" name="value" type="text" class="autocomplete" required placeholder="Search patients" autocomplete="off">
                </div>
                <ul id="results" class="dropdown-content" style="opacity:100; display: block">

                </ul>
                <script>
                    $(document).ready(function () {
                        var timeout, rr, request;
                        $('#value').keyup(function () {

                            if (rr){
                                console.log("Already running request! Stopping it as we have new data.")
                                request.abort();
                            }

                            var value = document.getElementById("value").value;

                            if (value.length > 2) {
                                var outData = {value: value.toString()};

                                if (timeout) {
                                    clearTimeout(timeout);
                                }

                                timeout = setTimeout(function() {
                                    rr = true;
                                    request = $.ajax({
                                        type: 'GET',
                                        url: 'patients/search',
                                        data: outData,
                                        success: function (data) {
                                            $('#results').empty();
                                            console.log(data.length);

                                            if (data.length!==0) {
                                                $.each(data, function (i, item) {

                                                    var res = item["name"] + "   <span style='color:#bdbdbd'>" + item["telephone"].toString() + "</span>";

                                                    var matchStart = res.toLowerCase().indexOf("" + value.toLowerCase() + ""),
                                                    matchEnd = matchStart + value.length - 1,
                                                    beforeMatch = res.slice(0, matchStart),
                                                    matchText = res.slice(matchStart, matchEnd + 1),
                                                    afterMatch = res.slice(matchEnd + 1);

                                                    var li = "<a href='patients/view/" + item['id'] + "'>" + "<li class='results'>" + "<span>" + beforeMatch + "<span style='color:red'>" + matchText + "</span>" + afterMatch + "</span>" + "</li></a>";

                                                    $('#results').append(li);
                                                });

                                            } else {
                                                $('#results').append("<li class='results' style='padding: 14px 16px'>No match</li>");
                                            }

                                            $('.results').css({'font-size': '16px', 'color': '#26a69a', 'display': 'block', 'line-height': '22px'});
                                        },
                                        complete:function(){
                                            rr = false;
                                        }
                                    });
                                }, 250);
                                

                            } else{
                                if (rr){
                                    request.abort();
                                }
                                $('#results').empty();
                            }

                        });

                        $(document).click(function () {
                            if (!$(event.target).closest('#results').length) {
                                $('#results').empty();
                            }
                        });

                    });
                </script>
            </div>
        </div>

    </div>
</div>
