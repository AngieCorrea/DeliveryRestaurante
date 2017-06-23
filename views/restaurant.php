<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>eat happy</title>
	<link rel="stylesheet" href="views/css/estilos.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="views/css/bootstrap.min.css" media="screen">
</head>

<body>
	<?php
	include 'views/overall/menu.php';
	?>
	
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Registrar Restaurante </h3>
			 			</div>
			 			<div class="panel-body">
			 			<div id="mensaje">
			 				<h1>mensaje</h1>
			 			</div>
			    		<form method="post" id="formdata">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="name" id="idname" class="form-control input-sm" placeholder="nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="ruc" id="idruc" class="form-control input-sm" placeholder="RUC">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="direccion" id="iddireccion" class="form-control input-sm" placeholder="Dirección">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="telfono" name="telefono" id="idtelefono" class="form-control input-sm" placeholder="Teléfono">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<?php
  											include 'models/cargarLugares.php';
			    						?>

			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input id="botonenviar"  value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="views/js/ajaxRestaurante.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="views/js/bootstrap.min.js"></script>
</body>

</html>