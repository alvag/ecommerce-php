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

    static public function ctrlMostrarInfoProducto($item, $valor) {
        $table = "productos";
        return ModeloProductos::modelMostrarInfoProducto($table, $item, $valor);
    }

    public static function ctrlMostrarProductos($orderBy, $start, $limit, $item = null, $valor = null) {
        $table = "productos";
        return ModeloProductos::modelMostrarProductos($table, $orderBy, $start, $limit, $item, $valor);

    }

}