<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/11/17
 * Time: 12:14 PM
 */

require_once "conexion.php";

class TemplateModel {

	static public function modelStyleTemplate($tabla) {

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
        return $stmt->fetch();
	}

}
