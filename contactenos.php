<!DOCTYPE html>
<html lang="en">
<head>
    <title>ATXEL - Sistemas de información. DataX - Sistema integrado para gestión empresarial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/atxelStyles.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script>
		$(window).load(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
    </script>
	<script language="JavaScript" type="text/JavaScript">
	<!--

function revisar_forma(form)
{
	if (form.nombre.value == "")
        {
	 alert("Olvido Escribir El Nombre");
	 form.nombre.focus();
	 return false;
	}

        if (form.telefono.value == "")
	{
	 alert("Olvido Escribir El Telefono");
	 form.telefono.focus();
	 return false;
	}

        if (form.celular.value == "")
	{
	 alert("Olvido Escribir El Celular");
	 form.celular.focus();
	 return false;
	}

	if(form.direccion.value == "")
	{
	 alert("Olvido Escribir La Direccion");
	 form.direccion.focus();
	 return false;
	}

	if ((form.email.value.indexOf ('@', 0) == -1)||(form.email.value.indexOf ('.', 0) == -1))
	{
  	 alert("Olvido Escribir El E-Mail O No Tiene el formato - correo@suempresa.com");
 	 form.email.focus();
	 return false;
	}

        if(form.ciudad.value == "")
	{
	 alert("Olvido Escribir La Ciudad");
	 form.ciudad.focus();
	 return false;
	}

	if(form.comentario.value == "")
	{
 	 alert("Olvido Escribir El Comentario");
	 form.comentario.focus();
	 return false;
	}
	
	alert('Sus datos seran enviados, un momento por favor..');
	return true;
}
	//-->
	</script>
	<script type="text/JavaScript">
	<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
	//-->
	</script>
	<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAA2owQ33uDoMBvZrfCiPVZThT-Zr2s8Yi_1KVOJ6DWCcbmJaNRphRPk5KiG_lFQtTWFHaspK2VdG23Fg" type="text/javascript"></script>
</head>
<body>
<div id="principal">
	<div id="top">
		<div id="logos">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="23%" align="left" style="vertical-align: bottom;"><img src="images/txtSoluciones.png" alt="Soluciones rápidas y eficientes" /></td>
					<td width="15">&nbsp</td>
					<td width="24%" align="right"><img src="images/logoDatax.png" alt="DataX Software Sistema Integrado para la gestión empresarial" /></td>
					<td width="5">&nbsp</td>
					<td width="33%" align="right"><a href="index.html"><img src="images/logoAtxel.png" alt="Axtel Sistemas de Información Ltda" border="0" /></a></td>
				</tr>
			</table>
		</div>
		<div id="menu">
			<div class="rightbg">
				<div class="leftbg">
					<div class="padding">
						<ul>
							<li><a href="index.html">INICIO</a></li>
							<li><a href="productos.html">PRODUCTOS</a></li>
							<li><a href="clientes.html">REFERENCIAS</a></li>
							<li><a href="http://www.atxel.com/Demo/Formularios/login.php">ADMINISTRACIÓN</a></li>
							<li><a href="http://www.atxel.com/Demo/Formularios/frmDescarga.php">DESCARGAR DEMO</a></li>
							<li><a href="contactenos.php">CONTÁCTENOS</a></li>
						</ul>
					<br class="clear" />
					</div>
				</div>
			</div>
		</div>
	</div>
  <div id="contenido">
    <div id="asistencia" style="float:left;">
      <h3><img src="images/logoAsistencia.png" alt="Aistencia telefónica" />Contactenos para que podamos atenderlo</h3>
			<h2>Calle 55 Norte Av 3BN-41</h2>
			Barrio La Flora.<br />
			<strong>Tel&eacute;fonos : 3747262 - 8880352 - 6659136</strong><br />
			<strong>M&oacute;vil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 313 6135894</strong><br />
			<strong>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="mailto: logistica@atxel.com">logistica@atxel.com</a></strong><br />
			Cali - Valle<br />
			<p><strong>Asistencia técnica telefónica. </strong><br />
			Si las circunstancias lo requieren, la asistencia presencial se prestará en un termino no mayor de veinticuatro (24) horas.</p>
		</div>
  </div>
  <p><?php 
	//Indicamos que v&aacute;mos a enviar el formulario por m&eacute;todo POST
	if (!$_POST)
	{	
?>
                </p>
			
			
                <table width="409" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="409" class="textosinteriores1"><strong class="small Estilo2">Con agrado lo atendemos: </strong></td>
                  </tr>
                  <tr>
                    <td class="textint"><p><em><br />
                      </em><span class="small Estilo2">A trav&eacute;s de este formato puede contactarnos y solicitar nuestros servicios. Adicionalmente puede dejarnos sus comentarios:</span><span class="small Estilo2"> </span></p>
                        <p>&nbsp;</p></td>
                  </tr>
                </table>
                 <form action="" method="post" name="form" id="form">
                <table width="280" border="0" align="center" cellpadding="3" cellspacing="3">
               
                  <tr>
                    <td width="60" class="small"><em>Nombre:</em></td>
                    <td class="small"><input name="nombre" value = "" type="text" class="cajasform" id="nombre" /></td>
                  </tr>
                  <tr>
                    <td class="small"><em>Tel&eacute;fono:</em></td>
                    <td class="small"><input name="telefono" type="text" value = ""  class="cajasform" id="telefono" /></td>
                  </tr>
                  <tr>
                    <td class="small"><em>Celular:</em></td>
                    <td class="small"><input name="celular" type="text" value = ""  class="cajasform" id="celular" /></td>
                  </tr>
                  <tr>
                    <td class="small"><em>Direcci&oacute;n:</em></td>
                    <td class="small"><input name="direccion" type="text" value = ""  class="cajasform" id="direccion" /></td>
                  </tr>
                  <tr>
                    <td class="small"><em>E-mail:</em></td>
                    <td class="small"><input name="email" type="text" value = ""  class="cajasform" id="email" /></td>
                  </tr>
                  <tr>
                    <td class="small"><em>Ciudad:</em></td>
                    <td class="small"><input name="ciudad" type="text" value = "" class="cajasform" id="ciudad" /></td>
                  </tr>

                 </table>
               

                <table width="350" align="center" class="small">
                  <tr>
                    <td width="110" valign="top" class="small"><em>Comentarios</em><em>: </em></td>
                    <td class="textint"><textarea name="comentario" value = "" cols="40" rows="8" class="textint" id="comentario">Digite aqu&iacute; detalles de su solicitud o comentarios.</textarea></td>
                  </tr>
                  <tr>
                    <td valign="top" class="textosinteriores1">&nbsp;</td>
                    <td class="textint"><input name="Submit" type="button" class="textobotonform" value="Enviar" onclick="if (revisar_forma(document.form)) document.form.submit();" />
                        <input name="Submit2" type="reset" class="textobotonform" value="Borrar" /></td>
                  </tr>


                </table>
                </form>
                <p>&nbsp;</p>
              
			  
			
			<div id="map" style="width: 450px; height: 350px"></div>
		    
			<script type="text/javascript">
                   //<![CDATA[
				   
                   window.onload = showMap;
				   
				 //  function createInfoMarker(point, address) 
				  // {
                  //
				   // var marker = new GMarker(point);
                   // GEvent.addListener(marker, "click", function() { marker.openInfoWindowHtml(address); } );
                   // return marker;
					// 
                   //}
				   
                  function showMap()
                  {
				  
                     var map = new GMap(document.getElementById("map"));
					 var AtxelPoint = new GPoint(-76.536357,3.453975);
					 var address = 'ATXEL LTDA';
					 //var label = createInfoMarker(AtxelPoint, address);
				 	 var label = new GMarker(AtxelPoint);
				 	 
					 //Controles del Mapa 
					 //------------------------------------------------------------
					 
					  map.addControl(new GMapTypeControl());
                      map.addControl(new GLargeMapControl());
                      map.addControl(new GScaleControl());
                      map.addControl(new GOverviewMapControl());
                      map.setMapType(G_HYBRID_MAP);
					  
					 //Ubicacion de Atxel
					 //------------------------------------------------------------
					  
					  map.centerAndZoom(AtxelPoint,1);
					  
					  map.addOverlay(label);
					 
					 
					 
                  }
                  //]]>
            </script>		
			
			 
              <p>
                  <?php
}
	else
{ 
        $cuerpo = "Formulario enviado con los siguientes datos:<br><br>";
	$cuerpo .= "<table>";
	$cuerpo .= "<tr>";
        $cuerpo .= "<td bgcolor=#2665A5 width=2%><b>Nombre:</b></td> " . $_POST["nombre"] . "<br>";
	$cuerpo .= "</tr>"; 
	$cuerpo .= "<tr>";
        $cuerpo .= "<td bgcolor=#899FC8 width=2%><b>Telefono:</b></td> " . $_POST["telefono"] . "<br>";
	$cuerpo .= "</tr>"; 
	$cuerpo .= "<tr>";
        $cuerpo .= "<td bgcolor=#2665A5 width=2%><b>Celular:</b></td> " . $_POST["celular"] . "<br>";
	$cuerpo .= "</tr>"; 
	$cuerpo .= "<tr>";
	$cuerpo .= "<td bgcolor=#899FC8 width=2%><b>Direccion:</b></td> " . $_POST["direccion"] . "<br>"; 
	$cuerpo .= "</tr>"; 
	$cuerpo .= "<tr>"; 
	$cuerpo .= "<td bgcolor=#2665A5 width=2%><b>E-Mail:</b></td> " . $_POST["email"] . "<br>";
	$cuerpo .= "</tr>"; 
	$cuerpo .= "<tr>"; 
	$cuerpo .= "<td bgcolor=#899FC8 width=2%><b>Ciudad:</b></td> " . $_POST["ciudad"] . "<br>";
	$cuerpo .= "</tr>"; 
	$cuerpo .= "<tr>"; 
	$cuerpo .= "<td bgcolor=#2665A5 width=2%><b>Comentario:</b></td> " . $_POST["comentario"] . "<br>"; 
	$cuerpo .= "</tr>"; 
	$cuerpo .= "</table>";

	$enviado = mail("info@atxel.com","Formulario desde la web",stripslashes($cuerpo),"From: FormularioWeb\r\nContent-type: text/html\r\n");
} 
?>
  
	<div id="copy">
		Copyright &copy; 2014  -   ATXEL LTDA
		<div id="descarga"><img src="images/botDescargarDemo.png" alt="Descargar demo" /></div>
	</div>
</div>
</body>
</html>
