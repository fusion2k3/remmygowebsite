<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="newhero">
		<div class="rec"><canvas id="gradient-canvas" style="width:100vw;height:100vh"></canvas></div>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-6 medium-6 cell">
					<ul class="breadcrumbs">
						<li><a href="<?php echo home_url(); ?>">Home</a></li>
					
						<?php $post_type = get_post_type_object(get_post_type($post)); ?>
						<li><a href="<?php echo get_post_type_archive_link(get_post_type($post)); ?>"><?php echo $post_type->label; ?></a></li>
						<li><?php the_title();?></li>
					</ul>
					<div class="center">
						<h1><span></span> <?php the_title();?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="grid-container content">
		<div class="grid-x content-a">
			<?php if($list = get_field('list_structure')):?>
			<div class="large-2 leftscroll">
				<div class="gre">
					<?php if(get_field('blue_theme')):?>
					<h6>Contents</h6>
					<?php else:?>
					<h6>Table of contents</h6>
					<?php endif;?>
					<ul>
						<?php foreach($list as $el): ?>
						<li>
	 						<?php $id = $el['id']; if($el['name']) echo '<a href="#'.$id.'">'.$el['name'].'</a>'; ?>
	  					</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php if(!get_field('blue_theme')):?>
				<a href="#page">↑ Back to Top</a><br/>
					<a href="<?php echo get_post_type_archive_link('articles'); ?>" rel="bookmark">← Go back to all Articles</a>
				<?php endif;?>
			</div>
			<?php endif;?>
			
						<div class="large-2 cell"></div>

 
			<div class="large-8 cell text-content sm">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="featured-image">
						<?php the_post_thumbnail('large', array('style' => 'width:100%;height:auto;margin-bottom:2rem;border-radius:8px;')); ?>
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
			</div>
			<div class="large-2 cell"></div>

		</div>
	</div>
	<?php endwhile; else: ?>
		<?php get_template_part('404'); ?>
	<?php endif; ?>
	<?php if(have_rows('content_builder')):?>
		<?php while(have_rows('content_builder')): ?> 
			<?php the_row(); include('content/'.get_row_layout().'.php');?>
		<?php endwhile;?>
	<?php endif;?>
	
	
	<section id="image-text-new" class="arright row image-text hasbg" style="background-color:#2f63fa">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-6 medium-6 cell">
					<div class="img-h">
						<img src="https://moddy.io/wp-content/uploads/2024/11/image-152-1.jpg" alt="">
					</div>
				</div>
				<div class="large-6 medium-6 cell">
					<h2>Harness the Power of Remittance Go</h2>
					<h3>14 Days for Free</h3>
					<a class="button" href="https://app.remittancego.com">Start for free</a>
				</div>
			</div>
		</div>
	</section>
	<?php if(get_field('file_res')):?>
		<div id="fader"></div>
		<div id="popup" class="newpopup">
			<div class="head-row">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-colour.svg" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
				<a class="close">X</a>
			</div>
			<div class="h">
				<div class="video">
					<?php if(get_field('video_prm','options')):?>
						<video playsinline class="myVideo">
							<source src="<?php echo get_field('video_prm','options');?>" type="video/mp4">
						</video>
						<?php if(get_field('poster_prm','options')) echo wp_get_attachment_image(get_field('poster_prm','options'), 'full', 0, array('title'=> '')); ?>
					<?php endif;?>
				</div>
				<div class="text">
					<?php if(get_field('left_text_prm','options')) echo get_field('left_text_prm','options');?>
					<?php gravity_form(6, false, false, false, '', true, 10); ?>
					<a class="button" href="https://app.moddy.io/register?plan=monthly-3D">Start Moddy Free Trial</a>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php get_footer(); ?>
