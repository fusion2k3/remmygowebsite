 <div class="large-12 medium-12 small-12 cell">
	<div class="post-row">
		<div class="head">
			<div class="left">
				<div class="h"><span class="num">Lesson</span> <h3><?php the_title();?></h3></div>
				<?php the_excerpt();?>
 			</div>
			<div class="img">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('post');
				} else {?>
					<img style="margin:11.5% auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
				<?php }?>
			</div>
			<span class="arrow"><svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 1L9 8.5L1.5 1" stroke="black" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
		</div>
		<div class="sl">
			<?php if(have_rows('content_builder')):?>
				<?php while(have_rows('content_builder')): ?> 
					<?php the_row();?>
						<?php if( get_row_layout() == 'image_text' ):?>
							<?php if(get_sub_field('image_or_video') == 'image'):?>
								<div class="img-h">
								<?php $image = get_sub_field('image');
								  $imageh = get_sub_field('imagehover');
								$alt = $image['alt'];
								$url = $image['url'];
								$alth = $imageh['alt'];
								$urlh = $imageh['url'];
								if( $image ): ?>
									<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
								<?php endif; ?>
								</div>
							<?php else:?>
								<?php if(get_sub_field('vimeo_id')):?>
									<div class="responsive-container">
										<iframe src="https://player.vimeo.com/video/<?php echo get_sub_field('vimeo_id');?>" width="100%" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
									</div>
								<?php endif;?>
							<?php endif;?>
							
						<?php break; endif;?>
 				<?php endwhile;?>
			<?php endif;?>
			
			<p><a href="<?php the_permalink() ?>" class="link">Read more about <?php the_title();?> within OT Sketch and view screenshots of our software creating various <?php the_title();?>. <span>→</span></a></p>
		</div>
	</div>
</div>