<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - Finance</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

    </head>
    <body class="grey lighten-4">
        <div class="container">
            <div class="row top-row">

                <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-title green white-text">
                                <i class="material-icons left">list</i>
                                Recent Transactions 
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field col s8 l6">
                                        <select>
                                            <option value="" disabled selected>Transaction Type</option>
                                            <option value="1">Income</option>
                                            <option value="2">Expense</option>
                                            <option value="3">All</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table class="highlight bordered">
                                            <tr><th>No.</th><th>Date</th><th>Type</th><th>Description</th><th>Value (LKR)</th></tr>
                                            <tr><td>1.</td><td></td><td></td><td></td><td></td></tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-title green white-text">
                                <i class="material-icons left">euro_symbol</i>
                                New Transaction
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field col s8 l6">
                                        <select>
                                            <option value="" disabled selected>Transaction Type</option>
                                            <option value="1">Income</option>
                                            <option value="2">Expense</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s8 l6">
                                        <input id="trxn_vale" type="number" class="validate">             
                                        <label for="trxn_value">Transaction Value (LKR)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="trxnDscrptn" class="materialize-textarea"></textarea>
                                        <label for="trxnDscrptn">Transaction Description</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col s12 center-align">
                                        <button class="waves-effect green btn" type="submit"><i class="material-icons right">send</i>Add Entry</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-title green white-text">
                                <i class="material-icons left">sort</i>
                                Summary - This Month
                            </div>
                            <div class="card-content">
                                <table class="highlight bordered">
                                    <tr><th>Description</th><th>Value (LKR)</th></tr>
                                    <tr><td>Income</td><td></td><td></td></tr>
                                    <tr><td>Less: Expenses</td><td></td><td></td></tr>
                                    <tr><td>Gross Profit</td><td></td><td></td></tr>
                                </table>
                            </div>
                            
                            <div class="card-title">
                            <i class="material-icons left">speaker_notes</i>
                            Custom Periods
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s6">
                                    <label for="trxn_value"><h6>From:</h6></label>
                                    <input id="date_from" type="date" class="datepicker">             
                                </div>
                                <div class="col s6">
                                    <label for="trxn_value"><h6>To:</h6></label>
                                    <input id="date_to" type="date" class="datepicker">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 center-align">
                                    <a class="waves-effect green btn"><i class="material-icons left">history</i>Show Transactions</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <div class="col s12 l6">

                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-title green white-text">
                                <i class="material-icons left" style="vertical-align:middle">person_add</i>
                                Add a New Assistant
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" type="text" class="validate">
                                    </div>
                                    <div class="input-field col s6">
                                        <label for="last_name">Last Name</label>
                                        <input id="last_name" type="text" class="validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <label for="birth_year">Birth Year</label>
                                        <input id="birth_year" type="text" class="validate">
                                    </div>
                                    <div class="input-field col s6">
                                        <label for="tp_no">Telephone No.</label>
                                        <input id="tp_no" type="text" class="validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="home_address">Home Address</label>
                                        <textarea id="home_address" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12" align="right">
                                        <a class="waves-effect green btn"><i class="material-icons left">add</i>Add</a>
                                    </div>
                                </div>  
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
