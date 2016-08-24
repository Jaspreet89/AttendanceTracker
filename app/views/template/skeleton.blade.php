<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			@section('title')

			@show
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
		@if(Cookie::get('domain_hash'))
		{{ HTML::style('../public/css/bootstrap-'.(Domain::find(Cookie::get('domain_hash'))->theme ? Domain::find(Cookie::get('domain_hash'))->theme : 'default').'.min.css') }}
		@else
		<!-- {{ HTML::style('css/bootstrap-default.min.css') }} -->
		{{ HTML::style('../public/css/bootstrap.min.css') }}
		@endif
		{{ HTML::style('../public/css/font-awesome.min.css') }}
		{{ HTML::style('../public/css/style.css') }}
		<!--data tables -->
		{{ HTML::style('../public/css/dataTables.bootstrap.css') }}
		{{ HTML::style('../public/css/dataTables.responsive.css') }}
		<!--clock-->
		{{ HTML::style('../public/css/clock.css') }}
		
		<style type="text/css" class="init">
	body { font-size: 140% }

	table.dataTable th,
	table.dataTable td {
		white-space: nowrap;
	}
	</style>
		
		{{ HTML::script('../public/js/jquery-1.11.1.min.js') }}
		{{ HTML::script('../public/js/jquery.dataTables.min.js') }}
		{{ HTML::script('../public/js/dataTables.responsive.min.js') }}
		{{ HTML::script('../public/js/dataTables.bootstrap.js') }}
		<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {
	$('#enable_pagination').DataTable( {
		"bFilter": false,
		"pageLength": 25,
		"order": [[ 0, 'desc' ]]
	} );
} );


	</script>
	
	<!-- Include Bootstrap Datepicker -->
	{{ HTML::style('../public/css/datepicker.min.css') }}
	{{ HTML::style('../public/css/datepicker3.min.css') }}
	{{ HTML::script('../public/js/bootstrap-datepicker.min.js') }}
	
	<!-- Include Bootstrap Timepicker -->
	{{ HTML::style('../public/css/bootstrap-timepicker.min.css') }}
	{{ HTML::script('../public/js/bootstrap-timepicker.js') }}
		
	</head>

	<body style="margin-top: 10%">
		{{--@include('template.navigation')--}}

		@yield('content')

		{{--@include('template.footer')--}}

		<!-- Scripts -->
		<!-- {{ HTML::script('js/jquery.min.js') }} -->
		{{ HTML::script('../public/js/bootstrap.min.js') }}
		{{ HTML::script('../public/js/plugins.js') }}
		{{ HTML::script('../public/js/script.js') }}
		<!--  clock  -->
		{{ HTML::script('../public/js/moment.min.js') }}
		{{ HTML::script('../public/js/clock.js') }}


<script type="text/javascript">
            $('.timepicker').timepicker({
	         showSeconds: true,
	         showMeridian: false,
	         defaultTime:''   
            });
            $('.duration').timepicker({
	         showSeconds: true,
	         showMeridian: false,
	         defaultTime:''   
            });

</script>
        
        
<script>
$(document).ready(function() {
    $('.datePicker')
        .datepicker({
            format: 'dd/mm/yyyy',
            todayHighlight: true,
            autoclose: true
        })
});
</script>		

		
	</body>
</html>
