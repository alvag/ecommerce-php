<?php

    require_once "controllers/template.controller.php";
    require_once "controllers/products.controller.php";
    require_once "controllers/slide.controller.php";

    require_once "models/template.model.php";
    require_once "models/products.model.php";
    require_once "models/slide.model.php";

    require_once "models/rutas.php";

    $template = new TemplateController();
    $template->template();
