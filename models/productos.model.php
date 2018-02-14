<?php

    require_once "conexion.php";

    class ModeloProductos
    {

        static public function modelMostrarCategorias($table, $item, $valor)
        {
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

        static public function modelMostrarSubCategorias($table, $item, $valor)
        {
            $stmt = Conexion::conectar()->prepare("select * from $table where $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);
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

        /**
         * Retorna 4 productos
         *
         * @param $table
         * @param $orderBy
         * @return array 4 productos
         */
        static public function modelMostrarProductos($table, $orderBy, $item, $valor)
        {
            if ($item != null) {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY $orderBy DESC LIMIT 4");
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
                $stmt->execute();
            } else {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $table ORDER BY $orderBy DESC LIMIT 4");
                $stmt->execute();
            }
            return $stmt->fetchAll();

        }

    }