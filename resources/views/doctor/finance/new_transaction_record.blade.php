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
                                <div class="row">
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="input-field col s8 l6">
                                        <select name="tType" id="tType">
                                            <option value="" disabled selected>Transaction Type</option>
                                            <option value="1">Income</option>
                                            <option value="2">Expense</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s8 l6">
                                        <select name="tSubType" id="tSubType">
                                            <option value="" disabled selected>Subtype</option>
                                            <option value="-1">Create New...</option>
                                        </select>
                                    </div>
                                    <div id="defineSubType">
                                        <div class="input-field col s8 l6">
                                            <input name="subTypeName" type="text" class="validate">
                                            <label for="subTypeName">Subtype Name</label>
                                        </div>
                                        <div class="input-field col s8 l6">
                                            <input name="subTypeDesc" type="text" class="validate">
                                            <label for="subTypeDesc">Subtype Description</label>
                                        </div>
                                        
                                    </div>
                                    <!--Transaction value input-->
                                    <div class="input-field col s8 l6">
                                        <input name="trxn_value" type="number" class="validate" min="0" max="99999999" value="{{old('trxn_value')}}">             
                                        <label for="trxn_value">Transaction Value (LKR)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea name="trxnDescription" class="materialize-textarea" style="padding-bottom: 0px" value="{{old('trxnDescription')}}"></textarea>
                                        <label for="trxnDescription">Transaction Description</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col s12 center-align">
                                        <a href=""><button class="waves-effect green btn" ><i class="material-icons right">send</i>Add Entry</button></a>
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
