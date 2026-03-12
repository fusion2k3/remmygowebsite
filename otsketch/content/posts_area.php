<section class="posts-area row ">
	<div class="grid-container">
		<?php if( get_sub_field('top_area')) echo '<div class="top">'.get_sub_field('top_area').'</div>';?>
		<?php
			$featured_posts = get_sub_field('posts_list');
			if( $featured_posts ): ?>
			    <div class="grid-x grid-padding-x align-center">
			    <?php foreach( $featured_posts as $featured_post ): 
			        $permalink = get_permalink( $featured_post->ID );
			        $title = get_the_title( $featured_post->ID );
					$featured_img_url = get_the_post_thumbnail_url($featured_post->ID,'post'); 
			        $custom_field = get_field( 'field_name', $featured_post->ID );
			        ?>
			        <div class="large-3 medium-4 small-12 cell">
			            <div class="post">
							<div class="img" style="background-color:#ef5a5f">
								<a href="<?php echo $permalink;?>" rel="bookmark">
									<span class="cat">Tutorial</span>
									<?php if($featured_img_url):?>
									<img src="<?php echo $featured_img_url;?>" class="attachment-post size-post wp-post-image" alt="">	
									<?php else:?>
									<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
									<?php endif;?>
								</a>
							</div>
							<div class="entry-summary">
								
								<h3><?php echo $title;?> <span><span class="ar">→</span></span></h3>
 							</div>
						</div>
			        </div>
			    <?php endforeach; ?>
			    </div>
			<?php endif; ?>
		<?php if( get_sub_field('button_link')) echo '<a class="button" href="'.get_sub_field('button_link').'">'.get_sub_field('button_url').'</a>';?>
		
	</div>
</section>