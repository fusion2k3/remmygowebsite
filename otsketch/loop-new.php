 <div class="large-4 medium-6 small-12 cell">
	<div class="post">
		<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('post');
				} else {?>
					<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
				<?php }?>
			</a>
		</div>
		<?php if(get_field('optional_time')) echo '<span class="time">'.get_field('optional_time').'</span>';?>
		
		 <h3><a href="<?php the_permalink() ?>"  rel="bookmark"><?php the_title();?></a></h3> 
		<p><?php the_excerpt();?></p>
		<a href="<?php the_permalink() ?>" class="button" rel="bookmark">Read more</a>
	</div>
</div>