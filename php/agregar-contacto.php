<?php
// asigno a variables de php los vlaores que vienen del formulatio 
$email = $_POST["email_txt"];
$nombre = $_POST["nombre_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];

$imagen_generica = ($sexo=="M")?"img/fotos/amigo.png":"img/fotos/amiga.png";

// verifiamos que no exista el usuario
include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if ($num_regs==0) {
	// se ejecuta la funcion para subir la imagen
	// include("funciones.php");
	// $tipo = $_FILES["foto_fls"]["type"];
	// $archivo= $_FILES["foto_fls"]["tmp_name"];
	// $se_subio_imagen = subir_imagen($tipo , $archivo , $email);

	// $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

	$consulta = "INSERT INTO contactos(email , nombre , sexo , nacimiento , telefono , pais , imagen) VALUES ('$email','$nombre','$sexo','nacimiento','$telefono','$pais','$imagen')";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
	if ($ejecutar_consulta) {
		$mensaje="Se creo Correctamente el contacto ";
	} else {
		$mensaje="No se pudo Crear el contacto Intente de nuevo";
	}
	

} else {
	$mensaje ="usuario ya existe";
}

$conexion->close();
header("Location:../index.php");


?>