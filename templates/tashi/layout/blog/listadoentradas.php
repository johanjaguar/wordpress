
	<div class="athensgrey" id="listadocontent">
		<div id="buscar">
			<p class="sidebarBlog" Buscar en el Blog>Buscar en el Blog</p>
            <?php $search_text = "Search  "; ?>
            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                <input  type="text" type="text" value="Search..." name="s" id="s" onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
                <input class="right btn curiousblue lwhite" type="button" value="Buscar" id="searchsubmit" />
                <div class="limpiador"></div>
            </form>
        </div>
        <div class="leidoycomentado"><span id="lomasleido" class="l-curiousblue">lo mas leido</span><span id="lomascomentado" class="l-dimgray">lo mas comentado</span></div>
		<div id="ultimasentradas">
			<p class="sidebarBlog">Últimas Entradas</p>
			<ul class="l-curiousblue">
	            <?php query_posts( 'cat=2&posts_per_page=4&orderby=desc' ); if (have_posts()) : while (have_posts()) : the_post(); ?>
	                <li>
	                    <a href="<?php the_permalink();?>"><p><?php the_title(); ?></p></a>
	                </li>
	            <?php endwhile; endif;?>
	        </ul>
		</div>
		<hr/>
		<div id="ultimasentradas">
			<p class="sidebarBlog">Categorías de Blog</p>
			<ul class="l-curiousblue">
	            <?php query_posts( 'cat=2&posts_per_page=4&orderby=desc' ); if (have_posts()) : while (have_posts()) : the_post(); ?>
	               <?php 	$tags=get_the_tags(get_post()->ID);
							var_dump($tags);
	               ?> 
	            <?php endwhile; endif;?>
	        </ul>
		</div>
	</div><!-- #content -->
