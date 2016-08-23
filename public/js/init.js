(function($){
  $(function(){

    $('.button-collapse').sideNav();
       
	$('select').material_select();

	$('#appPolicy').accordion({collapsible:true,active:false});


  }); // end of document ready
})(jQuery); // end of jQuery name space


$(document).ready(function(){
	$('#appPolicy').accordion({collapsible:true,active:false});

});