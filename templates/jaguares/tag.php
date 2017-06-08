<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
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
            <div id="slider_tag"><?php include("layout/blog/slider_tag.php"); ?></div>
            <div id="contenidoTag" class="transparente"><?php include("layout/contenidotag.php"); ?></div>
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js"></script>
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>
        </div>
        <footer class="montana-tarawera"><?php get_footer(); ?></footer>
    </body>
</html>
  
