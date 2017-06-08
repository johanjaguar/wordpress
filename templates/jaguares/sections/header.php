<div id="header1" class="nero">
  <div class="row" id="header1Row">
    
    <div class="col-md-12" id="menus">

      <div class=" " id="header2">
        <div class="col-md-9" id="menu">
          <?php include("menuprincipal.php");?>
        </div>
        <?php
          if ( wp_is_mobile() ):?>
        <?php else:?>
        <div class="col-md-3" id="redesHeader">
          <ul>
          <li><a href="https://www.facebook.com/jaguaresrc" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/icoFacebook.png"/></a></li>
          <li><a href="https://twitter.com/jaguaresrugby" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/icoTwitter.png"/></a></li>
          <li><a href="https://www.instagram.com/jaguaresrugbyclub/"><img src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/icoInstagram.png"/></a></li>
          </ul>

        </div>
      <?php endif;?>
      </div>
      <div class="row" id="rowSlide">
        <section id="slide"><?php include('slide.php') ?></section>
      </div>
    </div>
  </div>

</div>
