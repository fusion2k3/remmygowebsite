 <div class="large-4 medium-6 small-12 cell">
	<div class="post">
		<?php if(get_field('optional_time')) echo '<span class="time">'.get_field('optional_time').'</span>';?>
	
		<?php if(is_post_type_archive('tutorials')):?>
			<span class="cat tutorials les">Lesson</span>
		<?php endif;?>		
		 <h3><a href="<?php the_permalink() ?>"  rel="bookmark"><?php the_title();?></a></h3> 
		<p><?php the_excerpt();?></p>
		<a href="<?php the_permalink() ?>" class="button" rel="bookmark">Read more</a>
	</div>
</div>