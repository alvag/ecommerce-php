<?php

class ProductosController {

	static public function ctrlMostrarCategorias($item = null, $valor = null) {
		$table = "categorias";
		return ModeloProductos::modelMostrarCategorias($table, $item, $valor);
	}

	static public function ctrlMostrarSubcategorias($id) {
		$table = "subcategorias";
		return ModeloProductos::modelMostrarSubcategorias($table, $id);
	}

}