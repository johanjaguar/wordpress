<?php
/*
  Template Name: En construcción
 */
get_header(); ?>
<body class="black enconstruccion">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

  <div class="fondo">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner1.jpg" alt="" class="fondo1 img-responsive"/>
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner2.jpg" alt="" class="oculto fondo2 img-responsive"/>
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner3.jpg" alt="" class="oculto fondo3 img-responsive"/>
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner4.jpg" alt="" class="oculto fondo4 img-responsive"/>
  </div>

  <div class="container" id="contenedor_principal">
    <?php include("layout/logo-header.php"); ?>

    <a name="content"></a>
    <div id="cuerpo" class="row">
      <div class="col-md-7" id="msjConstruccion">
        <p class="l-white cursiva msj1">Le estamos dando</p>
        <p class="l-white cursiva msj2">Las ultimas puntadas</p>
        <p class="l-white cursiva msj3">a nuestra web ...</p>
      </div>
      <div class="col-md-4 datos-contacto">
        <div class="logo_grande centrado">
          <img id ="logoGrande" class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/images/logo-tashi.png" />
        </div>
        <h3 class="mayuscula f-lato l-white centrado">más información y ventas</h3>
        <p class="minuscula whatsapp f-lato l-white centrado"><i class="whatsapp-ico"></i>+57 321 495 9569</p>
        <p class="minuscula mail f-lato l-white centrado"><i class="mail-ico"></i>gerenciatashi@gmail.com</p>
        <h3 class="redes l-white f-lato centrado mayusculas">conéctate con nuestras redes sociales para más detalles</h3>
        <div class="cajaredes">
          <a href="https://twitter.com/tashi_colombia" target="_blank"><i class="twitter"></i></a>
          <a href="https://www.facebook.com/tashicolombia" target="_blank"><i class="facebook"></i></a>
          <a href="https://instagram.com/tashi_colombia/" target="_blank"><i class="instagram"></i></a>
        </div>

        </div>
      </div>
      <div class="col-md-1"></div>

    </div>

  </div>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js" type="text/javascript" ></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>
  <script>
  var $j = jQuery.noConflict();
  // $j is now an alias to the jQuery function; creating the new alias is optional.

  $j(document).ready(function() {
    $contador = 1;
    var intervalID =setInterval(function(){
        console.log("Hello" + ( $contador % 4 ) );
        if( ( $contador % 4 )  == 0 ){
          $j( ".fondo2" ).fadeOut("slow", "linear");
          $j( ".fondo3" ).fadeOut("slow", "linear");
          $j( ".fondo4" ).fadeOut("slow", "linear");
          $j( ".fondo1" ).fadeIn("slow", "linear");
        }
        else if( ( $contador % 4 )  == 1 ){
          $j( ".fondo3" ).fadeOut("slow", "linear");
          $j( ".fondo4" ).fadeOut("slow", "linear");
          $j( ".fondo1" ).fadeOut("slow", "linear");
          $j( ".fondo2" ).fadeIn("slow", "linear");
        }
        else if( ( $contador % 4 )  == 2 ){
          $j( ".fondo1" ).fadeOut("slow", "linear");
          $j( ".fondo4" ).fadeOut("slow", "linear");
          $j( ".fondo2" ).fadeOut("slow", "linear");
          $j( ".fondo3" ).fadeIn("slow", "linear");
        }
        else{
          $j( ".fondo3" ).fadeOut("slow", "linear");
          $j( ".fondo1" ).fadeOut("slow", "linear");
          $j( ".fondo2" ).fadeOut("slow", "linear");
          $j( ".fondo4" ).fadeIn("slow", "linear");
        }
        $contador++;
        if ($contador == 5) {
          window.clearInterval(intervalID);
        }
      }
      , 30000
    );
  });
  </script>
</body>
</html>
