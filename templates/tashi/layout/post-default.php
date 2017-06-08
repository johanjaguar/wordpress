<?php query_posts('post_type=post&cat=4&posts_per_page=2&orderby=date&order=DESC');
if (have_posts()) : while (have_posts()) : the_post();        ?>
<div class="container">
    <div class="row">

        <div class="col-md-6 " id="post_contenido">
            <div class="simple-text"><?php the_content(''); ?></div>
        </div>
        <div class="col-md-6  radial_curiousblue" id="post_detalles">
            <div class="post-detallesbox">
                <?php ?>
                <a href="<?php the_permalink(); ?>"><p><?php the_post_thumbnail('blogcontent'); ?></p></a>
            </div>
            <h2 class="lwhite"><?php the_title(); ?></h2>
        </div>
    <?php endwhile;endif;?>
    </div>
</div>