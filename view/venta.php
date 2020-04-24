<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<?php 
		include '../inc/link.php';
	?>
	<link rel="stylesheet" type="text/css" href="../css/venta.css">
	<meta charset="UTF-8">
	<title>Vender</title>
</head>
<body>
	<?php 
		include '../inc/navbar.php';
	 ?>
	<div class="jumbotron"  >
		<div class="row align-items-center">
			<span class="col-6 float-left"><center><h1 style="font-family: Pacifico; color: white;">MARQUET</h1></center></span>
			<span class="col-6"><center><img src="../images/logo-marquet.png" alt="Logo"></center></span>
		</div>
	</div>
<<<<<<< HEAD

	<div class="container-fluid">
		<div class="container">
			<form  class="align-items-centeraction" method="get" accept-charset="utf-8">
				<div class="form-group">
					<label class="info">Nombre del producto</label><br>
					<input type="text" class="form-control"  name="producto" placeholder="Nombre del producto">
				</div>
				<div class="form-group">
					<label for="unidad">Tipo de unidad de venta</label>
					<select name="unidad" id="unidad" class="form-control">
						<option selected>Elegir...</option>
						<option>KG</option>
						<option>Unidad</option>
					</select>
				</div>
				<div class="form-group">
					<label class="info">Precio del producto por medida:</label><br>
					<input type="text" class="form-control"  name="precio" placeholder="Precio/Medida">
				</div>
				<div class="form-group">
					<label for="input-imagen">Imagen</label>
	    			<input type="file" class="form-control-file" id="input-imagen" name="input-imagen">
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-info">Registrar Producto</button>
				</div>
			</form>
		</div>

		
		<center><div class="container-fluid" id="titulo">Ingresar Producto</div></center>
		<div class="container-fluid" id="input-productos">
		<label class="info">Nombre del producto</label><br>
		<input type="text" class="form-control"  name="producto" placeholder="Nombre del producto">	<br>
		<label class="info">Tipo de unidad para venta</label><br>
		<div class="dropdown">
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >
	    Unidad 
	  </button>
	  <div class="dropdown-menu">
	    <a class="dropdown-item" href="#">Kg</a>
	    <a class="dropdown-item" href="#">g</a>
		<a class="dropdown-item" href="#">Unidad</a>
		<a class="dropdown-item" href="#">mL</a>
		<a class="dropdown-item" href="#">L</a>
	  	</div>
		</div><br>
		<label class="info">Precio del producto por medida:</label><br>
		<input type="text" class="form-control"  name="precio" placeholder="Precio/Medida"><br>
		<label class="info">Sube la foto del producto</label><br>
		<input type="file" id="input-imagen" name="imagen" class="buttons">
		</div>
=======
	<center><div class="container-fluid" id="titulo">Ingresar Producto</div></center>
	<div class="container-fluid" id="input-productos">
	<label class="info">Nombre del producto</label><br>
	<input type="text" class="form-control"  name="producto" placeholder="Nombre del producto">	<br>
	<label class="info">Tipo de unidad para venta</label><br>
	<div class="dropdown">
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >
    Unidad 
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Kg</a>
    <a class="dropdown-item" href="#">g</a>
	<a class="dropdown-item" href="#">Unidad</a>
	<a class="dropdown-item" href="#">mL</a>
	<a class="dropdown-item" href="#">L</a>
  	</div>
	</div><br>
	<label class="info">Precio del producto por medida:</label><br>
	<input type="text" class="form-control"  name="precio" placeholder="Precio/Medida"><br>
	<label class="info">Sube la foto del producto</label><br>
	<input type="file" id="input-imagen" name="imagen" class="buttons"><br>
	<center><button class="btn btn-info" id="ingresar-produ" type="submit" value="ingresar-producto">Ingresar Producto</button></center>

>>>>>>> origin/develop
	</div>

	



</body>
</html>