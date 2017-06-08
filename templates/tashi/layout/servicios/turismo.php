<?php $id = 246; ?>
<div class="separador indigo"><?php echo  obtenerCampo( $id , 'subtitulo' );?></div>
<div id="turismo" class="serviciosParte conifer">
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
		<div class="row filaRedes white sinmargen">
			<p class="turismo_texto2 l-dimgray"><?php echo obtenerCampo( 246, 'label1' ); ?></p>
			<?php $hijos = obtenerHijos( 246 , 3 ) ; $contador=0;foreach ($hijos as $hijo): ?>
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
