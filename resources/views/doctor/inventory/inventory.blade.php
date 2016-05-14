<!DOCTYPE HTML>
<html>
<head>
<title>Unicare - Inventory</title>
<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
<div id="main">
  <div id="header">
    <div id="logo">
      <h1>Unicare Medical</h1>
      <div class="slogan"><img src="style/logo.png" /></div>
    </div>
    <div id="menubar">
      <ul id="menu">
        <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
        <li><a href="index.html">Home</a></li>
        <li><a href="patients.html">Patients</a></li>
        <li><a href="finance.html">Finance</a></li>
        <li class="current"><a href="inventory.html">Inventory</a></li>
        <li><a href="lab.html">Lab</a></li>
      </ul>
    </div>
  </div>
  <div id="site_content">
    <div id="content"> 
      <!-- insert the page content here -->
      
      <div>
      	<h2 style="color:#F14E23">Add item</h2>
        
        <div class="form-group">
        <form action="#" method="post">
          <label>Select item type:
            <select name="type" id="a_type" class="form-control input-sm">
              <option value="Drugs">Drugs</option>
              <option value="Equipments">Equipments</option>
            </select>
          </label>&nbsp;
          <label>Select item:
            <select id="a_items" class="form-control input-sm" name="a_items">
              <option value=""></option>
            </select>
          </label>&nbsp;&nbsp;&nbsp;
          <label>quantity</label>&nbsp;<input type="text" name="name" value="" />
          <input type="submit" name="Add" value="Add" />
         </form> 
        </div>
      </div>
      <p></p>
      <p></p>
      <div>
      	<h2 style="color:#F14E23">Remove item</h2>
        <div class="form-group">
        <form action="#" method="post">
          <label>Select item type:
            <select name="r_type" id="r_type" class="form-control input-sm">
              <option value="Drugs">Drugs</option>
              <option value="Equipments">Equipments</option>
            </select>
          </label>&nbsp;
          <label>Select item:
            <select id="r_items" class="form-control input-sm" name="r_items">
              <option value=""></option>
            </select>
          </label>&nbsp;&nbsp;&nbsp;
          <label>quantity</label>&nbsp;<input type="text" name="name" value="" />
          <input type="submit" name="remove" value="Remove" />
         </form> 
        </div>
      </div>
      <p></p>
      <p></p>
      <div>
      	<h2 style="color:#F14E23">Search inventory</h2>
         <form action="#" method="post">
          <label>Select item type:
            <select name="type" id="s_type" class="form-control input-sm">
              <option value="Drugs">Drugs</option>
              <option value="Equipments">Equipments</option>
            </select>
          </label>&nbsp;
          <label>Select item:
            <select id="s_items" class="form-control input-sm" name="s_items">
              <option value=""></option>
            </select>
          </label>&nbsp;&nbsp;&nbsp;
          
          <input type="submit" name="remove" value="Search" />
         </form>               
      </div>
    </div>
  </div>
  <div id="footer">
    <p>&nbsp;</p>
  </div>
</div>
<script>
    $('#a_type').on('change', function(e){
        console.log(e);
        var state_id = e.target.value;
		

        $.get('{{ url('information') }}/create/ajax-state?state_id=' + state_id, function(data) {
            console.log(data);
            $('#a_items').empty();
            $.each(data, function(index,subCatObj){
                $('#a_items').append(''+subCatObj.name+'');
            });
        });
    });
	$('#r_type').on('change', function(e){
        console.log(e);
        var state_id = e.target.value;
		

        $.get('{{ url('information') }}/create/ajax-state?state_id=' + state_id, function(data) {
            console.log(data);
            $('#r_items').empty();
            $.each(data, function(index,subCatObj){
                $('#r_items').append(''+subCatObj.name+'');
            });
        });
    });
	$('#s_type').on('change', function(e){
        console.log(e);
        var state_id = e.target.value;
		

        $.get('{{ url('information') }}/create/ajax-state?state_id=' + state_id, function(data) {
            console.log(data);
            $('#s_items').empty();
            $.each(data, function(index,subCatObj){
                $('#s_items').append(''+subCatObj.name+'');
            });
        });
    });
  </script>
</body>
</html>
