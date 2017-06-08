<?php
/*
  Template Name: Default
 */
get_header();
?>

<?php get_header();?>
  <body>
    <header><?php include('sections/header.php') ?></header>
    <?php  wp_reset_query();
        if (have_posts()) : while (have_posts()) : the_post();?>


        <div id="contenido" class="textura_gorse"><?php include("sections/contenido_page.php"); ?></div>

    <?php endwhile; endif; ?>
    <footer class="nero"><?php include('sections/footer.php') ?></footer>
  </body>
</html>
