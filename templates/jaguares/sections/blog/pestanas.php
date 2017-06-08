
<div class="cajapestanas">
    <!-- Nav tabs -->
    <ul id="lomasleidoycomentado" class="nav nav-tabs" role="tablist">
      <li id="leidoLi" class="l-curiousblue active sinmargen">
        <a class="l-curiousblue" href="#leido" role="tab" data-toggle="tab">lo mas leido</a></li>
      <li id="comentadoLi" class=" l-pictonblue">
        <a class="l-pictonblue" href="#comentado" role="tab" data-toggle="tab">lo mas comentado</a></li>
   
    </ul>
    <div class=" tab-content sinmargen">
        <div class=" tab-pane fade in active" id="leido">
                    <h2 class="hleidoycomentado">Últimas Entradas</h2>

                    <?php $latest = new WP_Query("orderby=rand&posts_per_page=5");
            while ($latest->have_posts()) : $latest->the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="nofollow"><?php the_title(); ?></a></li> 
             <?php endwhile; ?>
        </div>
        <div class="tab-pane fade" id="comentado">
                    <h2 class="hleidoycomentado">Últimas Entradas</h2>
                          <?php $popular = new WP_Query("orderby=comment_count&posts_per_page=5");
            while ($popular->have_posts()) : $popular->the_post(); ?>
                <li><a href="<?php the_permalink() ?>" rel="nofollow"><?php the_title(); ?></a> (<?php comments_number('0', '1', '%'); ?>)</li> 
             <?php endwhile; ?>  
        </div>  
    </div>

</div>