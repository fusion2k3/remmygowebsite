<?php get_header(); ?>
 	<?php if ( have_posts() ): while ( have_posts() ): the_post();?>
	<?php if(have_rows('content_builder')):?>
		<?php while(have_rows('content_builder')): ?> 
			<?php the_row(); include('content/'.get_row_layout().'.php');?>
		<?php endwhile;?>
	<?php endif;?>
	<?php endwhile;else:get_template_part( '404' );endif;?>
<?php get_footer(); ?>