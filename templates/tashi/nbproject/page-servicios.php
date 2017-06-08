<?php
/*
  Template Name: servicios
 */
get_header();
?>

<body>
    <div class="white_patron">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <div class="pictonblue">
                <header class=" "><?php include("layout/cabeza.php"); ?></header>
                <div class="scroller_anchor"></div> 
                <nav class=" scroller navbar navbar-default pictonblue" role="navigation"><?php include("layout/menu_principal.php"); ?></nav>
            
        </div>
        <div id="slider_mediatic" class="fondoMediatic">
            <div id="slider_box" class="container">
                <?php if ( is_active_sidebar('sidebar_frase') ) :
                    dynamic_sidebar('sidebar_frase'); 
                endif;?>    
            </div>


        </div>
        

        <?php  wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post();?>
        
        <div id="elconcepto" class="transparente"><?php include("layout/mediaTIC/concepto.php"); ?></div>
        <div id="elequipo" class="pictonblue"><?php include("layout/mediaTIC/equipo.php"); ?></div>
        <div id="laredMediaTIC" class="white_patron"><?php include("layout/mediaTIC/redMediaTIC.php"); ?></div>
        <?php endwhile; endif; ?>


        <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js" type="text/javascript" ></script>
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>
    </div>
    <footer class="montana-tarawera"><?php get_footer(); ?></footer>
</body>
</html>

