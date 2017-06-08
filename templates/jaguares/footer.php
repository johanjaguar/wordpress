<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 */
?>
<div class="container">
    <div class="row l-white" id="footerFila">
        <div class="col-md-4 malibu" id="footer1"> 
            <h3 class="white"><span class="l-malibu">Contáctanos</span></h3>
            <div id="footer11">
                
                <div class="footer_redes">
                    <a href="#"><img class="efectorotar img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/images/twitterTop.png" /></a>
                    <a href="#"><img class="efectorotar img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/images/facebookTop.png" /></a>
                    <a href="#"><img class="efectorotar img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/images/google+Top.png" /></a>
                </div>
                <div id="footer_direccion">
                    Carrera 16A No. 75-72<br/>
                    Oficina: 201<br/>
                    Bogotá, Colombia
                </div>
                <div id="footer_telefono">
                    + (571) 4661060 
                </div>
            </div>
        </div>
        <div class="col-md-3 orient l-white" id="footer2"> 
            <h4 class="l-white">MEDIATIC</h4>
            <ul>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/concepto#concepto">Concepto MediaTIC</a></li>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/concepto#equipo">Equipo</a></li>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/concepto#redMediaTIC">Red MediaTIC</a></li>
            </ul>
            <br/>
            <h4 class="l-white">SERVICIOS</h4>
            <ul>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/servicios/#turismo">Estrategias de Turismo</a></li>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/servicios/#politica">Estrategias de Politica</a></li>
            </ul>


        </div>
        <div class="col-md-3 orient l-white" id="footer2-b"> 
             <h4 class="l-white">Estrategia y creatividad</h4>
            <ul>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/estrategia-y-creatividad/social-media/#socialmedia">Social Media</a></li>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/estrategia-y-creatividad/social-media/#diseno">Diseño Interactivo</a></li>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/estrategia-y-creatividad/social-media/#marketing">Marketing Online</a></li>
            </ul>
            <br/>
            <h4 class="l-white">DESARROLLO TIC</h4>
            <ul>

                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/desarrollo">Desarrollo</a></li>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/desarrollo/soluciones-empresariales/">Custom Development</a></li>
                <li><a class="l-white" href="<?php get_site_url(); ?>/mediatic/desarrollo/servidores/">Servidores</a></li>
            </ul>
        </div>
        <div class="col-md-2 malibu " id="footer3">
            <div class="footer3Box" >
                <a class="l-white" href="#" class="l-white"><img id="responsiveIco" class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/images/responsiveIco.png" />
                <p>Responsive Design</p>
                </a>
            </div>
            <div class="footer3Box">
                <a href="#" class="l-white">
                <img id="mgrisIco" class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/images/mgris.png" />
                <p>Terminos y condiciones</p>
                </a>
            </div>


        </div>
    </div>
</div>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/cbpHorizontalMenu.min.js"></script>
<script type="text/javascript">
    jQuery(function() {
        cbpHorizontalMenu.init();
    });
</script>

<?php wp_footer(); ?>
