<?php

require_once "conexion.php";

class SlideModel {

	static public function mostrarSlide($table) {
		$stmt = Conexion::conectar()->prepare("select * from $table");
		$stmt->execute();
		$data = $stmt->fetchAll();
		$stmt = null;
		return $data;
	}

}