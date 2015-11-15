<?php
	function conectarse()
	{
		$servidor="localhost";
		$usuario="root";
		$password="";
		$bd="atxel";
		$conectar = new mysqli ($servidor , $usuario , $password , $bd) or die("no se pudo conectar al servidor de base de datos");
		return $conectar;
		

	}
	$conexion= conectarse();
 ?>
 