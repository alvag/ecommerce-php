<?php

    require_once "conexion.php";

    class ProductsModel {
        static public function getCategories($item, $valor) {
            $table = "categorias";
            if ($item != null) {
                $stmt = Conexion::conectar()->prepare("select * from $table where $item = :$item");
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch();
            } else {
                $stmt = Conexion::conectar()->prepare("select * from $table");
                $stmt->execute();
                return $stmt->fetchAll();
            }
        }

        static public function getSubCategories($item, $valor) {
            $table = "subcategorias";
            $stmt = Conexion::conectar()->prepare("select * from $table where $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        static public function modelMostrarInfoProducto($table, $item, $valor)
        {
            $stmt = Conexion::conectar()->prepare("select * from $table where $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }

        static public function getProducts($orderBy, $start, $limit, $item, $valor) {
            $table = "productos";
            if ($item != null) {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY $orderBy DESC LIMIT $start, $limit");
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
                $stmt->execute();
            } else {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $table ORDER BY $orderBy DESC LIMIT $start, $limit");
                $stmt->execute();
            }
            return $stmt->fetchAll();

        }

    }
