<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class=" newhero"  >
		<div class="rec"> <canvas id="gradient-canvas" style="width:100vw;height:100vh"></canvas></div>
		  <div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-6 medium-6 cell">
					<ul class="breadcrumbs">
						<li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_permalink( 831 ); ?>">Learn</a></li>
						<?php $post_type = get_post_type_object( get_post_type($post) ); ?>
						<li><a href="<?php echo get_post_type_archive_link(get_post_type($post)); ?>"><?php echo $post_type->label;?></a></li>
						<li><?php the_title();?></li>
					</ul>
					<div class="center">
						<h1><?php $post_type = get_post_type( get_the_ID() );  echo '' . $post_type . '';?>: <?php the_title();?></h1>
						<p><?php if($t = get_field('_login', 'options')) echo ' <a href="'.$t.'" class="button">Login</a> '; ?>
							<?php if($t = get_field('_login', 'options')) echo ' <a  class="button" href="https://app.moddy.io/register?plan=monthly-3D">Gets Started</a> '; ?>
						</p>
					</div>
				</div>
			</div>
		  </div>
		</div>
		<div class="grid-container content">
		<div class="grid-x grid-padding-x  content-a">
 			<div class="large-6 cell text-content">
				<?php the_content(); ?>
			</div>
 
			<div class="large-6 cell  ">
				<?php if ( get_field('image_right') ):?>
					<div class="r">
					<?php echo wp_get_attachment_image(get_field('image_right'), 'full', 0, array('title'=> '')); ?>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php endwhile; else: ?>
		<?php get_template_part('404'); ?>
	<?php endif; ?>
<?php get_footer(); ?>