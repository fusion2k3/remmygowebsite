<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
 			<div class="row posts-area" style="padding-top:30px;padding-bottom:0;" >
				<div class="grid-container">
					<div class="filter">
						<?php echo do_shortcode('[facetwp facet="search"]');?>
						<?php echo do_shortcode('[facetwp facet="new_facet"]');?>
					</div>
					<span class="search-res">Showing results for <strong>"<?php echo esc_html( get_search_query() ); ?>"</strong></span>

	 			</div>
			</div>
			<div class="grid-container content">
				<div class="grid-x grid-padding-x blogarea">
	 				<?php  while ( have_posts() ) : the_post(); ?>
						<?php  echo get_template_part('loop');?>
					 <?php  endwhile; ?>
				</div>
			</div>
		<?php else: ?>
			<div class="row posts-area" style="padding-top:30px;padding-bottom:0;" >
				<div class="grid-container">
					<div class="filter">
						<?php echo do_shortcode('[facetwp facet="search"]');?>
						<?php echo do_shortcode('[facetwp facet="new_facet"]');?>
					</div>
					<span class="search-res">Sorry, your search term <strong><?php echo esc_html( get_search_query() ); ?></strong> returned no results.</span>

	 			</div>
			</div>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>