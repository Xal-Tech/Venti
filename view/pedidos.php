<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<?php 
		include '../inc/link.php';
	?>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		include '../inc/navbar.php';
		include '../inc/jumbutron.php';
		include '../inc/carrito.php'
	 ?>
	 <div class="container-fluid">
	 	<div class="container text-center">
	 		<span style="font-size: 2vw;">PEDIDOS PENDIENTES</span>
	 	</div>
	 	<div class="container text-center">
	 		<div class="card">
	 			<div class="card-title">PARA: LENNYN LEYVA ANDRADE</div>
	 			<div class="card-body">
					<p>Dirección: Santa fe de la laguna #91 Col. Santa Fe de la Laguna</p>
					<p>Realizado a las: 16:43 HRS del dia 27/Abr/2020</p>
					<p><a class="btn btn-info" href="detalle_pedido.php">Ver Detalle</a></p>	
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>