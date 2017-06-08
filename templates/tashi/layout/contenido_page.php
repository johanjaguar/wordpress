<div class="container white cnt-contenidopage">
    <div class="row">
        <div class="col-md-12" id="box_breadcumb">
            <p class="l-nero f-lato">
                <?php echo the_breadcrumb()?>
            </p>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-12 contenido_page">
            <h2 class='titulo_pagina l-nero'><?php the_title(); ?></h2>
            <div class="contentbox" id="contenido1">
                <div class="imagen_contentpage"><?php the_post_thumbnail(); ?></div>
                

                
                <div class="contentpart l-nero"  id="elcontenido"><?php the_content(); ?></div>
                
                
         
                <div class="limpiador"></div>
            </div>
           
             <div class="limpiador"></div>
            </div>
   
            
  
        </div>

        
        </div>
     </div> 
    </div>

</div>



