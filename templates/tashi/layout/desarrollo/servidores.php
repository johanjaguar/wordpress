<?php $idPage=181;?>
<div class="separador lightning_yellow"><?php echo obtenerTituloPage( $idPage ); ?></div>
<a name="servidor" class="anchor"></a>
	<div class="container white_patron">
		<div class="row espaciointerno">
		    <div class="col-md-12 l-dimgray " id="estrategia2"><?php echo obtenerContentPage($idPage); ?></div>
		    <?php $hijossocial = obtenerHijos( $idPage ,3 ) ; ?>
        	<div class="estrategiaBox col-md-4"><?php echo hijoEstrategia(0, $hijossocial, 'pelorous' , 'l-lightning_yellow'); ?></div>
        	<div class="estrategiaBox col-md-4"><?php echo hijoEstrategia(1, $hijossocial, 'pelorous' , 'l-lightning_yellow'); ?></div>
        	<div class="estrategiaBox col-md-4"><?php echo hijoEstrategia(2, $hijossocial, 'pelorous' , 'l-lightning_yellow'); ?></div>
		    <div class="limpiador"></div>
		</div>
	</div>
</div>
