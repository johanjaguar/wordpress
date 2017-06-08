

<div class="separador kingfisher_daisy">CONCEPTO</div>

<div class="container">
    <div class="row radial_curiousblue_pictonblue">
        <a name="concepto" class="anchor"></a>
        <div class="col-md-6 l-dimgray white" id="conceptoTop1">
          <?php the_content(); ?>
        </div>
        <div class="col-md-6 lightning_yellow l-white" id="conceptoTop2">
          <a href="<?php get_site_url(); ?>/mediatic/concepto/#concepto" class="l-white">
            <img src="<?php echo obtenerURLThumb( $post->ID ); ?>" />
            <h2><?php echo obtenerCampo($post->ID,'lblimagen'); ?></h2>
          </a>
        </div>
        <div class="limpiador"></div>

    </div>
</div>
