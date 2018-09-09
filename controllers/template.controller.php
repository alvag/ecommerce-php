<?php

class TemplateController {

	// llama la plantilla
	public function template() {
	    include "./views/template.php";
	}

	// trae los estilos de la plantilla
	public static function ctrlStyleTemplate() {
		$table = "template";
		$response = TemplateModel::modelStyleTemplate($table);
        return $response;
	}
}
