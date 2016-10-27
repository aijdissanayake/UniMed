    $(document).ready(function(){
        $('#defineSubType').hide();
        $('#tSubType').change(function(){
            if ($('#tSubType option:selected').val()==="-1"){
                $('#defineSubType').show();
            }else{
                $('#defineSubType').hide();
            }
        });
    });


