<?php

require_once "conexion.php";

class ModeloProductos {

	static public function modelMostrarCategorias($table, $item, $valor) {

		if($item != null) {
			$stmt = Conexion ::conectar() -> prepare("select * from $table where $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		} else {
			$stmt = Conexion ::conectar() -> prepare("select * from $table");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}

//		$stmt -> close();
		$stmt = null;

	}

	static public function modelMostrarSubcategorias($table, $id) {
		/*$stmt = Conexion::conectar()->prepare("select * from subcategorias where id_categoria =".$id);
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;*/

		$stmt = Conexion ::conectar() -> prepare("select * from $table where id_categoria = :id_categoria");
		$stmt -> bindParam(":id_categoria", $id, PDO::PARAM_INT);
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}

}