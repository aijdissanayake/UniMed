$(document).ready(function(){
	$('select').material_select();

	$('#update_type').on('change', function(e){
		var type_id = e.target.value;
		console.log(type_id);
		var token = '<?php echo csrf_token() ?>';

		var data = { type_id: type_id};

		$.ajax({
                type: 'GET',
                url: 'updateDropdown',
                data: data,
                success: function (data) {
                    
                    $('#update_items').empty();
                    $('#update_items').append($('<option>', {
						    value: "Choose your option",
						    text: "Choose your option",
						    selected: true,
						    disabled: true
						    
						}));
						$('select').material_select();


                    for(i=0; i<data.items.length; i++){
                    	
                    	$('#update_items').append($('<option>', {
						    value: data.items[i],
						    text: data.items[i]
						}));
						$('select').material_select();


                    }


                }
            });

		
	});
	$('#search_type').on('change', function(e){
		console.log(e);
	});

	$("#update_form").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            Materialize.toast('I am a toast!', 4000 ,'rounded')
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails
            console.log("error:update_form!");      
        }
    });
    e.preventDefault(); //STOP default action
});



});