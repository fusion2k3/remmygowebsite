<?php if(is_singular('tutorials')):?>
	<section <?php if(get_sub_field('custom_id')) echo 'id="'.get_sub_field('custom_id').'"';?> class="<?php if(get_sub_field('image_position') == 'left') echo 'arright';?> <?php if(get_sub_field('image_shadow')) echo 'shadow';?> <?php if(get_sub_field('bottom_arrow')) echo 'bottomar';?> row image-text <?php if(get_sub_field('background_color')) echo 'hasbg';?>" <?php if(get_sub_field('background_color')) echo 'style="background-color:'.get_sub_field('background_color').'"';?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x <?php if(get_sub_field('image_position') == 'right') echo 'flex-dir-row-reverse';?>" >
			<?php if(get_sub_field('image_or_video') == 'image'):?>
			<div class="large-6 medium-6 cell  <?php if(get_sub_field('background_under')) echo 'bg';?>" <?php if(get_sub_field('background_under')) echo 'style="background-image:url('.get_sub_field('background_under').');"';?>>
			<?php else :?>
			<div class="large-8 medium-6 cell  <?php if(get_sub_field('background_under')) echo 'bg';?>" <?php if(get_sub_field('background_under')) echo 'style="background-image:url('.get_sub_field('background_under').');"';?>>
			<?php endif;?>
			
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
						<?php if($imageh):?><div class="h"><img src="<?php echo esc_url($urlh); ?>" alt="<?php echo esc_attr($alth); ?>" /></div><?php endif;?>
					<?php endif; ?>
					</div>
				<?php else:?>
					<?php if(get_sub_field('vimeo_id')):?>
						<iframe src="https://player.vimeo.com/video/<?php echo get_sub_field('vimeo_id');?>" width="100%" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					<?php endif;?>
				<?php endif;?>
			</div>
			<?php if(get_sub_field('image_or_video') == 'image'):?>
			<div class="large-6 medium-6 cell " >
			<?php else :?>
			<div class="large-4 medium-6 cell " >
			<?php endif;?>
				<?php if(get_sub_field('text_area')) echo get_sub_field('text_area');?>
			</div>
		</div>
	</div>
</section>

<?php else:?>
<section <?php if(get_sub_field('custom_id')) echo 'id="'.get_sub_field('custom_id').'"';?> class="<?php if(get_sub_field('box_design')) echo 'box_design';?>  <?php if(get_sub_field('image_position') == 'left') echo 'arright';?> <?php if(get_sub_field('bottom_arrow')) echo 'bottomar';?> <?php if(get_sub_field('image_shadow')) echo 'shadow';?> row image-text <?php if(get_sub_field('background_color')) echo 'hasbg';?>" <?php if(get_sub_field('background_color')) echo 'style="background-color:'.get_sub_field('background_color').'"';?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x <?php if(get_sub_field('image_position') == 'right') echo 'flex-dir-row-reverse';?>" >
			<div class="large-6 medium-6 cell  <?php if(get_sub_field('background_under')) echo 'bg';?>" <?php if(get_sub_field('background_under')) echo 'style="background-image:url('.get_sub_field('background_under').');"';?>>
				
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
						<?php if($imageh):?><div class="h"><img src="<?php echo esc_url($urlh); ?>" alt="<?php echo esc_attr($alth); ?>" /></div><?php endif;?>
					<?php endif; ?>
					</div>
				<?php else:?>
					<?php if(get_sub_field('vimeo_id')):?>
						<iframe src="https://player.vimeo.com/video/<?php echo get_sub_field('vimeo_id');?>" width="100%" height="400" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					<?php endif;?>
				<?php endif;?>
			</div>
			<div class="large-6 medium-6 cell " >
				<?php if(get_sub_field('text_area')) echo get_sub_field('text_area');?>
			</div>
		</div>
	</div>
</section>
<?php endif;?>