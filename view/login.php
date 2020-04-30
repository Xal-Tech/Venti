<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<?php 
		include '../inc/link.php';
	?>
	<meta charset="UTF-8">
	<title>Iniciar sesion</title>
</head>
<body>
	<?php 
		include '../inc/jumbutron.php';
     ?>
<div class="container" style="margin-bottom: 80px;">
	 	<div class="card" style="margin-bottom: 40px;">
	 		<div class="card-title">
	 			<center>
	 			<strong><h2>Inicia Sesíon</h2></strong>
	 			<br>
	 			<h5>Es rápido y sencillo</h5>
	 			</center>
             </div>
</div>
    <div class="container-fluid">
    <form  action="login/create-account.php" method="POST">
	 			<div class="form-group">
	 				<input type="text" class="form-control" name="username" placeholder="Telefono celular">
	 			</div>
	 			<div class="form-group">
                 <input type="password" class="form-control" name="password" placeholder="Contraseña">
                 </div>
                <button class="btn btn-info" type="submit" value="Iniciar sesion">Iniciar sesíon </button>
</div>
<div class="registro container-fluid fixed-bottom">
	<center> <p class="tienes-cuenta">
            No tienes cuenta? <a href="registrar.php" id="iniciar-sesion-boton">Crear cuenta</a>
        </p></center>
	 </div>
</body>
</html>