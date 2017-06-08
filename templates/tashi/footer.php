<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 */
?>
<div class="container">
    <div class="row l-" id="footerFila">
        
        <div class="col-md-8">
          <div class="row" id="sliderFooter">
            <ul class="bxslider">
              <?php $arreglo = get_post_gallery_images( 54 );
                foreach( $arreglo as $key=>$imagen):?>
                  <li><img src="<?php echo $imagen?>" /></li>    
                <?php endforeach;
              ?>
            </ul>

          </div> 
          <div class="row" id="fila2Footer">
            <div class="col-md-4" id="footer1">
              <h3 class="l-white">Nuestras colecciones</h3>
              <ul>
                <li><a href="#">Sportwear</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Couture</a></li>
                <li><a href="#">Accesories</a></li>
              </ul>
            </div>
            <div class="col-md-4 orient l-" id="footer2">
              <h3 class="l-white">Sitio</h3>
              <ul>
                <li><a href="#">Copyright TASHI</a></li>
                <li><a href="#">Powered by Mediatic</a></li>
                <li><a href="#">2015 © Derechos Reservados TASHI</a></li>
              </ul>
            </div>
            <div class="col-md-3 malibu " id="footer3">
              <img id ="logoSlogan" class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/images/logo-header.png" />
            </div>

          </div>
        </div>
        <div class="col-md-4 malibu " id="footer4">
          <div class="redes">
            <h3>Conectate con nuestras redes sociales</h3>    
            <a href="https://www.facebook.com/tashicolombia" class="redsocialFooter facebookF"><i class="fa fa-facebook fa-3x"></i></a>
            <a href="https://twitter.com/Tashi_Colombia" class="redsocialFooter twitterF"><i class="fa fa-twitter fa-3x"></i></a>
            <a href="https://instagram.com/tashi_colombia/" class="redsocialFooter instagramF"><i class="fa fa-instagram fa-3x"></i></a>
          </div>      
          <div class="suscripcionEmail">
            <h3>Recibe las novedades Tashi</h3>
              <div class="boxEmail">
               <?php echo do_shortcode('
                <div class="emailName">[newsletter_field name="email"]</div>
                <div class="emailBtn">[newsletter_form button_label="Enviar"]
                [/newsletter_form]</div>
              '); ?>
              </div>
          </div>
        </div>
    </div>
</div>
<!--<pre><?php var_dump(  get_post_gallery_images( 49 ) ); ?></pre>-->
<script>
   var $j = jQuery.noConflict();
    $j(document).ready(function () {
       $j('.bxslider').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        slideWidth: 200,
        slideMargin: 0
      });
    });
</script>

<?php wp_footer(); ?>
