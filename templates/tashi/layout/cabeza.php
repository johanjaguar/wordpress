<div class="container">
    <div class="row hidden-xs" id="header1">
      <div class="col-md-2 centrado">
          <?php include("logo-header.php"); ?>
      </div>
      <div class="col-md-10" id="menu_principal_box">
      	<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'header-menu' ) ); ?>
      </div>
    </div>
</div>
