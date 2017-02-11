
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

$(document).ready( function(){

		var d = new Date();
    d.setDate(d.getDate() + 1);
	$('#startDate').attr("min",formatDate(d));
	$('#startDate').attr("value",formatDate(d));
	$('#endDate').attr("min",formatDate(d));
	$('#endDate').attr("value",formatDate(d));

	$('#startDate').change(function(){
		var d = document.getElementById('startDate').value ;
		$('#endDate').attr("value",d);
		$('#endDate').attr("min",d);

	});

	$('#sessions').hide();
	$('#radio2').change(function(){
		if(this.checked){
			$('#sessions').show();
		}		
	});
	$('#radio1').change(function(){
		if(this.checked){
			$('#sessions').hide();
		}		
	});

	$('#unavForm').submit(function(event){
			console.log("inside");
			console.log(document.querySelector('input[name = "dayType"]:checked').value);
		if (document.querySelector('input[name = "dayType"]:checked').value == "halfday") {
			var count = 0;
			$('#sessions input:checked').each(function() {
			 	count = count+1;
			 	console.log(count);
        	});
        	console.log(count);
	        if (!count) {
					Materialize.toast('Mark Unavailable sessions!', 4000 , 'rounded red');
					event.preventDefault();
			}
		}
	});

});