<?php get_header(); ?>
	
<?php if (have_posts()) : ?>
	<div class="newar-h">
		<div class="grid-container content">
			<div class="grid-x grid-padding-x blogarea newar">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( is_post_type_archive('tutorials') ) : ?>
						<?php echo get_template_part('loop','new2'); ?>
					<?php else: ?>
						<?php echo get_template_part('loop'); ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
	
<div class="rec bottom">
	<canvas id="gradient-canvas" style="width:100vw;height:15px"></canvas>
</div>

<?php get_footer(); ?>
