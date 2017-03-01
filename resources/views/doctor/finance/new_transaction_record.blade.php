<!DOCTYPE HTML>
<html>

    <head>
        @include('doctor.nav_bar_doc')
        <title>Unicare - New Transaction</title>
        <script type="text/javascript" src="\js\transactions.js"></script>
    </head>

    <body class="grey lighten-4">
        <div class="container">
            <div class="row top-row">

                <div class="col s12">
                    <div class="card">
                        <div class="card-title green white-text">
                            <i class="material-icons left">euro_symbol</i>
                            New Transaction
                        </div>
                        <form action="{{route('createTx')}}">
                            {{csrf_field()}}
                            <div class="card-content">
                                <div class="row" style="margin-bottom: 0px">
                                    @if (count($errors) > 0)
                                    <div class="amber darken-4 card-content white-text" style="margin-bottom: 20px">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="input-field col s8 l6">
                                        <label style="margin: -35px 0px 10px 0px">Transaction type</label>
                                        <select name="tType" id="tType" class="browser-default" style="margin-bottom: 20px">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Income</option>
                                            <option value="2">Expense</option>
                                        </select>

                                    </div>
                                    <div class="input-field col s8 l6">
                                        <label style="margin: -35px 0px 10px 0px">Transaction Subtype</label>
                                        <select name="tSubType" id="tSubType" class="browser-default">
                                            <option value="" disabled selected id="subtypeSelector">Select</option>
                                            <option value="-1">Create New...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 0px">
                                    <div id="defineSubType">
                                        <div class="input-field col s8 l6">
                                            <input name="subTypeName" id="subTypeName" type="text" class="validate">
                                            <label for="subTypeName">Subtype Name</label>
                                        </div>
                                        <div class="input-field col s8 l6">
                                            <input name="subTypeDesc" id="subTypeDesc" type="text" class="validate">
                                            <label for="subTypeDesc">Subtype Description</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Transaction value input-->
                                <div class="row" style="margin-bottom: 0px">
                                    <div class="input-field col s8 l6">
                                        <input name="trxn_value" type="number" class="validate" min="0" max="99999999" value="{{old('trxn_value')}}">             
                                        <label for="trxn_value">Transaction Value (LKR)</label>
                                    </div>
                                    <div class="col s8 l6">
                                        <label>Transaction Date :</label>
                                        <input type="date" id="trxnDate" class="datepicker" name="trxnDate" required="true">
                                        <p class="grey-text" style="font-size: 0.8rem">Change this value if recording past transactions.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea name="remarks" class="materialize-textarea" style="padding-bottom: 0px" value="{{old('remarks')}}"></textarea>
                                        <label for="remarks">Remarks</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col s12 center-align">
                                        <button class="waves-effect green btn" ><i class="material-icons right">send</i>Add Entry</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
