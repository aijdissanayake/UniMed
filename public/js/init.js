$(document).ready(function () {
    $('.tooltipped').tooltip({delay: 50});

    $('.button-collapse').sideNav();

    $('select').material_select();

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        close: 'Select' // rename close button
    });

});
