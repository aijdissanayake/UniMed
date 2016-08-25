$(document).ready(function(){
	// $('#policyDiv').accordion({collapsible:true,active:false});
	
	// $('#policyButton').click(function(){
	// 	$('#policy').slideToggle(400);});

	slide=false;
	$('#policy').slideUp(0);
	
	$('#policyButton').click(function(){
		
		if (!slide) {
		$('#policy').slideUp(400);
		slide=true;
		}

		else{
		$('#policy').slideDown(400);
		slide=false;
		}

	});


	 var d = new Date();

    $('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15, // Creates a dropdown of 15 years to control year
    	min: new Date(d) // Enable dates after today
   	});


});