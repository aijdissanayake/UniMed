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

	//close invalid session message
	$('#close').click(function(){
		$('#invalidSession').hide();
	});

	//toggle appointmtment policy Large screen

	$('#title').click(function(){

		$('#sentences').slideToggle();

	});


	$('#appForm').submit(function(event){
		if ((document.getElementById('appointmentDate').value) <= (new Date())) {
				Materialize.toast('Invalid Date!', 4000 , 'rounded red');
				event.preventDefault();
		}
		else if((document.getElementById('session').value)==0){
				Materialize.toast('Invalid Session!', 4000 , 'rounded red');
				event.preventDefault();
		}
		else{
			return;
		}

	});

	$('#cancelButton').click(function(event){
		if(confirm('Are you Sure you want to cancel the appointmtment?')){
			return;
		}
		else{
			event.preventDefault();
		}
	});

});


