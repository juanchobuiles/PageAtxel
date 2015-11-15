<!DOCTYPE htlm>
<htlm lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Sesiones con php</title>
	<style>
		form {
			margin: 0 auto;
			text-align: center;
			width: 400px;
		}
		span 
			{
				color:#000;
				font-size:2em;
			}
			
	</style>
</head>
<body>
	<form name = "autentificacion_frm"    action="php/control.php"  method="post"  enctype="application/x-www-form-urlencode"> 
		<?php
			error_reporting(E_ALL ^ E_NOTICE);
			if($_GET["error"]=="si"){
				echo "<span> verifica tus datos<span/>";
			
			}else{
				echo "Introduce tus datos";
			}
		?>
		<br/> <br/>
		Usuario: <input type="text" name="usuario_txt" /> <br/> <br/>
		Contraseña: <input type="password" name="contraseña_txt" /> <br/> <br/>
		<input type="submit" name="entrar_btn" value="Ingresar"  />
		
	</form>
	
	
	
</body>
</htlm>
