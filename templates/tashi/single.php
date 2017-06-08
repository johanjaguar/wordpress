<?php
/*
  Template Name: Default
 */
get_header();
?>




<body class="black">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    
    <div class="contenedor-fluido" id="fotoCabeza">
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner-beachwear.jpg" class="img-responsive"/>
    </div>
    <div class="black contenedor-fluido" id="cabeza">
            <?php  wp_reset_query();
                
                if (have_posts()) : while (have_posts()) : the_post();?>
              
                <div id="contenido" class="athensgrey"><?php include("layout/contenido.php"); ?></div>
                
            <?php endwhile; endif; ?>
     <?php endwhile; endif; ?>


    <footer class="black"><?php get_footer(); ?></footer>
  </div>



<!--  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js" type="text/javascript" ></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>-->

</body>
</html>