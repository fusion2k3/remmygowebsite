<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class=" newhero"  >
		  <div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-6 medium-6 cell">
					<ul class="breadcrumbs">
						<li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_permalink( 831 ); ?>">Learn</a></li>
						<?php $post_type = get_post_type_object( get_post_type($post) ); ?>
						<li><a href="<?php echo get_post_type_archive_link(get_post_type($post)); ?>">Tutorials</a></li>
						
						<li><?php the_title();?></li>
					</ul>
					<div class="center">
						<h1><?php the_title();?></h1>
						 <?php the_excerpt();?>
					</div>
				</div>
 
			</div>
		  </div>
		</div>
 		<?php if(have_rows('content_builder')):?>
			<?php while(have_rows('content_builder')): ?> 
				<?php the_row(); include('content/'.get_row_layout().'.php');?>
			<?php endwhile;?>
		<?php endif;?>
 	<?php endwhile; else: ?>
		<?php get_template_part('404'); ?>
	<?php endif; ?>
	
 
<?php get_footer(); ?>