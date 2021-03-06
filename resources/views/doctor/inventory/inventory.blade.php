<!DOCTYPE HTML>
<html>
    <head>

        @include('doctor.nav_bar_doc')
        <title>Unicare - Inventory</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <script src="\js\inventory.js"></script>
    </head>

    <body class="grey lighten-4">
        <div class="container">



            <div class="row" style="padding-top: 3rem">
                <div class="col s12 m12 l12">
                    <div class="card teal darken-3
                         white-text">
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
            </div>





            <div class="row" style="padding-top: 3rem">

                <!--update inventory section-->
                <div class = "col s12 m6 ">
                    <div class="card ">
                        <div class="card-title  teal accent-4 white-text">
                            <i class="material-icons left">mode_edit</i>
                            Update Inventory
                        </div>
                        <div class="card-content">
                            <form action="{{route('addItem')}}" method="post" id="update_form">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select id="update_type" name="update_type" required>
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1">Drugs</option>
                                            <option value="2">Equipments</option>
                                        </select>
                                        <label>Item type</label>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select id="update_items" name="update_items" required>
                                            <option value="" disabled selected>Choose your option</option>
                                        </select>
                                        <label>Item name</label>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="input-field col l6">
                                        <input name="quantity" id="quantity" type="number" class="validate" required>
                                        <label for="quantity">Quantity</label>
                                    </div>                                                       
                                </div>

                                <div class="row">
                                    <div class="col s6 m6 l7">
                                        <p>
                                            <input name="add_remove" type="radio" id="update_add"  value="add" required />
                                            <label for="update_add">Add</label>
                                        </p>
                                        <p>
                                            <input name="add_remove" type="radio" id="update_remove" value="remove" />
                                            <label for="update_remove">Remove</label>
                                        </p>

                                    </div>

                                    <div class="col ">
                                        <button class="btn waves-effect waves-light " type="submit" name="action">Update
                                            <i class="material-icons right">send</i>
                                        </button>    
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


                <!--Search inventory section-->
                <div class = "col s12 m6 l6">
                    <div class="card ">
                        <div class="card-title  teal accent-4 white-text">
                            <i class="material-icons left">search</i>
                            Search Inventory
                        </div>
                        <div class="card-content">
                            <form action="{{route('searchItem')}}" method="post" id="search_form">
                                {{ csrf_field() }}
                                <div class="input-field col s12">
                                    <select id="search_type" name="search_type" required>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Drugs</option>
                                        <option value="2">Equipments</option>
                                    </select>
                                    <label>Item type</label>
                                </div>

                                <br><br>

                                <div class="input-field col s12">
                                    <select id="search_items" name="search_items" required>
                                        <option value="" disabled selected>Choose your option</option>

                                    </select>
                                    <label>Item name</label>
                                </div>


                                <br><br>
                                <button class="btn waves-effect waves-light" type="submit" name="action">Search
                                    <i class="material-icons right">send</i>
                                </button>

                            </form>  
                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal Structure for search results-->
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4 id="modal_header"></h4>
                    <table>
                        <tr><td>Item type</td><td id = "search_result_type">...</td></tr>
                        <tr><td>Number items in stock</td><td id = "search_result_quantity">...</td></tr>
                        <tr><td>Description</td><td id = "search_result_description">...</td></tr>
                        <tr><td>Restock</td><td>...</td id = "search_result_restock"></tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
                </div>
            </div>


            <!-- FAB-->

            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                    <a class="btn-floating btn-large waves-effect waves-circle red" data-position="left" data-delay="15">
                        <i class="large material-icons">mode_edit</i>
                    </a>
                    <ul>
                        <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="25" data-tooltip="New Inventory Item" href="{{route('addItem')}}"><i class="material-icons">person_add</i></a></li>
                        <li><a class="btn-floating yellow tooltipped" data-position="left" data-delay="25" data-tooltip="New Visit Record" href="{{route('newVisitRecord')}}"><i class="material-icons">note_add</i></a></li>
                        <li><a class="btn-floating green tooltipped"  data-position="left" data-delay="25" data-tooltip="View Statistics" href="{{route('stats')}}"><i class="material-icons">info_outline</i></a></li>
                    </ul>
            </div>



            <!-- <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large btn tooltipped waves-effect waves-circle cyan darken-4" data-position="left" data-delay="50" data-tooltip="Inventory settings" href="{{route('inventorySettings')}}">
                    <i class="large material-icons">settings</i>
                </a>
            </div> -->

        </div>

    </body>
</html>
