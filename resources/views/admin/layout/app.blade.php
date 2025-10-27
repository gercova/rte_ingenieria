
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Gestión de Inventario</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">
        <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/jquery.dataTables.min.css') }}">
    <!-- file input -->
    <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">
    <!-- jquery -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script> 
    <!-- jquery ui -->  
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
    <script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}" media="print">
</head>
<body>
<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>
<!-- fullCalendar 2.2.5-->
    
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<a href="product.php" style="text-decoration:none;color:black;">
					Total de productos
					<span class="badge pull pull-right"><?php echo $countProduct; ?></span>	
				</a>
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
					Total ordenes
					<span class="badge pull pull-right"><?php echo $countOrder; ?></span>
				</a>
			</div><!--/panel-hdeaing-->
		</div><!--/panel-->
	</div><!--/col-md-4-->
	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="product.php" style="text-decoration:none;color:black;">
					Inventario bajo
					<span class="badge pull pull-right"><?php echo $countLowStock; ?></span>	
				</a>
			</div><!--/panel-hdeaing-->
		</div><!--/panel-->
	</div><!--/col-md-4-->
	<div class="col-md-4">
		<div class="card">
			<div class="cardHeader">
		    	<h1><?php echo date('d'); ?></h1>
		  	</div>

		  	<div class="cardContainer">
		    	<p><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
		  	</div>
		</div> 
		<br>
		<div class="card">
		  	<div class="cardHeader" style="background-color:#245580;">
		    	<h1>
		    		<?php 
		    			if($totalRevenue){echo number_format($totalRevenue,2);}
		    			else{echo '0';} 
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
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.js"></script>
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
</div> <!-- container -->
	<!-- file input -->
	<script src="assests/plugins/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>	
	<script src="assests/plugins/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>	
	<script src="assests/plugins/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="assests/plugins/fileinput/js/fileinput.min.js"></script>	
	<!-- DataTables -->
	<script src="assests/plugins/datatables/jquery.dataTables.js"></script>
</body>
</html>