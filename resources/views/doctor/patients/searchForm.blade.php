<form action="{{route('searchPatients')}}" method='POST'>
    <!--<div class='form-settings'> // not necessary for some reason-->

    {{ Form::open(['route'=>'searchPatients']) }}
    {{ csrf_field() }}
    <p><span>Search patient by</span>
        <select id="col_name" name="col_name"><option value=1>First Name</option><option value=2>Last Name</option><option value=3>Telephone No.</option></select>
        <input id="searchText" type="text" name="value" placeholder="Enter value here" value="" required=""/>
        <input class="submit" type="submit" name="searchButton" value="Search" />
    </p>



    <!--<input type="text" name="patientName" value="" />-->
    <!--{{ Form::submit('Search') }}-->

    {{ Form::close() }}

    <!--</div>-->
</form>  
