$(document).ready(function(){


	//toggle appointment policy small screen

	slide=false;

	$('#policyS').slideUp(0);
	
	$('#policyButton').click(function(){
		
		if (!slide) {
		$('#policyS').slideUp(400);
		slide=true;
		}

		else{
		$('#policyS').slideDown(400);
		slide=false;
		}

	});

	//show hide invalid session message

	$('#invalidSession').hide();

	function ValidationEvent(){

	$('#appSubmit').click(function(){

		if (!document.getElementById('session').value) {
              $('#invalidSession').show();
              return false;
           }

        else{
        	return true;
        }

	});

	}



	//close invalid session message
	$('#close').click(function(){
		$('#invalidSession').hide();
	});

	//toggle appointmtment policy Large screen

	$('#title').click(function(){

		$('#sentences').slideToggle();

	});
	
	

});


