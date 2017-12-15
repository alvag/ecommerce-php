<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="title" content="Tienda Virtual">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque distinctio eius error et ex
		exercitationem explicabo.">
	<meta name="keyword" content="keyword 1, keyword 2, keyword 3">

	<title>Tienda Virtual</title>
	<?php
	$url = Ruta ::getRuta();
	$urlBackend = Ruta ::getRutaServidor();
	$icono = TemplateController ::ctrlEstiloTemplate();
	echo '<link rel="icon" href="'.$urlBackend.$icono['icono'] . '">';

	?>
	<link rel="stylesheet" href="<?php echo $url ?>views/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url ?>views/css/plugins/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

	<!-- estilos personalizados -->

	<link rel="stylesheet" href="<?php echo $url ?>views/css/main.css">
	<link rel="stylesheet" href="<?php echo $url ?>views/css/header.css">
	<link rel="stylesheet" href="<?php echo $url ?>views/css/slide.css">
	<link rel="stylesheet" href="<?php echo $url ?>views/css/productos.css">


</head>
<body>

	<?php
	include "modules/header.php";

	$rutas = array();
	$ruta = null;

	if(isset($_GET["ruta"])) {
		$rutas = explode("/", $_GET["ruta"]);

		$item = "ruta";
		$valor = $rutas[0];

		// validar url categorias
		$rutaCategorias = ProductosController ::ctrlMostrarCategorias($item, $valor);

		if ($rutas[0] == $rutaCategorias["ruta"]) {
			$ruta = $rutas[0];
		}

		// validar url subcategorias
		$rutaSubcategorias = ProductosController ::ctrlMostrarSubCategorias($item, $valor);

		foreach($rutaSubcategorias as $key => $value) {
			if ($rutas[0] == $value["ruta"]) {
				$ruta = $rutas[0];
			}
		}

		if($ruta != null) {
			include "modules/productos.php";
		} else {
			include "modules/error404.php";
		}

	} else {
		include "modules/slide.php";
		include "modules/destacados.php";
	}
	?>

	<script src="<?php echo $url ?>views/js/plugins/jquery.min.js"></script>
	<script src="<?php echo $url ?>views/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url ?>views/js/plugins/jquery.easing.js"></script>
	<!-- scripts personalizados-->
	<script src="<?php echo $url ?>views/js/header.js"></script>
	<script src="<?php echo $url ?>views/js/template.js"></script>
	<script src="<?php echo $url ?>views/js/slide.js"></script>
</body>
</html>