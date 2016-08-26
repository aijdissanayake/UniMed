$(document).ready(function(){
	// $('#policyDiv').accordion({collapsible:true,active:false});
	
	// $('#policyButton').click(function(){
	// 	$('#policy').slideToggle(400);});

	slide=false;
	$('#policy').slideUp(0);
	
	$('#policyButton').click(function(){
		
		if (!slide) {
		$('#policy').slideDown(400);
		slide=true;
		}

		else{
		$('#policy').slideUp(400);
		slide=false;
		}

	});
});