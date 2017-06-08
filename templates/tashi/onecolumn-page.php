<?php
/**
 * Template Name: One column, no sidebar

 */

get_header(); ?>

<div id="cont-bottom">
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                <div id="noticias"><?php query_posts('cat=33&posts_per_page=1&orderby=rand'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                                <p>Noticias: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <?php endwhile;?>
                    <a href="http://www.teusaquilloboutique.com" target="_blank"><img alt="" src="<?php echo get_bloginfo('template_url'); ?>/images/noticias_b.png"/></a>
                </div>
                <!-- Row 1 -->
                <div class="texto0">
                    <div id="Titulosplanes">
                    <?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <script type="text/javascript" src="http://gettopup.com/releases/latest/top_up-min.js"></script>
                        <h2 class="title "><?php the_title();?></h2>
                        <div class="texto">
                            <?php the_content(''); ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                    

    </div><!-- end .texto0 -->
  </div><!-- end #cont-bottom -->

<?php get_footer(); ?>
