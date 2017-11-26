<?php

require_once "controllers/template.controller.php";
require_once "controllers/productos.controller.php";

require_once "models/template.model.php";
require_once "models/productos.model.php";
require_once "models/rutas.php";

$template = new TemplateController();
$template -> template();