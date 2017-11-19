<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/11/17
 * Time: 12:08 PM
 */

class Conexion {

	public static function conectar() {

		// trae lso caracteres en escritura latina sin ningun problema
		$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

		$link = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "", $options);

		return $link;

	}

}