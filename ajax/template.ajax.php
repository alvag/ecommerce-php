<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 19/11/17
 * Time: 12:02 AM
 */

require_once "../controllers/template.controller.php";
require_once "../models/template.model.php";

class AjaxTemplate {

	public function ajaxEstiloTemplate() {
		$respuesta = TemplateController::ctrlEstiloTemplate();
		echo json_encode($respuesta);
	}

}

$objeto = new AjaxTemplate();
$objeto -> ajaxEstiloTemplate();