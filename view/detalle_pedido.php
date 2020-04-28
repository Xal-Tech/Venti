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
	 		<span style="font-size: 2vw;">DETALLE DEL PEDIDO DE: LENNYN LEYVA ANDRADE</span>
	 	</div>
	 	<div class="container text-center">
	 		<div class="row row-cols-1 row-cols-md-2">
			  <div class="col mb-4">
			    <div class="card">
			      <img class="img-fluid mx-auto d-block" src="https://mundoagropecuario.com/wp-content/uploads/2019/03/tomate-18-3-19.jpg" class="card-img-top" style="max-width: 200px;">
			      <div class="card-body">
			      		<div class="card-title">TOMATES</div>
			      		<p>CANT: 1KG</p>
						<p>Realizado a las: 16:43 HRS del dia 27/Abr/2020</p>
			      </div>
			    </div>
			  </div>

			  <div class="col mb-4">
			    <div class="card">
			      <img class="img-fluid mx-auto d-block" src="https://innatia.info/images/galeria/platano-2.jpg" class="card-img-top" style="max-width: 200px;">
			      <div class="card-body">
			      		<div class="card-title">PLATANOS</div>
			      		<p>CANT: .5 KG</p>
						<p>Realizado a las: 16:43 HRS del dia 27/Abr/2020</p>	
			      </div>
			    </div>
			  </div>
			</div>

			<div class="col" style="background-color: gray;">
				<div class="row">
					<div class="col-4">
						<span class="text-center"><a class="btn btn-info" href="#">VER MAPA</a></span>
					</div>
					<div class="col-4">
						<span class="text-center"><a class="btn btn-info" href="#">ACEPTAR PEDIDO</a></span>
					</div>
					<div class="col-4">
						<span class="text-center"><a class="btn btn-danger" href="#">NEGAR PEDIDO</a></span>
					</div>
				</div>
			</div>
	 	</div>
	 </div>
</body>
</html>