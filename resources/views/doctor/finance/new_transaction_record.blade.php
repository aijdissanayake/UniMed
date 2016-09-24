<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - add_new_patients</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    </head>

    <body>
        <div class="container">
            <div class="row top-row">

                <div class="col s12">
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
                                    <textarea id="trxnDscrptn" class="materialize-textarea" style="padding-bottom: 0px"></textarea>
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
        </div>
    </body>
</html>
