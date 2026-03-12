<div class="large-3 medium-4 small-12 cell">
	<div class="post">
		<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php 
				$post_type = get_post_type( get_the_ID() ); 
				echo '<span class="cat ' . $post_type . '">' . $post_type . '</span>';
				?>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('post');
				} else { ?>
					<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
				<?php } ?>
			</a>
		</div>
		<div class="entry-summary">
			<h3><?php the_title();?> <span>→</span></h3>
 		</div>
	</div>
</div>
