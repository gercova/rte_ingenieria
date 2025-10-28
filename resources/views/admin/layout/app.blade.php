<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Gestión de Inventario</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  	<!-- custom css -->
  	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('plugins/datatables/jquery.dataTables.min.css') }}">
	<!-- file input -->
	<link rel="stylesheet" href="{{ asset('plugins/fileinput/css/fileinput.min.css') }}">
	<script>
        const API_URL = "{{ url('/') }}";
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    </script>
	<!-- jquery jquery-3.7.1.min.js -->
	<script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
	<!-- <script src="{{ asset('jquery/jquery.min.js') }}"></script> -->
	<!-- jquery ui -->  
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
	<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- <a class="navbar-brand" href="#">Brand</a> -->
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
			<ul class="nav navbar-nav navbar-right">        
				<li id="navDashboard">
					<a href="{{ route('home') }}"><i class="glyphicon glyphicon-list-alt"></i>  Inicio</a>
				</li>        
				<li id="navBrand">
					<a href="brand.php"><i class="glyphicon glyphicon-btc"></i>  Fabricantes</a>
				</li>
				<li id="navCategories">
					<a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i> Categorías</a>
				</li>
				<li class="dropdown" id="navProduct">
					<a href="{{ route('products') }}"> <i class="glyphicon glyphicon-ruble"></i> Productos </a>
				</li>
				<li class="dropdown" id="navOrder">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-shopping-cart"></i> Ordenes <span class="caret"></span></a>
					<ul class="dropdown-menu">            
						<li id="topNavAddOrder"><a href="orders.php?o=add"><i class="glyphicon glyphicon-plus"></i> Agregar Ordenes</a></li>            
						<li id="topNavManageOrder"><a href="orders.php?o=manord"><i class="glyphicon glyphicon-edit"></i> Gestionar Ordenes</a></li>            
					</ul>
				</li> 
				<li id="navReport"><a href="report.php"> <i class="glyphicon glyphicon-check"></i> Reportes </a></li>
				<li class="dropdown" id="navSetting">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li id="topNavSetting">
							<a href="setting.php"><i class="glyphicon glyphicon-wrench"></i> Configuración</a>
						</li>            
						<li id="topNavLogout">
							<a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Salir</a>
						</li>
						<li>
							<a href=""><i class="fa fa-user"></i> <?php #echo $_SESSION["username"]; ?></a>
						</li>
					</ul>
				</li>             
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		@yield('content')
	</div> <!-- container -->
	<!-- file input -->
	<script src="{{ asset('plugins/fileinput/js/plugins/canvas-to-blob.min.js') }}" type="text/javascript"></script>	
	<script src="{{ asset('plugins/fileinput/js/plugins/sortable.min.js') }}" type="text/javascript"></script>	
	<script src="{{ asset('plugins/fileinput/js/plugins/purify.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/fileinput/js/fileinput.min.js') }}"></script>	
	<!-- DataTables -->
	<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
</body>
</html>