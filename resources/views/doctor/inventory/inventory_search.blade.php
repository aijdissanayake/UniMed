<!DOCTYPE HTML>
<html>
<head>

    @include('doctor.navBarDoctor')
<title>Unicare - Inventory</title>
<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
<link rel="stylesheet" type="text/css" href="/style/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>

</head>

<body>
<div id="main">
    <div id="header">
        <div id="logo">
            <h1>Unicare Medical</h1>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                <li><a href="{{route('homeTab')}}">Home</a></li>
                <li><a href="{{route('patientsTab')}}">Patients</a></li>
                <li><a href="{{route('financeTab')}}">Finance</a></li>
                <li class='current'><a href="{{route('inventoryTab')}}">Inventory</a></li>
                <li><a href="{{route('labTab')}}">Lab</a></li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div id="content">
            <!-- insert the page content here -->
            <div>
                <div style="float:left; width:50%; ">
                    <h2 style="color:#F14E23">Add items</h2>

                    <div class="form-group" >
                        <form action="{{route('addItem')}}" method="post">
                            {{ csrf_field() }}
                            <label>Select item type:

                            </label>&nbsp;

                            <select id="a_type" name="a_type"  class="form-control input-sm">
                                <option value="Drugs" selected="selected">Drugs</option>
                                <option value="Equipments" >Equipments</option>
                            </select>
                            <br><br>
                            <label>Select item:
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <select id="a_drugs" class="form-control input-sm" name="a_drugs">
                                    @foreach($items[0] as $item)
                                        <option value={{$item->drugName}}>{{$item->drugName}}</option>
                                    @endforeach
                                </select>

                                <select id="a_equips" class="form-control input-sm" name="a_equips">
                                    @foreach($items[1] as $item)
                                        <option value={{$item->equipmentName}}>{{$item->equipmentName}}</option>
                                    @endforeach
                                </select>
                                <br><br>
                            </label>
                            <label>quantity</label>&nbsp;<input type="number" min="0" name="a_quantity" value="" />
                            <input type="submit" name="Add" value="Add" />
                        </form>
                    </div>
                </div>

                <div style="float:left; width:50%; ">
                    <h2 style="color:#F14E23">Remove items</h2>
                    <div class="form-group">
                        <form action="{{route('removeItem')}}" method="post">
                            {{ csrf_field() }}
                            <label>Select item type:
                                &nbsp;
                                <select name="r_type" id="r_type" class="form-control input-sm">
                                    <option value="Drugs" selected="selected">Drugs</option>
                                    <option value="Equipments">Equipments</option>
                                </select>
                            </label>&nbsp;
                            <br><br>
                            <label>Select item:
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <select id="r_drugs" class="form-control input-sm" name="r_drugs">
                                    @foreach($items[0] as $item)
                                        <option value={{$item->drugName}}>{{$item->drugName}}</option>
                                    @endforeach
                                </select>
                                <select id="r_equips" class="form-control input-sm" name="r_equips">
                                    @foreach($items[1] as $item)
                                        <option value={{$item->equipmentName}}>{{$item->equipmentName}}</option>
                                    @endforeach
                                </select>
                                <br><br>
                            </label>
                            <label>quantity</label>&nbsp;<input type="number" min = "0"; name="r_quantity" value="" />
                            <input type="submit" name="remove" value="Remove" />
                        </form>
                    </div>
                </div>
                <p></p>
                <p></p>

                <div style="float:left; width:30%; ">
                    <p>&nbsp</p>
                    <h2 style="color:#F14E23">Search inventory</h2>
                    <form action="{{route('searchItem')}}" method="post">
                        {{ csrf_field() }}
                        <label>Select item type:&nbsp;&nbsp;
                            <select name="type" id="s_type" class="form-control input-sm">
                                <option value="Drugs" selected="selected">Drugs</option>
                                <option value="Equipments">Equipments</option>
                            </select>
                        </label>
                        <br><br>
                        <label>Select item:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="s_drugs" class="form-control input-sm" name="s_drugs">
                                @foreach($items[0] as $item)
                                    <option value={{$item->drugName}}>{{$item->drugName}}</option>
                                @endforeach
                            </select>
                            <select id="s_equips" class="form-control input-sm" name="s_equips">
                                @foreach($items[1] as $item)
                                    <option value={{$item->equipmentName}}>{{$item->equipmentName}}</option>
                                @endforeach
                            </select>
                        </label>
                        <br><br>
                        <input type="submit" name="search" value="Search" />
                    </form>
                </div>

                <div style="float:left; width:70%; ">
                    <br><br><br><br>
                    <table style="width:100%; border-spacing:0;">
                        <tr><th>Name</th><th>Description</th><th>Current Stock</th></tr>
                        <tr><td></td><td></td><td></td></tr>
                        <tr><td></td><td></td><td></td></tr>

                    </table>

                </div>
            </div>
            <div style="float:left; width:100%; padding-top: 50px ">
                <h2>Add new item type</h2>
            </div>
        </div>


    </div>

    <div id="footer">
        <p>&nbsp;</p>
    </div>
</div>
<script>

    document.getElementById('a_equips').style.visibility = 'hidden';
    document.getElementById('r_equips').style.visibility = 'hidden';
    document.getElementById('s_equips').style.visibility = 'hidden';

    $('#a_type').on('change', function (e) {

        var state_id = e.target.value;
        var select = document.getElementById('a_items');


        if (state_id == "Equipments") {
            console.log(e);
            $("#a_drugs").before($("#a_equips"));
            document.getElementById('a_drugs').style.visibility = 'hidden';
            document.getElementById('a_equips').style.visibility = 'visible';

        }
        else{
            $("#a_equips").before($("#a_drugs"));
            document.getElementById('a_equips').style.visibility = 'hidden';
            document.getElementById('a_drugs').style.visibility = 'visible';
        }


    });

    $('#r_type').on('change', function (e) {

        var state_id = e.target.value;
        var select = document.getElementById('r_items');


        if (state_id == "Equipments") {
            console.log(e);
            $("#r_drugs").before($("#r_equips"));
            document.getElementById('r_drugs').style.visibility = 'hidden';
            document.getElementById('r_equips').style.visibility = 'visible';

        }
        else{
            $("#r_equips").before($("#r_drugs"));
            document.getElementById('r_equips').style.visibility = 'hidden';
            document.getElementById('r_drugs').style.visibility = 'visible';
        }


    });


    $('#s_type').on('change', function (e) {

        var state_id = e.target.value;
        var select = document.getElementById('s_items');


        if (state_id == "Equipments") {
            console.log(e);
            $("#s_drugs").before($("#s_equips"));
            document.getElementById('s_drugs').style.visibility = 'hidden';
            document.getElementById('s_equips').style.visibility = 'visible';

        }
        else{
            $("#s_equips").before($("#s_drugs"));
            document.getElementById('s_equips').style.visibility = 'hidden';
            document.getElementById('s_drugs').style.visibility = 'visible';
        }


    });





</script>
</body>
</html>
