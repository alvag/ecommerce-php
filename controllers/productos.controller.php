<?php

class ProductosController {

	static public function getCategories($item = null, $valor = null) {
		$table = "categorias";
		return ModeloProductos::getCategories($table, $item, $valor);
	}

	static public function getSubCategories($item, $valor) {
		$table = "subcategorias";
		return ModeloProductos::getSubCategories($table, $item, $valor);
    }

    static public function ctrlMostrarInfoProducto($item, $valor) {
        $table = "productos";
        return ModeloProductos::modelMostrarInfoProducto($table, $item, $valor);
    }

    public static function ctrlMostrarProductos($orderBy, $start, $limit, $item = null, $valor = null) {
        $table = "productos";
        return ModeloProductos::modelMostrarProductos($table, $orderBy, $start, $limit, $item, $valor);

    }

}
