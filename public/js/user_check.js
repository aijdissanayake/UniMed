$(document).ready(function () {



    $('#email').focusout(function () {
        var token = '<?php echo csrf_token() ?>';
        var email = document.getElementById('email').value;

        if (email.length !== 0) {
            var data = {_token: token, email: email};
            $.ajax({
                type: 'GET',
                url: 'chkuid',
                data: data,
                success: function (data) {
                    $("#checkResp").html(data.msg);
                }
            });
        } else {
            $("#checkResp").html("");
        }

    });


});
        