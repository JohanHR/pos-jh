<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=bsfjtyozryez85iy5bpq-mysql.services.clever-cloud.com;dbname=bsfjtyozryez85iy5bpq",
			            "u7ahjhw2ixs0hjqi",
			            "1lgyjYrFTgIODcTXCW2P");

		$link->exec("set names utf8");

		return $link;

	}

}