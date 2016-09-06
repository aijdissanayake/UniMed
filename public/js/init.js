$(document).ready(function(){

	//tooltip
	$('.tooltipped').tooltip({delay: 50});
	//toggle navbar    
    $('.button-collapse').sideNav();
    //select dropdown 
    $('select').material_select();
    //date picker with only future days enabled
    var d = new Date();
    d.setDate(d.getDate() + 1);
    $('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15, // Creates a dropdown of 15 years to control year
    	min: d, // Enable dates after today
    	close:'Select' // rename close button
   	});

    $('.datepicker').datepicker("setDate", new Date());
    //time picker
    $('.timepicker').pickatime({
    	default: 'now',
    	twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
    	donetext: 'OK',
  		autoclose: false,
  		vibrate: true // vibrate the device when dragging clock hand
	});


});