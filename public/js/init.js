$(document).ready(function(){
	$('.tooltipped').tooltip({delay: 50});
	    
    $('.button-collapse').sideNav();

    $('select').material_select();

    var d = new Date();
    d.setDate(d.getDate() + 1);
    $('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15, // Creates a dropdown of 15 years to control year
    	min: d, // Enable dates after today
    	close:'Select' // rename close button
   	});

    $('.datepicker').datepicker("setDate", new Date());

});