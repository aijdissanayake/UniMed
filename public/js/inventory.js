$(document).ready(function(){

	var updateSummary = function(){

		$.ajax({
			type: 'GET',
                url: 'updateSummary',

                success: function (data) {
                	console.log(data);
                }

		});


	};

	$('select').material_select();
	updateSummary();



//update inventory form
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
	

	$("#update_form").submit(function(e){
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            Materialize.toast(data.feedback, 4000 )
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails
            console.log("error:update_form!");      
        }
    });
    e.preventDefault(); //STOP default action
	});



//search inventory form
	$('#search_type').on('change', function(e){
		var type_id = e.target.value;
		console.log(type_id);
		var token = '<?php echo csrf_token() ?>';

		var data = { type_id: type_id};

		$.ajax({
                type: 'GET',
                url: 'updateDropdown',
                data: data,
                success: function (data) {
                    console.log(data);
                    $('#search_items').empty();
                    $('#search_items').append($('<option>', {
						    value: "Choose your option",
						    text: "Choose your option",
						    selected: true,
						    disabled: true
						    
						}));
						$('select').material_select();


                    for(i=0; i<data.items.length; i++){
                    	
                    	$('#search_items').append($('<option>', {
						    value: data.items[i],
						    text: data.items[i]
						}));
						$('select').material_select();


                    }


                }
            });
	});


	$("#search_form").submit(function(e){
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
        	$('#modal_header').html(data.name);
        	$('#search_result_type').html(data.type);
        	$('#search_result_quantity').html(data.quantity);
        	$('#search_result_description').html(data.description);

            $('#modal1').openModal();
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