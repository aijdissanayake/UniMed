$(document).ready(function () {
    var $subTypes = $('#tSubType');
    var $newSubType = $('#defineSubType');
    var $newSTName = $('#subTypeName');
    var $newSTDesc = $('#subTypeDesc');
    var $date = $('#trxnDate');
//    $('select').material_select();
    
    $newSubType.hide();

    $('.datepicker').pickadate('picker').set('select', new Date());
    
    $date.change(function(){
        console.log($date.val())
    });
    
    $('#tType').change(function () {
        $newSTName.prop('required',false);
        $newSTDesc.prop('required',false);
        $newSubType.hide();
        $subTypes.empty();
        $subTypes.append($("<option value='' disabled selected id='subtypeSelector'>Subtype</option>"));
        $subTypes.append($("<option value='-1'>Create New...</option>"));
        

        var outData = {tType: $('#tType').val()};
        $.ajax({
            type: 'GET',
            url: 'newTransaction/tTypes',
            data: outData,
            success: function (data) {
                console.log(outData.tType);
                if (outData.tType==1){
                    var $name = 'incomeName';
                }else if(outData.tType==2){
                    var $name = 'expenseName';
                }
                
                $.each(data, function(i, item){
                    var $option = new Option(item[$name],item['id']);
                    console.log($option);
                    $subTypes.append($("<option></option>").attr("value",item['id']).text(item[$name]));
                });
                
            }
        });
        
    });


    $('#tSubType').change(function () {
        if ($('#tSubType option:selected').val() === "-1") {
            $newSubType.show();
            $newSTName.prop('required',true);
            $newSTDesc.prop('required',true);
            ;
        } else {
            $newSTName.prop('required',false);
            $newSTDesc.prop('required',false);
            $newSubType.hide();
        }
    });
});


