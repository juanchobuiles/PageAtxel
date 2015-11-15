<?php 


$nombre = $_POST["demoNombre_txt"];
$apellido=$_POST["demoApellido_txt"];
$email = $_POST["demoEmail_txt"];
$telefono=$_POST["demoTelefono_txt"];
$celular= $_POST["demoCelular_txt"];
$asunto =$_POST["demoAsunto_txt"];
$comentarios = $_POST["demoComentarios_txa"];

include("conexion.php");
$consulta = "SELECT * FROM demoContactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if ($num_regs==0) {
   $consulta = "INSERT INTO demoContactos(email , nombre , apellido , telefono , celular ,  asunto , comentarios) VALUES ('$email','$nombre','$apellido','$telefono','$celular','$asunto','$comentarios')";
  $ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta) {
    $respuesta="A ingresado correctamente los Datos ";
  
  } else {
    $respuesta="No se pudo Crear el contacto Intente de nuevo";
  }
  

} else {
  $respuesta ="Los Datos que a ingresado ya existen";
}

$conexion->close();

echo $respuesta;

?>