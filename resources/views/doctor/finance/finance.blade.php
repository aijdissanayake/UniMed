<!DOCTYPE HTML>
<html>

<head>
    @include('doctor.nav_bar_doc')
    <title>Unicare - Finance</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

    <script type="text/javascript" src="\js\financeHome.js"></script>

</head>
<body class="grey lighten-4">
    <div class="container">
        <div class="row top-row">

            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-title green white-text">
                            <i class="material-icons left">list</i>
                            Recent Transactions 
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s8 l6">
                                    <select id="tType">
                                        <option value="" disabled selected>Transaction Type</option>
                                        <option value="1">Income</option>
                                        <option value="2">Expense</option>
                                        <option value="3">All</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                <table class="highlight bordered striped" id="Trxns">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Value (LKR)</th>
                                        </tr>
                                        </thead>
                                        <tbody id="trxnsBody">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col s12 m8 offselt-m2 offset-l2">
                    <div class="card">
                        <div class="card-title green white-text">
                            <i class="material-icons left">sort</i>
                            Summary - This Month
                        </div>
                        <div class="card-content">
                            <table class="highlight bordered">
                                <tr><th>Description</th><th>Value (LKR)</th></tr>
                                <tr>
                                <td>Income</td>
                                <td>{{$incomes}}</td>
                                </tr>
                                <tr>
                                <td>Less: Expenses</td>
                                <td>{{$expenses}}</td>
                                </tr>
                                <tr>
                                <td>Gross Profit</td>
                                <td>{{$incomes - $expenses}}</td>
                                </tr>
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
            </div>
            
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large waves-effect waves-circle red" data-position="left" data-delay="15">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating yellow tooltipped" data-position="left" data-delay="25" data-tooltip="New Transaction" href="{{route('addTransaction')}}"><i class="material-icons">payment</i></a></li>
                    <li><a class="btn-floating green tooltipped"  data-position="left" data-delay="25" data-tooltip="New Assistant" href="{{route('addAssistant')}}"><i class="material-icons">perm_identity</i></a></li>
                </ul>
            </div>
        </div>
    </body>
    </html>
