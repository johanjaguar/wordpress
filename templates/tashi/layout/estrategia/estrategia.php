<div class="container ">
    <div class="row espaciointerno ">
        
        <div class="col-md-6 l-frenchpass" id="estrategia1">
          <img src="<?php echo obtenerURLThumb( $post->post_parent ); ?>" />
          <div class="slogan l-white"><?php echo obtenerCampo($post->post_parent,'slogan'); ?></div>
          <div class="autor_slogan l-white"><?php echo obtenerCampo($post->post_parent,'autor_slogan'); ?></div>
        </div>
        <div class="col-md-6 l-white " id="estrategia2">
          <?php echo obtenerContentPage($post->post_parent); ?>
        </div>
        <div class="limpiador"></div>

    </div>
</div>
