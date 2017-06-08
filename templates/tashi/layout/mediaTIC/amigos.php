<div class="row filaRedes maroon sinmargen">
	<?php $hijos = obtenerHijos( 31 , 6 ) ; $contador=0;foreach ($hijos as $hijo): ?>
		<?php if ( ( $contador % 3 ) ==  2 ):?>
  		<div class="row">
  		<?php endif;?>
		  <div class="unared red<?php echo $contador;?> col-md-4">
			<!--
		    <a target="_blank" href="<?php echo $hijo['Meta_array']['webpage'];?>" class="redinterior white" >
		      <div class="redesImagen"> <img src="<?php echo obtenerURLThumb( $hijo['ID_Hijo'] ) ?>" /></div>
		      <div class="redesTexto l-dimgray white"><?php echo obtenerContentPage( $hijo['ID_Hijo'] ); ?></div>
		    </a>-->
	        <figure class="white effect-sadie juan1 sinmargen col-md-12" id="equipoMiddle1">
	          <img src="<?php echo obtenerURLThumb( $hijo['ID_Hijo'] ) ?>" />
	          
	          <figcaption>
	            <!--<h2><?php echo obtenerTituloPage( $hijo['ID_Hijo'] );?></h2>-->
	            <p><?php echo obtenerExcerptCorto( $hijo['ID_Hijo'] ); ?></p>
	          </figcaption>     
	        </figure>
	    <?php if ( ( $contador % 3 ) ==  2 )  :?>
  		</div>
  		<?php endif;?>
		  </div>
	<?php $contador++;endforeach;?>
</div>