function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

$(document).ready(function(){
	//date picker initialization for appointments
		var d = new Date();
	    d.setDate(d.getDate() + 1);
	$('#appointmentDate').pickadate({			
    		
	    	selectMonths: true, // Creates a dropdown to control month
	    	selectYears: 15, // Creates a dropdown of 15 years to control year
	    	min: d, // Enable dates after today
	    	close:'Select'
	   	});


	$('#sessionDiv').hide();
	$('#appointmentDate').change(function(){

		var formatedDate = new Date(this.value);
		formatedDate = formatDate(formatedDate);
		$('#altFormat').val(formatedDate);

		if(this.value){
			var date = $('#altFormat').val();
			console.log();
	  	$.ajax({
					type: 'GET',
	                url: '/sessions',
	                data: { date: date },
	                success: function (data) {
	                	var sessions = data['sessions'];
						$('#sessionDiv').show();
	                	if (sessions.length) {
		                	$('select').html('');
		                    $.each(sessions, function (i, session) {                            
		                        $('select').append($('<option/>', { 
		                            value: parseInt(session[0]),
		                            text : String(session[1])
		                        }));
		                        console.log(i);
		                        console.log(session[1]);
		                    });
		                    $('select').material_select();
			                }
		                else{
		                	$('select').html('');
		                	$('select').append($('<option/>', { 
		                            value: parseInt(0),
		                            text : " All the Sessions are Unavailable"
		                        }));
		                	$('select').material_select();
		                	Materialize.toast('Sorry, All the Sessions are Unavailable on this day!', 4000, 'rounded red');
		                }
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
                url: '/dates',

                success: function (data) {
                	//accsess data
                	var unavailableDates = data['unavailableDates'];
                	//get the picker object
                	var $input = $('#appointmentDate').pickadate();
				    var picker = $input.pickadate('picker');
				    //set dates disable for each time period
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


