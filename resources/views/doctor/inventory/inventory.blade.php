<!DOCTYPE HTML>
<html>
    <head>

        @include('doctor.nav_bar_doc')
        <title>Unicare - Inventory</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
    </head>

    <body>
        <div class="container">

            <div class="row" style="padding-top: 3rem">
                <div class="col s12">
                    <div class="card light-green white-text">
                        <div class="card-content">
                            <span class="card-title"><strong>Inventory - Summary</strong></span>
                            <table>
                                <tr><td>Number of drugs in stock</td><td>...</td></tr>
                                <tr><td>Drugs needing to restock</td><td>...</td></tr>
                                <tr><td>Last drug issued</td><td>...</td></tr>
                                <tr><td>Last restock date</td><td>...</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col s12">
                    <h1>WE NEED TO CHANGE THESE DOWN HERE.</h1>
                    <p>Let's make cards for some of these, if they're fit to remain
                    in the same page.</p>
                    
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


                        </div>
                    </div>
                    <div style="float:left; width:100%; padding-top: 50px ">
                        <h2>Add new item type</h2>
                        <form action="#" method="post">
                            <label>Select item type:&nbsp;&nbsp;
                                <select name="type" id="s_type" class="form-control input-sm">
                                    <option value="Drugs" selected="selected">Drugs</option>
                                    <option value="Equipments">Equipments</option>
                                </select>
                            </label>

                            <label>name: </label>&nbsp;<input type="text"  name="new_name" value="" />
                            <label>description: </label>&nbsp;<input   type="text"  name="new_description" value="" style="resize:both"  />

                        </form>

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
                else {
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
                else {
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
                else {
                    $("#s_equips").before($("#s_drugs"));
                    document.getElementById('s_equips').style.visibility = 'hidden';
                    document.getElementById('s_drugs').style.visibility = 'visible';
                }


            });





        </script>
    </body>
</html>
