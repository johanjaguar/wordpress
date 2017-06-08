<?php
/*
  Template Name: Woocommerce Page
 */
get_header();
?>




<body class="black woocommerce_page">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.bxslider.min.js"></script>
    
    <div class="black contenedor-fluido" id="cabeza">
      
        <?php include("layout/cabeza.php"); ?>
      
    </div>
    <div class="contenedor-fluido" id="fotoCabeza">
        
        <?php 
            if(is_shop()){
                $page_id = woocommerce_get_page_id('shop');
            }else{
                $page_id = $post->ID;
            }
        ?>
        <h1 class="titulo_producto"><?php echo obtenerTituloPage($page_id)?></h1>
        <img src="<?php echo obtenerURLThumb($page_id)?>" class="img-responsive"/>
    </div>
    <div id="contenido" class="athensgrey">
        <div id="contenido" class="athensgrey"><?php include("layout/contenido_page_wc.php"); ?></div>
    </div>
    <footer class="black"><?php get_footer(); ?></footer>

<!--  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js" type="text/javascript" ></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>-->

</body>
</html>