<?php $idPage=71;?>
<div class="separador indigo"><?php echo obtenerTituloPage( $idPage ); ?></div>
<a name="marketing" class="anchor"></a>
<div class="container white_patron">
    
    <div class="row espaciointerno ">
        <div class="col-md-12 l-dimgray " id="estrategia2"><?php echo obtenerContentPage($idPage); ?></div>
        <?php $hijossocial = obtenerHijos( $idPage ,4 ) ; ?>
        <div class="estrategiaBox col-md-3"><?php echo hijoEstrategia(0, $hijossocial, 'fog' , 'l-indigo'); ?></div>
        <div class="estrategiaBox col-md-3"><?php echo hijoEstrategia(1, $hijossocial, 'fog' , 'l-indigo'); ?></div>
        <div class="estrategiaBox col-md-3"><?php echo hijoEstrategia(2, $hijossocial, 'fog' , 'l-indigo'); ?></div>
        <div class="estrategiaBox col-md-3"><?php echo hijoEstrategia(3, $hijossocial, 'fog' , 'l-indigo'); ?></div>
        <div class="limpiador"></div>
    </div>
</div>
