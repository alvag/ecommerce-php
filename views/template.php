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
	$template = TemplateController ::ctrlStyleTemplate();
	echo '<link rel="icon" href="./backend/'.$template['icono'] . '">';

	?>
	<link rel="stylesheet" href="views/assets/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="views/assets/css/plugins/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

	<!-- estilos personalizados -->

	<link rel="stylesheet" href="views/assets/css/main.css">
	<link rel="stylesheet" href="views/assets/css/header.css">
	<link rel="stylesheet" href="views/assets/css/slide.css">
	<link rel="stylesheet" href="views/assets/css/productos.css">


</head>
<body>

	<?php
	include "modules/header.php";

	$rutas = array();
	$ruta = null;
	$infoProducto = null;

	if(isset($_GET["ruta"])) {
		$rutas = explode("/", $_GET["ruta"]);

		$item = "ruta";
		$valor = $rutas[0];

		// validar url categorias
		$categoria = ProductsController ::getCategories($item, $valor);

		if ($rutas[0] == $categoria["ruta"]) {
			$ruta = $rutas[0];
		}

		// validar url subcategorias
		$rutaSubcategorias = ProductsController ::getSubCategories($item, $valor);

		foreach($rutaSubcategorias as $key => $value) {
			if ($rutas[0] == $value["ruta"]) {
				$ruta = $rutas[0];
			}
		}

		// validar url de productos
        $rutaProductos = ProductsController::ctrlMostrarInfoProducto($item, $valor);
        if ($rutas[0] == $rutaProductos["ruta"]) {
            $infoProducto = $rutas[0];
        }


		if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto") {
			include "modules/productos.php";
		} elseif ($infoProducto != null) {
            include "modules/infoproducto.php";
        } else {
			include "modules/error404.php";
		}

	} else {
		include "modules/slide.php";
		include "modules/destacados.php";
	}
	?>

	<script src="views/assets/js/plugins/jquery.min.js"></script>
	<script src="views/assets/js/plugins/bootstrap.min.js"></script>
	<script src="views/assets/js/plugins/jquery.easing.js"></script>
	<script src="views/assets/js/plugins/jquery.scrollUp.js"></script>
	<!-- scripts personalizados-->
	<script src="views/assets/js/header.js"></script>
	<script src="views/assets/js/template.js"></script>
	<script src="views/assets/js/slide.js"></script>
</body>
</html>
