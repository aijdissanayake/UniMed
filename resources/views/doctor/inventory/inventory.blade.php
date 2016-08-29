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
                
                
                    
                    
                    
                        <div class="row" style="padding-top: 3rem">

                            <div class = "col s12 m6 l6">
                                <div class="card ">
                                    <div class="card-content">

                                        <h5>Update inventory</h5>

                                        
                                            <form action="{{route('addItem')}}" method="post">
                                                    <div class="input-field col s12">
                                                        <select>
                                                          <option value="" disabled selected>Choose your option</option>
                                                          <option value="1">Option 1</option>
                                                          <option value="2">Option 2</option>
                                                          <option value="3">Option 3</option>
                                                        </select>
                                                        <label>Item type</label>
                                                    </div>                                               
                                                    
                                                    <div class="input-field col s12">
                                                        <select>
                                                          <option value="" disabled selected>Choose your option</option>
                                                          <option value="1">Option 1</option>
                                                          <option value="2">Option 2</option>
                                                          <option value="3">Option 3</option>
                                                        </select>
                                                        <label>Item name</label>
                                                    </div>
                                                    
                                                        
                                                    <div class="row">
                                                    <div class="input-field col l6">
                                                        <input id="quantity" type="number" class="validate">
                                                        <label for="quantity">Quantity</label>
                                                    </div>
                                                        
                                                    </div>
                                                    
                                                    
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                                        <i class="material-icons right">send</i>
                                                    </button>

                                                    
                                                
                                            </form>
                                        
                                        
                                    </div>
                                </div>
                            </div>



                            <div class = "col s12 m6 l6">
                                    <div class="card ">
                                        <div class="card-content">
                                            <h5>Search inventory</h5>
                                            <form action="{{route('searchItem')}}" method="post">
                                                
                                                    <div class="input-field col s12">
                                                        <select>
                                                          <option value="" disabled selected>Choose your option</option>
                                                          <option value="1">Option 1</option>
                                                          <option value="2">Option 2</option>
                                                          <option value="3">Option 3</option>
                                                        </select>
                                                        <label>Item type</label>
                                                    </div>
                                                
                                                <br><br>
                                                
                                                    <div class="input-field col s12">
                                                        <select>
                                                          <option value="" disabled selected>Choose your option</option>
                                                          <option value="1">Option 1</option>
                                                          <option value="2">Option 2</option>
                                                          <option value="3">Option 3</option>
                                                        </select>
                                                        <label>Item name</label>
                                                    </div>
                                                    
                                                
                                                <br><br>
                                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                <i class="material-icons right">send</i>
                                                </button>

                                            </form>  
                                        </div>
                                    </div>
                                </div>
                        </div>


                    <div class="row" style="padding-top: 3rem">

                            <div class = "col s12 m12 l12">
                                <div class="card">
                                    <div class="card-content">
                                            <h5>Add new item type(seperate settings page?)</h5>
                                            <form action="#" method="post">
                                                <p>Select item type:&nbsp;&nbsp;
                                                    <div class="input-field col s12">
                                                        <select>
                                                          <option value="" disabled selected>Choose your option</option>
                                                          <option value="1">Option 1</option>
                                                          <option value="2">Option 2</option>
                                                          <option value="3">Option 3</option>
                                                        </select>
                                                        <label>Materialize Select</label>
                                                    </div>
                                                </p>

                                                <p>name: </p><input type="text"  name="new_name" value="" />
                                                <p>description: </p><input   type="text"  name="new_description" value="" style="resize:both"  />

                                            </form> 
                                    </div>
                                </div>
                             </div>
                    </div>
            

            </div>

        </div>

    </body>
</html>
