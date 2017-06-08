<?php
/*
  Template Name: Blog Categorias
 */
get_header(); ?>

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
        <div class="blue_zodiac" id="breadcumb"><?php include("layout/breadcumbs.php"); ?></div>   
        <div class="container white">
            <div class="row" id="contentBlog" role="main">
                <div id="categoriablog" class="col-md-8 transparent espaciointerno">
                    <?php
                        /* Run the loop to output the posts.
                         * If you want to overload this in a child theme then include a file
                         * called loop-index.php and that will be used instead.
                         */
                    get_template_part( 'loop', 'index' );?>
               </div>
                <aside id="listadoentradas" class="col-md-4 listaEntradas transparent espaciointerno">
                  <?php //include("layout/blog/listadoentradas.php"); ?>
                  <?php get_sidebar('sidebar_right'); ?>
                </aside>
              </div>
        </div>    

        <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js"></script>
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>
    </div>
    <footer class="montana-tarawera"><?php get_footer(); ?></footer>
</body>
</html>
