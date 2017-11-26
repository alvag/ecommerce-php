<?php

class ProductosController {

	static public function ctrlMostrarCategorias($item = null, $valor = null) {
		$table = "categorias";
		return ModeloProductos::modelMostrarCategorias($table, $item, $valor);
	}

	static public function ctrlMostrarSubCategorias($item, $valor) {
		$table = "subcategorias";
		return ModeloProductos::modelMostrarSubCategorias($table, $item, $valor);
	}

}