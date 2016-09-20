$(document).ready(function(){
	//fetch unavailable dates
	$('#appointmentDate').click(function(){
		confirm('Select a Date');
	});

	//date picker initialization for appointments
	var d = new Date();
    d.setDate(d.getDate() + 1);

    $('#appointmentDate').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15, // Creates a dropdown of 15 years to control year
    	min: d, // Enable dates after today
    	close:'Select' // rename close button
   	});

    //date picker disable unavailable periods
    var $input = $('#appointmentDate').pickadate();
    var picker = $input.pickadate('picker');
    picker.set('disable', [

  // Using integers as the days of the week (1 to 7)
  1, 4, 7,

  // Using a range object with a “from” and “to” property
  { from: [2016,8,20], to: [2016,8,27] }
	]);

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

	//toggle appointmtment policy Large screen
	$('#title').click(function(){

		$('#sentences').slideToggle();

	});

	//form validation
	$('#appForm').submit(function(event){
		//validate date first
		if ((document.getElementById('appointmentDate').value) <= (new Date())) {
				Materialize.toast('Invalid Date!', 4000 , 'rounded red');
				event.preventDefault();
		}
		//validate session
		else if((document.getElementById('session').value)==0){
				Materialize.toast('Invalid Session!', 4000 , 'rounded red');
				event.preventDefault();
		}
		else{
			return;
		}

	});
	// confirm cancellation of an appointment
	$('#cancelButton').click(function(event){
		if(confirm('Are you Sure you want to cancel the appointmtment?')){
			return;
		}
		else{
			event.preventDefault();
		}
	});

});


