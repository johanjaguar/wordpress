<?php $contador = 0;
$fondoSection = 'textura_gorse';
$letraSection ='l-nero';
if (have_posts()) : while (have_posts()) : the_post();
  if( ($contador %3) == 1 ){ $fondoSection = 'textura_gray';$letraSection = 'l-nero'; }
  elseif( ($contador %3) == 2){$fondoSection = 'textura_black';$letraSection = 'l-white'; }
  else{ $fondoSection = 'textura_gorse'; $letraSection='l-nero';}

  if( $contador < 6 ):?>
    <section <?php post_class( "$fondoSection entrada-post" ); ?> id="post-<?php the_ID(); ?>">
      <div class="container">
        <div class="row" id="ofertaFila">
          <div class="post-thumbnail col-md-3"><?php the_post_thumbnail();?></div>
          <div class="col-md-6 col-sm-6 col-xs-12 ofertaTop aliceblue">
        		<h1 class="post-h1"><a class="<?php echo $letraSection?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        		<div class="post-excerpt post-excerpt-<?php echo ( $contador % 3 );?>"><?php the_excerpt(); ?></div>

          </div>
          <div class="col-md-3 widgetArea"><?php get_sidebar($contador); ?></div>
        </div>
      </div>
  	</section>
  <?php else:?>
    <section <?php post_class( "$fondoSection entrada-post" ); ?> id="post-<?php the_ID(); ?>">
      <div class="container">
        <div class="row" id="ofertaFila">
          <div class="post-thumbnail col-md-3"><?php the_post_thumbnail();?></div>
          <div class="col-md-9 col-sm-6 col-xs-12 ofertaTop aliceblue">
            <h1 class="post-h1"><a class="<?php echo $letraSection?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="post-excerpt post-excerpt-<?php echo ( $contador % 3 );?>"><?php the_excerpt(); ?></div>
          </div>
        </div>
      </div>
    </section>
  <?php endif;?>

  <?php $contador++;
  endwhile; ?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php else : ?>

	<section <?php post_class("echo $fondoSection"); ?> id="post-<?php the_ID(); ?>">
    <div class="container"><h1>Not Found</h1></div>
	</section>

<?php endif; ?>
