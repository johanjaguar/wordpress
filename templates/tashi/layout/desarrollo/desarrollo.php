<?php $idPage=178;?>
<div class="separador malibu"><?php echo obtenerTituloPage( $idPage ); ?></div>
<a name="desarrollo" class="anchor"></a>
<div class="container white_patron">
    <div class="row espaciointerno">
        <div class="col-md-12 l-dimgray " id="estrategia2"><?php echo obtenerContentPage($idPage); ?></div>
        <?php $hijossocial = obtenerHijos( $idPage ,3 ) ; ?>
       	<div class="estrategiaBox col-md-4"><?php echo hijoEstrategia(0, $hijossocial, 'pattens_blue' , 'l-malibu'); ?></div>
        <div class="estrategiaBox col-md-4"><?php echo hijoEstrategia(1, $hijossocial, 'pattens_blue' , 'l-malibu'); ?></div>
        <div class="estrategiaBox col-md-4"><?php echo hijoEstrategia(2, $hijossocial, 'pattens_blue' , 'l-malibu'); ?></div>
        <div class="limpiador"></div>
    </div>
</div>
