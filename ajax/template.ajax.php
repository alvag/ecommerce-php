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

	public function ajaxStyleTemplate() {
		$response = TemplateController::ctrlStyleTemplate();
		echo json_encode($response);
	}

}

$ajax = new AjaxTemplate();
$ajax -> ajaxStyleTemplate();
