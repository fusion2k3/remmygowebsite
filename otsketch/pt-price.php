<?php /* Template Name: Price*/ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			
			<section class="tabsrow row newstyle">
				<div class="grid-container">
					<?php if(get_field('top_text_tab')):?>
						<div class="grid-x grid-padding-x align-center">
							<div class="large-12 medium-12 cell">
								<?php echo get_field('top_text_tab');?>
							</div>
						</div>
					<?php endif;?>
					
					<?php if($list = get_field('tabs_list')): ?>
						<div class="grid-x grid-padding-x">
							<div class="large-12 medium-12 cell">
							<?php $j = 0; foreach($list as $el): $j++; ?>
								<div class="tab" id="tab<?php echo $j; ?>">
									<div class="tab-h">
									<?php if($l = $el['pricing_boxes']): ?>
										<?php $r = 0; foreach($l as $sl): $r++; ?>
											<?php
											$one_ten      = $sl['ten'];
											$twenty       = $sl['twenty'];
											$thirty       = $sl['thirty'];
											$more_thirty  = $sl['more_thirty'];
											$base_price   = $sl['price_tab'];
											?>
											<div
												class="box <?php if ($sl['recom']) echo 'recom'; ?> <?php if($r == 1) echo 'act'; ?>"
												data-base_price="<?php echo esc_attr($base_price); ?>"
												data-ten="<?php echo esc_attr($one_ten); ?>"
												data-twenty="<?php echo esc_attr($twenty); ?>"
												data-thirty="<?php echo esc_attr($thirty); ?>"
												data-more_thirty="<?php echo esc_attr($more_thirty); ?>"
											>
												<div class="t">
													<?php if($sl['top_icons']) echo '<div class="img">'.wp_get_attachment_image($sl['top_icons'], 'full', 0, array('title'=> '')).'</div>'; ?>
													<?php if($sl['title_pr']) echo '<h3>'.$sl['title_pr'].'</h3>'; ?>
													<?php if($sl['description']) echo '<span class="desc">'.$sl['description'].'</span>'; ?>
													<?php if($sl['price_tab'] || $sl['per_month']) echo '<span class="price"><strong>'.$sl['price_tab'].'</strong> '.$sl['per_month'].'</span>'; ?>
													<?php if($sl['save_info']) echo '<span class="save">'.$sl['save_info'].'</span>'; ?>
												</div>
												<?php if($sl['button_link']) echo '<a class="button" href="'.$sl['button_link'].'">Start for free</a>'; ?>
												<?php if($sl['description_tav']) echo '<div class="desc-box">'.$sl['description_tav'].'</div>'; ?>
											</div>
										<?php endforeach; ?>
									<?php endif; ?>
									</div>
								</div>
							<?php endforeach; ?>
							<?php if(get_field('bottom_text_tab') || get_field('bottom_text_tab_right')): ?>
								<div class="pink-box">
									<div class="col">
										<?php echo get_field('bottom_text_tab'); ?>
									</div>
									<div class="col">
										<?php echo get_field('bottom_text_tab_right'); ?>
									</div>
								</div>
							<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					
				
				</div>
			</section>
			<?php if(get_field('top_text_pr') || get_field('top_columns')):?>
			<section class="three-col row ">
				<div class="grid-container">
					<?php if(get_field('top_text_pr')):?>
						<div class="grid-x grid-padding-x align-center">
							<div class="large-12 medium-12 cell">
								<?php echo get_field('top_text_pr');?>
							</div>
						</div>
					<?php endif;?>
					<?php if($list = get_field('top_columns')): ?>
						<div class="grid-x grid-padding-x">
							<?php foreach($list as $el): ?>
							<div class="large-4 medium-4 cell">
								<div class="icon-box">
									<?php if($el['icon_pr']) echo '<div class="img">'.wp_get_attachment_image($el['icon_pr'], 'full', 0, array('title'=> '')).'</div>'; ?>
									<div class="text-holder">
										<!-- <?php if($el['title_pr']) echo '<h3>'.$el['title_pr'].'</h3>'; ?> -->
										<?php if($el['text_pr']) echo '<p>'.$el['text_pr'].'</p>'; ?>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>
			<?php endif;?>
			<?php if($list = get_field('logos_list_pr')): ?>
			<section class="logoslist row ">
				<div class="grid-container">
					
						<div class="grid-x grid-padding-x align-center">
							<?php foreach($list as $el): ?>
								<?php if($el['link_lp']) echo '<a href="'.$el['link_lp'].'" target="_blank" rel="noreferrer noopener">'; ?>
									<?php if($el['image_lp']) echo wp_get_attachment_image($el['image_lp'], 'full', 0, array('title'=> '')); ?>
								<?php if($el['link_lp']) echo '</a>'; ?>
							<?php endforeach; ?>
						</div>
					
				</div>
			</section>
			<?php endif; ?>
			<?php if($list = get_field('testimonials_list')): ?>
			<section class="row image-text ">
				<div class="grid-container">
					<div class="grid-x grid-padding-x flex-dir-row-reverse">
						<?php if(get_field('video_url_tpr')):?>
							<div class="large-5 medium-5 cell bg" <?php if(get_field('video_poster_pric')):?>style="background-image:url(<?php echo get_field('video_poster_pric');?>);"<?php endif;?>>
								<iframe src="https://player.vimeo.com/video/<?php echo get_field('video_url_tpr');?>" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" width="100%" height="400" frameborder="0"></iframe>
							</div>
						<?php endif;?>
						<div class="large-7 medium-7 cell ">
							<?php if($list = get_field('testimonials_list')): ?>
								<div class="test-gall">
									<?php foreach($list as $el): ?>
										<div class="sl">
											<?php if($el['photo_tpr']) echo '<div class="photo">'.wp_get_attachment_image($el['photo_tpr'], 'full', 0, array('title'=> '')).'</div>'; ?>
											<div class="cont">
												<?php if($el['text_tpr']) echo '<p>'.$el['text_tpr'].'</p>'; ?>
												<div class="info">
													<?php if($el['name_tpr']) echo '<span class="name">'.$el['name_tpr'].'</span>'; ?>
													<?php if($el['prof_tpr']) echo '<span class="prof">'.$el['prof_tpr'].'</span>'; ?>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<?php endif;?>
				
			<?php if(get_field('left_image_n') || get_field('right_text_n')):?>
				<section class="row image-text-new expanded">
						<div class="grid-x ">
							<div class="large-6 medium-6 cell ">
								<?php if(get_field('left_image_n')) echo '<div class="photo">'.wp_get_attachment_image(get_field('left_image_n'), 'full', 0, array('title'=> '')).'</div>'; ?>
							</div>
							<div class="large-6 medium-6 cell ">
								<div class="text">
									<?php if(get_field('right_text_n')) echo get_field('right_text_n');?>
								</div>
							</div>
						</div>
				</section>
			<?php endif;?>
			
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>