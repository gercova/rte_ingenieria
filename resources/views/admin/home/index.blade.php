@extends('admin.layout.app')
@section('content')
<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>
<!-- fullCalendar 2.2.5-->
<link rel="stylesheet" href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}" media="print">
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<a href="product.php" style="text-decoration:none;color:black;">
					Total de productos
					<span class="badge pull pull-right"><?php // echo $countProduct; ?></span>	
				</a>
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
					Total ordenes
					<span class="badge pull pull-right">{{ $totalOrders }}</span>
				</a>
			</div><!--/panel-hdeaing-->
		</div><!--/panel-->
	</div><!--/col-md-4-->
	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="product.php" style="text-decoration:none;color:black;">
					Inventario
					<span class="badge pull pull-right">{{ $totalProducts }}</span>	
				</a>
			</div><!--/panel-hdeaing-->
		</div><!--/panel-->
	</div><!--/col-md-4-->
	<div class="col-md-4">
		<div class="card">
			<div class="cardHeader">
		    	<h1>{{ date('d') }}</h1>
		  	</div>

		  	<div class="cardContainer">
		    	<p>{{ date('l') .' '.date('d').', '.date('Y') }}</p>
		  	</div>
		</div> 
		<br>
		<div class="card">
		  	<div class="cardHeader" style="background-color:#245580;">
		    	<h1>
		    		<?php 
		    			#if($totalRevenue){echo number_format($totalRevenue,2);}
		    			#else{echo '0';} 
		    		?>		
		    	</h1>
		  	</div>
		  	<div class="cardContainer">
		    	<p><i class="glyphicon glyphicon-usd"></i> Ingresos totales</p>
		  	</div>
		</div> 
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="glyphicon glyphicon-calendar"></i> Calendario</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
	</div>
</div> <!--/row-->
<!-- fullCalendar 2.2.5 -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/fullcalendar/fullcalendar.js') }}"></script>
<script type="text/javascript">
	$(function(){
		// top bar active
		$('#navDashboard').addClass('active');
      	//Date for the calendar events (dummy data)
      	var date = new Date();
      	var d = date.getDate(),
      	m = date.getMonth(),
      	y = date.getFullYear();

      	$('#calendar').fullCalendar({
			monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
        	header: {
          		left: '',
          		center: 'title'
        	},
        	buttonText: {
          		today: 'today',
          		month: 'month'          
        	}        
    	});
    });
</script>
@endsection