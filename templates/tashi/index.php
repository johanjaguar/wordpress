<?php
/*
  Template Name: Inicio
 */
  get_header(); ?>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.bxslider.min.js"></script>
    
    <div class="black contenedor-fluido" id="cabeza">
      
        <?php include("layout/cabeza.php"); ?>
      
    </div>
    <div class="sidebar_home"> <?php dynamic_sidebar( 'sidebar_home' ); ?></div>
    <div id="slide" class="contender-fluido">
      <?php echo do_shortcode('[image-carousel category="home"]'); ?> 
    </div
    <div id="cuadrilla" class="contenedor-fluido athensgrey">
      <div class="container grid white">
        <?php //include("layout/grilla.php"); ?>
         <?php echo do_shortcode('[product_category category="home" per_page="10"]'); ?>
      </div>
    </div>


    <footer class="black"><?php get_footer(); ?></footer>
  </div>

    <script>
      // For Demo purposes only (show hover effect on mobile devices)
      [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
        el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
      } );
    </script>


<!--  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js" type="text/javascript" ></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>-->
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