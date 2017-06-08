<ul class="bxslider_middle pictonblue">
	<?php query_posts('post_type=post&cat=2&posts_per_page=2&orderby=date&order=DESC');
	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('bloghome'); ?><div class="bxmiddle_txt"><h3><?php the_title(); ?></h3><p><?php the_excerpt(); ?></p></div></a></li>
	<?php endwhile;	endif; ?>
<!--<a href="<?php the_permalink(); ?>" class="linkMiddle"><li><?php the_post_thumbnail('bloghome'); ?><div class="bxmiddle_txt"><h3><?php the_title(); ?></h3><p><?php the_excerpt(); ?></p></div></li></a>-->                
</ul>
<div class="bxmiddle_outside">
    <p>
	    <div id="mid_slider-prev" class="psslider_middle lwhite"></div> 
	    <div id="mid_slider-next" class="psslider_middle lwhite"></div>
    </p>
</div>