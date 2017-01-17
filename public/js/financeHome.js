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
});
