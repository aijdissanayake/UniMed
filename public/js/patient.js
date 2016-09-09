$(document).ready(function(){

	//date picker for appointments
	var d = new Date();
    d.setDate(d.getDate() + 1);
    $('#appointmentDate').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15, // Creates a dropdown of 15 years to control year
    	min: d, // Enable dates after today
    	close:'Select' // rename close button
   	});

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


