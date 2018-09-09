<?php

class ProductsController {

	static public function getCategories($item = null, $valor = null) {
		return ProductsModel::getCategories($item, $valor);
	}

	static public function getSubCategories($item, $valor) {
		return ProductsModel::getSubCategories($item, $valor);
    }

    static public function ctrlMostrarInfoProducto($item, $valor) {
        $table = "productos";
        return ProductsModel::modelMostrarInfoProducto($table, $item, $valor);
    }

    public static function getProducts($orderBy, $start, $limit, $item = null, $valor = null) {
        return ProductsModel::getProducts($orderBy, $start, $limit, $item, $valor);

    }

}
