(function ($) {
    $(function () {

        $('.button-collapse').sideNav();

        $('select').material_select();


    }); // end of document ready

     var d = new Date();

    $('.datepicker').pickadate({
    	selectMonths: true, // Creates a dropdown to control month
    	selectYears: 15, // Creates a dropdown of 15 years to control year
    	min: new Date(d) // Enable dates after today
   	});

})(jQuery); // end of jQuery name space