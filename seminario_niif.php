<?php include("php/sesion.php"); ?>
<!DOCTYPE html>
<html  lang="es" class="seminario_html">
    <head>
      <!--<title>ATXEL - Sistemas de información. DataX - Sistema integrado para gestión empresarial</title>-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta name="apple-mobile-web-app-status-bar-style" content="default">
     <link rel="shortcut icon" type="image/x-icon" href="ICO_DataX.ico">
     <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
     <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
     <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
     <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
     <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

     <link rel="stylesheet" href="css/seminario.css">
    </head>
    <body class="seminario_body">
      <header class="seminario_header">
          <div Class="seminario_header_left">
            <figure class = "seminario_log_izq"><a href="http://www.atxel.com/" title="atxel.com"><img src="images/logoAtxel2.png"></a></figure>
          </div>
          <div Class="seminario_header_left">
            <figure class = "seminario_log_der"><a href="http://www.atxel.com/demo.html" title="Descargar Demo"><img src="images/logoDatax2.png"></a></figure>
          </div>
      </header>
      <div class="titulo">
        <h1>Balance de Adopción</h1>
        <h3><img src="images/logoDatax.png" alt="" width="70px" height="30px" /> - NIIF</h3>
      </div>
      <section class="Colum1">
        <dl>
          <dt class="">Introducción </dt>
          <dd class=""></dd>

          <dt>Catálogos</dt>
          <dd>
            <video controls preload poster="images/logoAtxel.png">
              <source src="video/catalogos.mp4" type="video/mp4" />
            </video>
          </dd>

          <dt>Configuración. Plan de Cuentas , Parámetros</dt>
          <dd>
            <video controls preload poster="images/logoAtxel.png">
              <source src="video/Plan_de_centas_Parametros.mp4" type="video/mp4" />
            </video>
          </dd>

          <dt>Configuración. Equivalencias </dt>
          <dd>
            <video controls preload poster="images/logoAtxel.png">
              <source src="video/equivalencias.mp4" type="video/mp4" />
            </video>
          </dd>

          <dt>Conversión. Políticas </dt>
          <dd></dd>

          <dt>Conversión. Generación Saldos Apertura</dt>
          <dd>
            <video controls preload poster="images/logoAtxel.png">
               <source src="video/Conversion-Saldos_de_apertura.mp4" type="video/mp4" />
             </video>
           </dd>
          

          <dt>Conversión. Ajustes a cuentas, Otros Ajustes , Revelaciones , Informes  </dt>
          <dd><video controls preload poster="images/logoAtxel.png">
               <source src="video/Conversion-Ajustes.mp4" type="video/mp4" />
             </video>
          </dd>
       
        </dl>
      </section>
      <section class="Colum2">
        <div class="colum2_titulo">
            <h2>Archivos De Descarga</h2>
        </div>
        <article class="colum2_article1">
          <p>
            Descargar Actualizador:
          </p>
          <a  href="https://mega.nz/#!PoNmXZ4L!UcIENGmC8nazhL0dDxVhygObcD8FnQ4lvVyCdsIeQ3Y" title = "Descargar Actuaizador de NIIF"  target = "_blank" ><img class="animar" src="images/zip.png" alt="" /></a>
        </article>
        <article class="colum2_article2">
          <p>
            Descargar Demo:
          </p>
          <a  href="https://mega.nz/#!j1tzmJ7I!E7JXXhaMpVxPz52g4-MivAyQIQ1MeygfUE6L0sMnmWM" title = "Descargar Demo"  target = "_blank" ><img class="animar" src="images/botDescargarDemo.png" alt="" /></a>
        </article>
        <article class="colum2_article3">
          <p>
              Descargar Ejercicio en Excel:
          </p>
          <a  href="pdf/Estructura_Ejercicio_Datax.xlsx" title="Descargar Ejecicio en Excel"><img class="animar" src="images/excel.png" alt="" /></a>

        </article>
        <article class="colum2_article4" id="article4">
          <p>
              Ver Manual de Niif en DataX:
          </p>
          <a  href="pdf/manual_niif.pdf" title = "Ver Manual en PDF" target = "_blank"><img class="animar" src="images/pdf1.png"  alt="" /></a>

        </article>
      </section>
      <footer class="seminario_footer">
        <section id="seminario_rigth"> 
          <p>&copy; Copyright 2000 - 2015  By  ATXEL Ltda.</p>
          <p>Calle 55 Norte Av 3BN-41 <br>
            Barrio La Flora. <br>
            Cali - Valle.
          </p>
        </section>  
        <section id="seminario_left">
          <nav>
            <ul>
              <li calss="cambio"><a href="index.php">INICIO</a></li>
              <li calss="cambio"><a id="contactenos" href="contactenos.html">CONTÁCTENOS</a></li>
              <li class="cambio"><a href="demo.html">DESCARGAR DEMO</a></li> 
            </ul>
          </nav>
        </section>
      </footer>
      <script type="text/javascript">
          document.oncontextmenu = function(){return false;}
      </script>
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script>
          !window.jQuery && document.write("<script src='js/jquery.min.js'><\/script>");
      </script>
      <script src="js/efectos.js"></script>
      <script>
        $(document).on("ready",accordionSeminario);
      </script>

</body>
</html>
