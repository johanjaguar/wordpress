<div class="container">
    <div class="row">
        <div class="col-md-8 contenidoentrada">
            
            <div class="contentbox white " id="contenido1">
               <div class="contentTagPart espaciointerno" id="elcontenido">
                   <?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
               </div>
                <div class="limpiador"></div>
            </div>
            <hr/>
            <div id="articulosrelacionados"><?php include("blog/related.php"); ?></div>
            <hr/>
            <div class="elautor">
             <div id="avatarblog"><?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?></div>
             <div id="nombreAutor" class="l-dimgray"><?php echo get_the_author_meta( 'user_firstname' ); ?></div>
             <div id="apellidoAutor"  class="l-dimgray"><?php echo get_the_author_meta( 'user_lastname' );; ?></div>
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



