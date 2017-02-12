$(document).ready(function () {
	var $tType = $('#tType');
	var $trxns = document.getElementById('Trxns');
	var $old_tbody = document.getElementById('trxnsBody');


	$tType.change(function () {  
		
		var $new_tbody = document.createElement('tbody');
		$new_tbody.setAttribute('id','trxnsBody');
		

		var outData = {tType: $tType.val()};
		$.ajax({
			type: 'GET',
			url: 'finance/getTrx',
			data: outData,
			success: function (data) {
				$.each(data, function(i, item){
					var $row = "<td>" + item['date'] + "</td>" +
					"<td>"+ item['name'] + "</td>"+
					"<td>"+ item['description']+ "</td>"+
					"<td>"+ item['value'] + "</td>";
					$new_tbody.insertRow(-1).innerHTML = $row;

				});

				$old_tbody.parentNode.replaceChild($new_tbody, $old_tbody);

			}

		});

		$old_tbody = document.getElementById('trxnsBody');

	});

	function formatDate(date) {
		var d = new Date(date),
		month = '' + (d.getMonth() + 1),
		day = '' + d.getDate(),
		year = d.getFullYear();

		if (month.length < 2) month = '0' + month;
		if (day.length < 2) day = '0' + day;

		return [year, month, day].join('-');
	}

	var $startDate = $('#startDate');
	var $endDate = $('#endDate');
	var $trxnBtn = $('#trxnBtn');

	$trxnBtn.addClass('disabled');
	$trxnBtn.prop('disabled', true);

	$endDate.attr('disabled', 'true');

	// $('#startDate').pickadate({clear: ''});
	// $endDate.pickadate('picker').set('clear', false);



	var $from, $to;

	$startDate.change(function(){
		$from = formatDate(new Date($startDate.val()));
		
		$endDate.removeAttr('disabled');
		$endDate.pickadate('picker').set('min', $startDate.val());
		
		if ($from !== "NaN-NaN-NaN"){
			if ($to ==null){
				$startDate.val($from);
			}else if ($from<=$to){
				if ($trxnBtn.hasClass('disabled')){
					$trxnBtn.removeClass('disabled');
					$trxnBtn.prop('disabled', false);
				}
				$startDate.val($from);
			}else{
				if (!($trxnBtn.hasClass('disabled'))){
					// handle if user re-selects a date after end Date after selecting an end Date
					$trxnBtn.addClass('disabled');
					$trxnBtn.prop('disabled', true);
				}
			}
		}

	});

	$endDate.change(function(){
		$to = formatDate(new Date($endDate.val()));

		if ($to!=="NaN-NaN-NaN"){
			$endDate.val($to);
			if ($from<=$to){
				// valid input
				$endDate.val($to);
				$trxnBtn.removeClass('disabled');
				$trxnBtn.prop('disabled', false);

			} 
		}else{
			console.log($to);
			if (!($trxnBtn.hasClass('disabled'))){
				$trxnBtn.addClass('disabled');
				$trxnBtn.prop('disabled', true);
			}
		}


	});
});