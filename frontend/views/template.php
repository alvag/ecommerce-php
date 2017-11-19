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
		$icono = TemplateController::ctrlEstiloTemplate();
		echo '<link rel="icon" href="../backend/'.$icono['icono'].'">';
	?>
	<link rel="stylesheet" href="views/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/plugins/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="views/css/main.css">
	<link rel="stylesheet" href="views/css/header.css">


</head>
<body>

	<?php
		include "modules/header.php";
	?>

	<script src="views/js/plugins/jquery.min.js"></script>
	<script src="views/js/plugins/bootstrap.min.js"></script>
	<script src="views/js/header.js"></script>
	<script src="views/js/template.js"></script>
</body>
</html>