<?php
/*
  Template Name: Tienda
 */
get_header();
?>




<body class="black">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <pre>Page TIenda</pre>
    
    <div class="black contenedor-fluido" id="cabeza">
      
        <?php include("layout/cabeza.php"); ?>
      
    </div>
    <div class="contenedor-fluido" id="fotoCabeza">
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner-beachwear.jpg" class="img-responsive"/>
    </div>
    <div id="contenido" class="athensgrey">
        <div id="contenido" class="athensgrey"><?php include("layout/contenido_page_wc.php"); ?></div>
    </div>
    <footer class="black"><?php get_footer(); ?></footer>

<!--  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js" type="text/javascript" ></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>-->

</body>
</html>