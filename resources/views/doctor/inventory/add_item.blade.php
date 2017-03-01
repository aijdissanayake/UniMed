<!DOCTYPE html>
<html>
<head>
	@include('doctor.nav_bar_doc')
	<title>Unicare: Add Inventory Item</title>
	<script type="text/javascript" src="\js\inventory.js"></script>
</head>
<body class="grey lighten-4">
	<div class="row top-row">
		<div class="col s12 m8 offset-m2">
			<div class="card">
				<div class="card-title light-green white-text">Add Stock</div>
				<div class="card-content">
					<div class="row">
						<div class="input-field col s8 m4">
							<select id="task">
								<option value="" disabled selected>Choose your option</option>
								<option value="1">Add new item</option>
								<option value="2">Restock item</option>
							</select>
							<label for="task">Select task</label>
						</div>
					</div>


					<div id="new_item">
						<div class="row">
							<div class="input-field col s12 m6">
								<input name="itemName" id="itemName" type="text" class="validate">
								<label for="itemName">Item Name</label>
							</div>
							<div class="input-field col s12 m6">
								<input name="supplier" id="supplier" type="text" class="validate">
								<label for="supplier">Supplier</label>
							</div>

						</div>
						<div class="row">
							
							<div class="input-field col s12">
								<textarea name="description" id="description" class="materialize-textarea" style="padding-bottom: 0px"></textarea>
								<label for="description">Description</label>
							</div>


						</div>
						<div class="row">
						<div class="input-field col s8 l6">
							<input name="date_bought" id="date_bought" type="date" class="datepicker" style="margin-bottom: 10px">
								<label for="date_bought">Date bought</label>
								<p class="grey-text" style="font-size: 0.8rem">Change date if bought on a different date.</p>
							</div>
						</div>
					</div>

					<div id="restock_item"></div>

				</div>
			</div>


		</div>

	</body>
	</html>