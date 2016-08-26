$(document).ready(function(){
    
    $('.button-collapse').sideNav();

        $('select').material_select();
    
    var d = new Date();

    $('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15, // Creates a dropdown of 15 years to control year
    	min: new Date(d) // Enable dates after today
   	});
});