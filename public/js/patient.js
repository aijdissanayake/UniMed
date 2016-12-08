$(document).ready(function(){
	//date picker initialization for appointments
		var d = new Date();
	    d.setDate(d.getDate() + 1);
	$('#appointmentDate').pickadate({
	    	selectMonths: true, // Creates a dropdown to control month
	    	selectYears: 15, // Creates a dropdown of 15 years to control year
	    	min: d, // Enable dates after today
	    	close:'Select' // rename close button
	   	});

	$('#sessionDiv').hide();
	$('#appointmentDate').change(function(){
		if(this.value){
			$('#sessionDiv').show();
			var date = this.value;
	  	$.ajax({
					type: 'GET',
	                url: 'dates',
	                data: { date: date },
	                success: function (data) {
	                	var sessions = data['sessions'];
	                	console.log(sessions);
	                }
	                });
		}
		else{
			$('#sessionDiv').hide();
		}		
	});
	

	//fetch unavailable dates
	$('#appointmentDate').click(function(){
  	$.ajax({
			type: 'GET',
                url: 'dates',

                success: function (data) {
                	//accsess data
                	var unavailableDates = data['unavailableDates'];
                	//get the picker object
                	var $input = $('#appointmentDate').pickadate();
				    var picker = $input.pickadate('picker');
				    //set dates disable for each time period
				    console.log(unavailableDates[1][0]);
                	for(var i in unavailableDates)
                	{
                	fromy = parseInt(unavailableDates[i][0].substring(0,4),10);
                	fromm = parseInt(unavailableDates[i][0].substring(5,7),10)-1;
                	fromd = parseInt(unavailableDates[i][0].substring(8,10),10);
                	from = [fromy,fromm,fromd];
                	toy = parseInt(unavailableDates[i][1].substring(0,4),10);
                	tom = parseInt(unavailableDates[i][1].substring(5,7),10)-1;
                	tod = parseInt(unavailableDates[i][1].substring(8,10),10);
                	to = [toy,tom,tod];
                	console.log(from);
                	console.log(to);

                	picker.set('disable', [
					  // Using a range object with a “from” and “to” property
					{ from: from, to: to }
					]);
                	}
                	

			  		//date picker disable unavailable periods
				    
				    
				}

			});


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


