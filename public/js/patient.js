$(document).ready(function(){
	$('#appPolicy').accordion({collapsible:true,active:false});
	
	$('#policyButton').click(function(){
		$('#policy').slideToggle(400);});
});