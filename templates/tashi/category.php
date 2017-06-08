<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    <body>
        <div class="white_patron">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
            <header class=" "><?php include("layout/cabeza.php"); ?></header>
            <nav class="navbar navbar-default pictonblue" role="navigation"><?php include("layout/menu_principal.php"); ?></nav>


            <div id="categoriablog" class="transparente"><?php include("layout/blog/categoriablog.php"); ?></div>
            

            <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js"></script>
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>
        </div>
        <footer class="montana-tarawera"><?php get_footer(); ?></footer>
    </body>
</html>


		<!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
