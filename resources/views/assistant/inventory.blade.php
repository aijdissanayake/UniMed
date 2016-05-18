@extends('layouts.appLayout')

@section('header')
@include('assistant.navBarAssistant')
<title>Unicare - Inventory</title>
@stop

@section('body')
<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <h1>Unicare Medical</h1>
            </div>
            <div id="menubar">
                <ul id="menu">
                    <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                    <li><a href="{{route('ast')}}">Home</a></li>
                    <li><a href="{{route('astFinance')}}">Finance</a></li>
                    <li class="current"><a href="{{route('astInventory')}}">Inventory</a></li>
                    <li><a href="{{route('astLab')}}">Lab</a></li>
                </ul>
            </div>
        </div>
        <div id="site_content">
            <div id="content"> 
                <!-- insert the page content here -->


                <div>
                    <h3 style="color:#F14E23">Search inventory</h3>
                    <p></p>
                    <p></p>
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
</body>
@stop