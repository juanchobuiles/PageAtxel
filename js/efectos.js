function cargarContenidoComun()
{
  $("header").load("html/header.html");
  $("footer").load("html/footer.html");
  $(".informacion").load("html/informacion.html");
  $("#principal").css({display:"none"}).fadeIn("slow");
  $(window).on("scroll",detectarScroll);
  $("button").on("click",function(){
    $("body,html").animate({
      scrollTop:0
      },1000);
    });

  $("header").before("<div id='conteLogos'><div id='logo1'></div><div id='logo2'></div><div id='logo3'></div> </div>");
  $("#conteLogos").before("<input type='checkbox' id='menu-movil' /><label for='menu-movil'></label>");
  if($(window).width()<=600)
  {
    $("#logo1").remove();
    $("#logo2").remove();
    $("#botonera2").remove();
    $("a").removeClass("fancy-nube");
    $("a").removeClass("fancy-niif");

  }
}



function iniciarTablas(){
  cargarContenidoComun();
  $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
  $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
}

function accordion()
{
  cargarContenidoComun();
  $( "#accordion" ).accordion({
    active: 0,
    animate: 1000,
    'fillSpace': true,
    heightStyle: "content",
    header: "h3",
  });
}

function accordionSeminario()
{
  $('dl dd').not('dt.activo + dd').hide();
  $('dl dt').click(function(){
     if ($(this).hasClass('activo')) {
          $(this).removeClass('activo');
          $(this).next().slideUp();
     } else {
          $('dl dt').removeClass('activo');
          $(this).addClass('activo');
          $('dl dd').slideUp();
          $(this).next().slideDown();
     }
  });
}

function detectarScroll()
{
  return ($(window).scrollTop()>100)?$("button").fadeIn():$("button").fadeOut();
}

function iniciarSlider()
{

  cargarContenidoComun();
  $("#slider").flexslider({
    animation:"fade",
    direction:"vertical",
    slideshowSpeed: 7000,
    animationSpeed: 1000,


    pauseOnHover: true,
  });


  $('#slideshowHolder').jqFancyTransitions(
    {
      effect: 'wave',
      width: 650,
      height: 350,
      strips: 20,
      delay: 5000,
      stripDelay: 50,
      titleOpacity: 0.7,
      titleSpeed: 2000,
      position: 'alternate',
      direction: 'fountainAlternate',
      navigation: true,
      links: true

    });


  if($(window).width()<=768)
  {
    $("#slideshowHolder").remove();
    $("#columna1").before(" <article id='columna2'><ul><li class='cambio'><a href='http://actualicese.com/actualidad/2015/01/05/impuesto-a-la-riqueza-sobre-quien-recae-y-como-se-debe-liquidar/'>Impuesto a la Riqueza, ¿sobre quién recae y cómo se debe liquidar?<br><em>via. actualicese.com</em></a></li><li><a http://actualicese.com/actualidad/2015/01/05/impuesto-a-la-riqueza-sobre-quien-recae-y-como-se-debe-liquidar/'>Salario mínimo y auxilio de transporte para 2015 <em>Via. actualicese.com</em></a></li></ul></article>");
  }

  $(".fancy-nube").fancybox({
    openEffect : 'none',
    closeEffect : 'none',
    iframe :
    {
      preload : false
    }


  });

  $(".fancy-niif").fancybox({
    maxWidth  : 1000,
    maxHeight : 1000,
    fitToView : false,
    width   : '90%',
    height    : '100%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    scrolling : 'no',
    closeEffect : 'none'


  });

  $(".fancy-promo").fancybox({

  });

  $(".ejemplo").fancybox({

  });

  setTimeout("cargarPublicidad()",1500);
  setTimeout("cargarPromocion()",3000);

}
// crear publicidad con fancybox
function cargarPublicidad(){
  $(".fancy-capacitacion").fancybox({
    width:400
  }).trigger('click');
}

function cargarPromocion(){
  $(".fancy-promo")
    // afterLoad: function() {
    //     this.title = '<a href="pdf/Promocion_Contador.pdf" targe="_blank"><img src="images/seminario.jpg" /></a> ' + this.title;
    // },
    // helpers : {
    //     title: {
    //         type: 'inside'
    //     }
    .attr('rel', 'gallery')
    .fancybox({
        beforeLoad: function() {
            var el, id = $(this.element).data('title-id');

            if (id) {
                el = $('#' + id);

                if (el.length) {
                    this.title = el.html();
                }
            }
        }


  }).trigger('click');
}


function cargarPresentacion(){
  Reveal.initialize({
        controls: true,
        progress: true,
        history: true,
        center: true,

        theme: Reveal.getQueryHash().theme,
      });
}

function enviarDatos(evento)
{

  evento.preventDefault();

  var datosFormulario = $(this).serialize();
  console.log(datosFormulario);

  var opcionesDeEnvio = {
    url:"php/contacto.php",
    type:"POST",
    data:datosFormulario,
    dataType:"text",
    beforeSend:function(){
      $("#precarga").fadeIn("slow");
    },
    error:function(){
       $("#precarga").fadeOut("slow");
       $("#respuesta").addClass("mensaje").fadeIn("slow").html("Ocurrió un error. No se pudo conectar con el servidor.");
    },
    success:function(respuestaDePHP){
       $("#precarga").fadeOut("slow");
       $("#respuesta").addClass("mensaje").fadeIn("slow").html(respuestaDePHP);
       $('.contacto').trigger("reset");
    }
  };

  $.ajax(opcionesDeEnvio);
}

function enviarDatosDemo(evento)
{
  evento.preventDefault();

  var datosFormularioDemo = $(this).serialize();
  console.log(datosFormularioDemo);

  var opcionesDeEnvioDemo = {
    url:"php/demo.php",
    type:"POST",
    data:datosFormularioDemo,
    dataType:"text",
    beforeSend:function(){
      $("#precarga").fadeIn("slow");
    },
    error:function(){
       $("#precarga").fadeOut("slow");
       $("#respuesta").addClass("mensaje").fadeIn("slow").html("Ocurrió un error. No se pudo conectar con el servidor.");
    },
    success:function(respuestaDePHP){
       $("#precarga").fadeOut("slow");
       $("#respuesta").addClass("mensaje").fadeIn("slow").html(respuestaDePHP);
       $('.contacto').trigger("reset");
       $("#precarga").after("<div id='demo-descargar' ><a  href='https://mega.co.nz/#!K00X1azY!c3Y8_BPwUAHPSXKPMYcqLc36iKzZCap0Cv8F-lp291U' ><img width='70%' src='images/boton-descargar-aqui.png'></a></div>");
       $("input[type='submit']").remove();
    }
  };

  $.ajax(opcionesDeEnvioDemo);
}
