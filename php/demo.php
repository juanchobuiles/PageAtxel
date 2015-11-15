<?php 


$nombre = $_POST["demoNombre_txt"];
$apellido=$_POST["demoApellido_txt"];
$email = $_POST["demoEmail_txt"];
$telefono=$_POST["demoTelefono_txt"];
$celular= $_POST["demoCelular_txt"];
$asunto =$_POST["demoAsunto_txt"];
$comentarios = $_POST["demoComentarios_txa"];

$de="Demo@atxel.com";
$para="soporte1@atxel.com , julianbuilesc@gmail.com";
$mensaje= "
<!DOCTYPE  html> 
<html lang='es'> 
<head>
  <meta charset='charset=UTF-8' /> 
  <title>Prueba de correo</title>
   
</head> 
<body> 
<h2>Desde el formulario Demo ha llegado la siguiente solicitud</h2> 
<table style='font-size:13px; color:#000000; borde:thin solid #cccccc; margin: 1 auto; whidth:80%; text-aling:left;'>
        <tbody>

          <tr>
            <td bgcolor='#cccccc' style='color:#ffff; text-aling:left; width:25%;'><div><strong>NOMBRES: </strong></div></td>
            <td bgcolor='#F2F3F8' width='75%'>".$nombre."</td>
          </tr>
          <tr>
            <td bgcolor='#cccccc' style='color:#ffff; text-aling:left; width:25%;'><div><strong>APELLIDOS: </strong></div></td>
            <td bgcolor='#F2F3F8' width='75%'>".$apellido."</td>
          </tr>
          <tr>
            <td bgcolor='#cccccc' style='color:#ffff; text-aling:left; width:25%;'><div><strong>TELEFONO FIJO: </strong></div></td>
            <td bgcolor='#F2F3F8' width='75%'>".$telefono."</td>
          </tr>
          <tr>
            <td bgcolor='#cccccc' style='color:#ffff; text-aling:left; width:25%;'><div><strong>TELEFONO CELULAR: </strong></div></td>
            <td bgcolor='#F2F3F8' width='75%'>".$celular."</td>
          </tr>
          <tr>
            <td bgcolor='#cccccc' style='color:#ffff; text-aling:left; width:25%;'><div><strong>CORREO ELECTRONICO: </strong></div></td>
            <td bgcolor='#F2F3F8' width='75%'>".$email."</td>
          </tr>
          <tr>
            <td bgcolor='#cccccc' style='color:#ffff; text-aling:left; width:25%;'><div><strong>CORREO ASUNTO: </strong></div></td>
            <td bgcolor='#F2F3F8' width='75%'>".$asunto."</td>
          </tr>
          <tr>
            <td bgcolor='#cccccc' style='color:#ffff; text-aling:left; width:25%;'><div><strong>COMENTARIOS: </strong></div></td>
            <td bgcolor='#F2F3F8' width='75%'>".$comentarios."</td>
          </tr>
</body> 
</html> 
"; 
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=UTF-8\r\n";
$cabeceras .= "From: $de \r\n";
$respuesta = (mail($para,$asunto,$mensaje,$cabeceras))?"Los Datos han sido enviados. En las próximas 24 Horas un asesor se comunicara con ustedes.":"Ocurrio un error. Los datos no se enviaron.";
echo $respuesta;


?>