<?php
	function conectarse()
	{
		// $servidor="localhost";
		// $usuario="root";
		// $password="";
		// $bd="atxel";
		// $servidor="localhost:5432";
		// $usuario="root";
		// $password="datax865";
		// $bd="atxel_demo";

		// $conectar = new php_postgresql ($servidor , $usuario , $password , $bd) or die("no se pudo conectar al servidor de base de datos");
		// return $conectar;
		$usuario = 'atxel_root';
		$passwd = 'atxel';
		$bd = 'atxel_demo';
		$port = 5432;
		$host = 'localhost';
		$strCnx = "host=$host port=$port dbname=$bd user=$usuario password=$passwd";
		$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
		return $conectar; 

	}
	$conexion= conectarse();
 ?>
 