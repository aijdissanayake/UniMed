{{ Form::open(['route'=>'searchPatients']) }}
{{ csrf_field() }}
    <input type="text" name="patientName" value="" />
    {{ Form::submit('Search') }}
        
{{ Form::close() }}
