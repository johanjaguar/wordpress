<?php $id = 256; ?>
<div class="separador maroon"><?php echo  obtenerCampo( $id , 'subtitulo' );?></div>
<div id="turismo" class="serviciosParte pictonblue">
	<div class="container ">
	    <div class="row espaciointerno ">
	 
	        
	        <div class="col-md-6 l-frenchpass" id="turismo1">

	          <img src="<?php echo obtenerURLThumb( $id ); ?>" />

	          
	        </div>
	        <div class="col-md-6 l-white " id="turismo2">
	          <?php echo obtenerContentPage($id); ?>
	        </div>
	        <div class="limpiador"></div>

	    </div>
	</div>
</div>

<div id="turismo" class="serviciosParte white">
	<div class="container ">
		<div class="row filaPolitica white sinmargen">
			<p class="politica_texto1 l-dimgray"><?php echo obtenerCampo( $id, 'label1' ); ?></p>
			<p class="politica_texto2 l-dimgray"><?php echo obtenerCampo( $id, 'label2' ); ?></p>
			<?php $hijos = obtenerHijos( $id , 3 ) ; $contador=0;foreach ($hijos as $hijo): ?>
				<?php if ( ( $contador % 3 ) ==  2 ):?>
		  		<div class="row">

		  		<?php endif;?>
				  <div class="unTurismo evento<?php echo $contador;?> col-md-4 ">
			        <figure class="gin effect-romeo sinmargen col-md-12" >
			          <img src="<?php echo obtenerURLThumb( $hijo['ID_Hijo'] ) ?>" />
			          
			          <figcaption>
			            <!--<h2><?php echo obtenerTituloPage( $hijo['ID_Hijo'] );?></h2>-->
			            <p class="eventoTitulo"><?php echo obtenerTituloPage( $hijo['ID_Hijo'] ); ?></p>
			            <p class="eventoSubtitulo"><?php echo  obtenerCampo( $hijo['ID_Hijo'] , 'subtitulo' ); ?></p>
			            <p class="eventoLugar">(<?php echo  obtenerCampo( $hijo['ID_Hijo'] , 'lugar' ); ?>)</p>
			          </figcaption>     
			        </figure>
			    <?php if ( ( $contador % 3 ) ==  2 )  :?>
		  		</div>
		  		<?php endif;?>
				  </div>
			<?php $contador++;endforeach;?>
		</div>	    


    </div>
</div>
