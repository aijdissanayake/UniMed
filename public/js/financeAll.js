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
    $('#endDate').attr("max",formatDate(d));
	$('#endDate').attr("value",formatDate(d));
	$('#startDate').attr("max",formatDate(d));
	$('#startDate').attr("value",formatDate(d));
	
	$('#endDate').change(function(){
		var d = document.getElementById('endDate').value ;
		$('#startDate').attr("value",d);
		$('#startDate').attr("max",d);

	});
});