
    <div class="athensgrey" id="listadocontent">
        <div id="buscar">
            <p class="sidebarBlog" Buscar en el Blog>Buscar en el Blog</p>
            <?php $search_text = "Search  "; ?>
            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                <input  type="text" type="text" value="Search..." name="s" id="s" onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
                <input class="right btn btn-primary" type="button" value="Buscar" id="searchsubmit" />
                <div class="limpiador"></div>
            </form>
        </div>
        
       
        <div class="leidoycomentado">
            <?php include("layout/blog/pestanas.php"); ?>
        </div>
       <div id="sidebar" role="complementary">
          <?php if (!dynamic_sidebar('sidebar_right')); ?>
        </div>

    </div><!-- #content -->


