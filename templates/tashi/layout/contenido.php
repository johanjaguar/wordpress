<div class="container">
    <div class="row">
        <div class="col-md-8 contenidoentrada">
            
            <div class="contentbox white " id="contenido1">
                <div class="contentimagen"><?php the_post_thumbnail('blogcategoria'); ?></div>
                <div class="redessingle"><div class="centrador athensgrey "><?php if(function_exists('kc_add_social_share')) kc_add_social_share(); ?></div></div>

                
                <div class="contentpart l-dimgray"  id="elcontenido"><?php the_content(); ?></div>
                
                
         
                <div class="limpiador"></div>
            </div>
            <hr/>
            <div id="articulosrelacionados"><?php include("blog/related.php"); ?></div>
            <hr/>
            <div class="elautor">
             <div id="avatarblog"><?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?></div>
             <div id="nombreAutor" class="l-dimgray"><?php echo get_the_author_meta( 'user_firstname' ); ?></div>
             <div id="apellidoAutor"  class="l-dimgray">

                <?php if( strlen( get_the_author_meta( 'user_lastname' ) ) > 2 ):?> 
                    <?php echo get_the_author_meta( 'user_lastname' ) ?>
                <?php else: ?>
                <br/>
                <?php endif; ?>

             </div>
             
             <pre id="bioAutor" class="l-dimgray transparent"><?php echo get_the_author_meta( 'description' ); ?></pre>
             <div id="URLAutor" class="l-dimgray"><a href="<?php echo get_the_author_meta( 'user_url' ) ; ?>"><?php echo get_the_author_meta( 'user_url' ) ; ?></a></div>

             <div class="limpiador"></div>
            </div>
            <hr/>
            <div id="comments"><?php comments_template( '', true ); ?></div> 
            
  
        </div>
        <aside id="listadoentradas" class="col-md-4 listaEntradas transparent espaciointerno">
          <?php //include("layout/blog/listadoentradas.php"); ?>
          <?php get_sidebar('sidebar_right'); ?>
        </aside>
        
        </div>
     </div> 
    </div>

</div>



