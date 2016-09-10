
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

});