<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión RTE</title>
    <meta charset="utf-8">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  	<!-- custom css -->
  	<link rel="stylesheet" href="{{ asset('custom/css/custom.css') }}">
  	<!-- jquery -->
	<script src="{{ asset('jquery/jquery.min.js') }}"></script>
  	<!-- jquery ui -->  
  	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
  	<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
  	<!-- bootstrap js -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
	<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Inicio de sesión</h3>
					</div>
					<div class="panel-body">
						<div class="message">
							<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									{{ $message }}
                            </div>
						</div>

						<form class="form-horizontal" method="post" id="loginForm">
                            @csrf
							<fieldset>
							  <div class="form-group">
									<label for="username" class="col-sm-3 control-label">Usuario</label>
									<div class="col-sm-9">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" autocomplete="off" required />
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-3 control-label">Contraseña</label>
									<div class="col-sm-9">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="off" required />
									</div>
								</div>								
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									  <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Ingresar</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- panel-body -->
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	
</body>
</html>