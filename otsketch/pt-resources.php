<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>
	
    <?php
		 $lister = new WP_Query(array(
		 'posts_per_page' => 12,
		 'post_type' => 'tutorials',
		  "facetwp"        => false 
		 ));
		?>
		<?php  if ($lister->have_posts()) : ?>
	<?php /*<div class="row posts-area"   style="padding-bottom: 38px;" >
			<div class="grid-container">
				<h3>Lets Get Started</h3>
				<h2>All Tutorials</h2>
				<p>Watch these quick tutorials with all you need to know to start using Moddy.</p>
			</div>
		</div>
		<div class="grid-container content">
			<div class="grid-x grid-padding-x blogarea">
				<?php  while ( $lister->have_posts() ) : $lister->the_post(); ?>
					<?php echo get_template_part('loop','row');?>
				 <?php endwhile; ?>
			</div>
		</div> */ ?>
	<?php  endif; ?>
	<?php wp_reset_postdata(); ?>
	
	<?php if($list = get_field('learn_boxes')): ?>
		<div class="newar-h">
		<div class="grid-container content">
			<div class="grid-x grid-padding-x blogarea newar">
				<?php foreach($list as $el): ?>
				<div class="large-3 medium-6 small-12 cell">
					<div class="post">
 						<?php if($el['category']) echo '<span class="cat tutorials">'.$el['category'].'</span>'; ?>
 						<?php if($el['title']) echo '<h3>'.$el['title'].'</h3>'; ?>
						<?php if($el['description']) echo '<p>'.$el['description'].'</p>'; ?>
						<?php 
						$link = $el['button'];
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?> 
					</div>
				</div>
				<?php endforeach; ?>
 			</div>
  		</div>
  		</div>
	<?php endif; ?>
			
				
				
 		<?php /* 
		 <!-- <div class="row posts-area" style="padding-bottom:0" >
			<div class="grid-container">
				<h3>Lets dive in!</h3>
				<h2>Tutorials, Calculators, Articles & More!</h2>
			</div>
		</div> -->
		<!--<div class="grid-container content">
			<div class="grid-x grid-padding-x blogarea">
				 <div class="large-3 medium-4 small-12 cell">
					<div class="post">
						<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
							<a href="<?php echo get_post_type_archive_link( 'tutorials' ); ?>" rel="bookmark">
								<span class="cat tutorials">Tutorials</span>
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('post');
								} else {?>
									<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
								<?php }?>
							</a>
						</div>
						<div class="entry-summary">

							<h3>See All Tutorials <span>?</span></h3>
						</div>
					</div>
				</div>
				<div class="large-3 medium-4 small-12 cell">
					<div class="post">
						<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
							<a href="<?php echo get_post_type_archive_link( 'calculators' ); ?>" rel="bookmark">
								<span class="cat calculators">Calculators</span>
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('post');
								} else {?>
									<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
								<?php }?>
							</a>
						</div>
						<div class="entry-summary">

							<h3>See All Calculators <span>?</span></h3>
						</div>
					</div>
				</div>
				<!--<div class="large-3 medium-4 small-12 cell">
					<div class="post">
						<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
							<a href="<?php echo get_post_type_archive_link( 'articles' ); ?>" rel="bookmark">
								<span class="cat articles">Articles</span>
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('post');
								} else {?>
									<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
								<?php }?>
							</a>
						</div>
						<div class="entry-summary">

							<h3>See All Articles <span>?</span></h3>
						</div>
					</div>
				</div>-->
				<!--<div class="large-3 medium-4 small-12 cell">
					<div class="post">
						<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
							<a href="<?php echo get_post_type_archive_link( 'home-modifications' ); ?>" rel="bookmark">
								<span class="cat home-modifications">HOME MODS</span>
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('post');
								} else {?>
									<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
								<?php }?>
							</a>
						</div>
						<div class="entry-summary">

							<h3>See All Home Mods <span>?</span></h3>
						</div>
					</div>
				</div>
				<div class="large-3 medium-4 small-12 cell">
					<div class="post">
						<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
							<a href="<?php echo get_post_type_archive_link( 'templates' ); ?>" rel="bookmark">
								<span class="cat templates">TEMPLATEs</span>
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('post');
								} else {?>
									<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
								<?php }?>
							</a>
						</div>
						<div class="entry-summary">

							<h3>See All Templates <span>?</span></h3>
						</div>
					</div>
				</div>
			</div>
		</div>-->
 <!--
     <?php
		 //$list = new WP_Query(array(
		 //'posts_per_page' => -1,
		 //'post_type' => array('tutorials','articles','calculators','home-modifications','templates'),
		  //"facetwp"        => true 
		//));
		?>
		<?php //if ($list->have_posts()) : ?>
		<div class="row posts-area" style="padding-bottom:0" >
			<div class="grid-container">
				<h3>Learn More</h3>
				<h2>Browse all of our Knowledge Library</h2>
				<div class="filter">
					<?php //echo do_shortcode('[facetwp facet="search"]');?>
					<?php //echo do_shortcode('[facetwp facet="new_facet"]');?>
				</div>
 			</div>
		</div>
		<div class="grid-container content">
			<div class="grid-x grid-padding-x blogarea">
 				<?php  //while ( $list->have_posts() ) : $list->the_post(); ?>
					<?php  //echo get_template_part('loop');?>
				 <?php  //endwhile; ?>
			</div>
		</div>-->
	<?php //endif; ?>
	<?php //wp_reset_postdata(); 
	
	*/
	?>

    
<div class="rec bottom"> <canvas id="gradient-canvas" style="width:100vw;height:15px"></canvas></div>
<?php get_footer(); ?>