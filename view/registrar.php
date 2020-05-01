<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<?php 
		include '../inc/link.php';
	?>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<?php 
		
		include '../inc/jumbutron.php';
		include '../inc/carrito.php';
	 ?>
	<div class="container" style="margin-bottom: 80px;">
	 	<div class="card" style="margin-bottom: 40px;">
	 		<div class="card-title">
	 			<center>
	 			<strong><h2>Crea una cuenta</h2></strong>
	 			<br>
	 			<h5>Es rápido y sencillo</h5>
	 			</center>
	 		</div>
	 	</div>
	 	<div class="container-fluid">
	 		<form  action="login/create-account.php" method="POST">
	 			<div class="form-group">
	 				<input type="text" class="form-control" name="username" placeholder="Nombre Completo">
	 			</div>
	 			<div class="form-group">
	 				<input type="text" class="form-control" name="cellnumber" placeholder="Telefono celular">
	 			</div>
	            <div class="form-group">
	            	<input type="password" class="form-control" name="password" placeholder="Contraseña">
	            </div>
	            <div class="form-group">
	            	<input class="form-check-input" type="checkbox" id="terminos-y-condiciones-checkbox" required>
	            	<label class="form-check-label">Aceptar <a href="#">términos y condiciones</a></label>
	            </div>
	            <button class="btn btn-info" type="submit" value="Crear cuenta">Crear cuenta</button>
        	</form>
	 	</div>
	 </div>
	 <div class="registro container-fluid fixed-bottom">
	<center> <p class="tienes-cuenta">
            Ya tienes cuenta? <a href="login.php" id="iniciar-sesion-boton">Iniciar sesi&oacute;n</a>
        </p></center>
	 </div>
</body>
</html>