<form action="{{route('searchLabReports')}}" method='POST'>
<!--<div class='form-settings'> // not necessary for some reason-->

{{ Form::open(['route'=>'searchLabReports']) }}
{{ csrf_field() }}

    <p><span>Search patient by</span>
		<select id="id" name="col_name"><option value=1>First Name</option><option value=2>Last Name</option><option value=3>Telephone No.</option></select>
                <input type="text" name="value" placeholder="Enter value here" value="" required=""/>
		<input class="submit" type="submit" name="searchButton" value="Search" />
		</p>



    <!--<input type="text" name="patientName" value="" />-->
    <!--{{ Form::submit('Search') }}-->
        
{{ Form::close() }}

<!--</div>-->
</form>  
