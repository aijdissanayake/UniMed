<html>
    <head>
        @include('doctor.nav_bar_doc')
        <title> Testing Chart</title>
        <script src="http://code.jquery.com/jquery-1.7.min.js" type="text/javascript"></script>
 <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    
	<script type="text/javascript"> </script>
    </head>
    <body>
<div id="container" style="width:100%; height:400px;"></div>
<script type="text/javascript" src="{{ asset('js/highcharts.js') }}"></script>

<script type="text/javascript">
    $(function () {
        $('#container').highcharts(
            {!! json_encode($arrayChart) !!}
        );
    });
</script>
                <div class="panel-body">
                </div>
<a href ="{{route('stats')}}" > Back </a>         
</body>
</html>