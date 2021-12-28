<!DOCTYPE html>
<?php
  $page_title = 'Barcode';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php include_once('layouts/header.php'); ?>
<html>

<head>
	<title>Codigo de barras</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="JsBarcode.all.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
</head>
<body>

	<div class="container">
		<div class="row">
			<h2>Generar codigo de barras</h2>
			<div class="col-sm-4">
				<form action="php/insertar.php" method="post">
					<label>Nombre</label>
					<input type="text" id="nombre" name="nombre" class="form-control">
					<p></p>
					<button class="btn btn-primary" href="indexb.php" type="submit">
						Crear y generar nuevo codigo
					</button>
					<hr>
				</form>
			</div>
		</div>
		<?php 
	require "tabla.php";
	?>
	</div>

	<br>
	
</body>
</html>
<?php include_once('layouts/footer.php'); ?>