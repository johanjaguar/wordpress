<?php
/*
  Template Name: Single Page
 */
get_header();?>

    <body>
        <div class="white">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
           <div class="pictonblue">
                <header class=" "><?php include("layout/cabeza.php"); ?></header>
                <div class="scroller_anchor"></div> 
                <nav class=" scroller navbar navbar-default pictonblue" role="navigation"><?php include("layout/menu_principal.php"); ?></nav>
            
            </div>
            <?php  wp_reset_query();
                if (have_posts()) : while (have_posts()) : the_post();?>

                <div id="slider_page"><?php include("layout/slider_page.php"); ?></div>
                <div id="contenido" class="transparente"><?php include("layout/contenido.php"); ?></div>
                
            <?php endwhile; endif; ?>
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js"></script>
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>
        </div>
        <footer class="montana-tarawera"><?php get_footer(); ?></footer>
    </body>
</html>
  
