<div id="contenido" class="container">
	<div class="row">
		<div class="entrybox col-md-9">
			<h1 class="page-title l-orange_red"><?php
				printf( __( 'Archivo de blog: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
			?></h1>
			<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo '<div class="archive-meta">' . $category_description . '</div>';

			/* Run the loop for the category page to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-category.php and that will be used instead.
			 */
			get_template_part( 'loop', 'category' );
			?>
		</div>
		<aside id="listadoentradas" class="col-md-3 listaEntradas transparent espaciointerno">
			<?php //include("layout/blog/listadoentradas.php"); ?>
			<?php get_sidebar('sidebar_right'); ?>
		</aside>
	</div><!-- #content -->
</div>
