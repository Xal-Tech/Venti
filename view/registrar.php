<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<?php 
		include '../inc/link.php';
	?>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<?php 
		include '../inc/navbar.php';
	 ?>
	<div class="jumbotron" >
		<div class="row align-items-center">
		<span class="col-lg-10 col-6"><h1 style="font-family: Pacifico; color: white;">MARQUET</h1></span>
			<span class="col-lg-1 order-1 col-1"><img src="../images/logo-marquet.png" alt="Logo" ></span>
			<span class="col-lg-1 col-3"><a href="carrito.php"><img src="../images/shopping-cart.png" alt="cart" ></a></span>
		</div>
	</div>
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
</body>
</html>