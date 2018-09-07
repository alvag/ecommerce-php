<?php

class TemplateController {

	// llama la plantilla
	public function template() {
	    include "./views/template.php";
	}

	// trae los estilos de la plantilla
	public static function ctrlEstiloTemplate() {
		$tabla = "template";
		$respuesta = TemplateModel::modelStyleTemplate($tabla);
        return $respuesta;
	}
}
