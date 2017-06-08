<?php 
$semilla=rand ( 1 , 4 );
?>

<div id="slider_box" class="montana">
    <ul class="bxslider">
    <?php if ($semilla==1): ?><li style="background: #E25010;">
	<?php elseif ($semilla == 2): ?><li style="background: #560E7F;">
	<?php elseif ($semilla == 3): ?><li style="background: #0D7AAF;">
	<?php elseif ($semilla == 4): ?><li style="background: #0D845F;">
	<?php else: ?><li style="background: #0D7AAF;">
    <?php endif?>
	<img src="<?php echo get_bloginfo('template_url'); ?>/assets/bxslider/images/blog.png" title="<a href='#'><h2 class='container'><?php the_title(); ?></h2></a>"/></li>
    </ul>
</div>
