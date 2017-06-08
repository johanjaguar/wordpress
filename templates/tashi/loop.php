<?php wp_reset_query();if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if (get_post_meta($post->ID, 'Categoria', true) ) {$categoria=get_post_meta($post->ID, 'Categoria', true);} else{$categoria=2;} ?>
<?php endwhile;endif; ?>
<div id="centrar">
	<div id="contenido">
	    <div id="texto">
	        <div id="texto-cont3">

	            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	                    query_posts(array(
	                        'cat'      => $categoria, // You can add a custom post type if you like
	                        'paged'          => $paged,
	                        'posts_per_page' => 6
	                ));

	            if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post(); ?>

	                        <article class="texto-blog l-dimgray">
	                        	<h2>
	                        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                            <div class="autor">
	                            	<p class="l-dimgray"> <?php the_date(); ?> /<span class="porAutor"> por <span class="author_blog"><?php the_author(); ?></span></span> </p>
                            	</div>
	                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog_categoria'); ?></a>
	                            <?php wpe_excerpt('wpe_excerptlength_index', 'wpe_excerptmore'); ?>
	                            <div class="leerycompartir">
	                            	<div class="divseguirleyendo"><div>
	                            		<a href="<?php the_permalink(); ?>" class="leermas btn btn-primary ">Seguir Leyendo</a>
	                            	</div></div>
									<div class="compartirredes">

										<div id="compfb" class="redblog "><a class="s-btn-fb" href="<?php echo compartirFacebook( get_post()->ID  )?>" title="Share on Facebook" target="_blank">
	                    					<img src="<?php echo get_bloginfo('template_url'); ?>/images/fb-azul.png"/>
	                					</a></div>
	                					<div id="comptw" class="redblog "><a class="s-btn-tw" href="<?php echo compartirTwitter( get_post()->ID  )?>" title="Share on Twitter" target="_blank">
	                    					<img src="<?php echo get_bloginfo('template_url'); ?>/images/tw-azul.png"/>
						                </a></div>
	                					<div id="compg+" class="redblog "><a class="s-btn-g+" href="<?php echo compartirGooglePlus( get_post()->ID  )?>" title="Share on Google +" target="_blank">
	                    					<img src="<?php echo get_bloginfo('template_url'); ?>/images/g+-azul.png"/>
	                					</a></div>

									</div>
								</div>




	                             <div class="limpiador"></div>
	                        </article><hr/>

	                <?php endwhile; ?>
	                        <?php my_pagination(); ?>
	                <?php else : ?>
	                        <?php echo 'nomas'; // no posts found message goes here?>
	            <?php endif; ?>


	        </div>
	    </div>
    <?php //get_sidebar(); ?>

</div><!-- #contenido -->
</div>
