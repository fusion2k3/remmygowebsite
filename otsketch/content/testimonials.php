<?php if(get_sub_field('switch_off_slider')):?>
<section class="testimonials row notslider">
	<div class="grid-container">
		<?php if( get_sub_field('main_title')) echo '<h2>'.get_sub_field('main_title').'</h2>';?>
		<?php if($list = get_sub_field('testimonials_list')): ?>
			<?php foreach($list as $el): ?>
			<div class="grid-x grid-padding-x ">
				<?php if($el['photot']) echo '<div class="large-6 medium-6 cell  img">'.wp_get_attachment_image($el['photot'], 'full', 0, array('title'=> '')).'</div>'; ?>
				<div class="large-6 medium-6 cell  ">
					<span class="cat">Testimonial</span>
					<?php if($el['text_area']) echo '<p>'.$el['text_area'].'</p>'; ?>
					<?php if($el['name']) echo '<span class="name">'.$el['name'].'</span>'; ?>
					<?php if($el['position']) echo '<span class="position">'.$el['position'].'</span>'; ?>
					<!--<a class="link" href="#">See more customer stories</a>-->
				</div>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>
<?php else:?>
<section class="testimonials row <?php if(get_sub_field('new_style')) echo 'newstyles';?>">
	<div class="grid-container">
		<?php if(get_sub_field('new_style')) echo '<h3 class="sub">TESTIMONIALS</h3>';?>
		<?php if( get_sub_field('main_title')) echo '<h2>'.get_sub_field('main_title').'</h2>';?>
		<?php if($list = get_sub_field('testimonials_list')): ?>
			<div class="grid-x grid-padding-x align-center">
				<div class="test-slider">
				<?php foreach($list as $el): ?>
					<div class="sl">
					<div class="info">
 						<?php if($el['photot']) echo '<div class="photo">'.wp_get_attachment_image($el['photot'], 'full', 0, array('title'=> '')).'</div>'; ?>
						<?php if($el['name']) echo '<span class="name">'.$el['name'].'</span>'; ?>
						<?php if($el['position']) echo '<span class="position">'.$el['position'].'</span>'; ?>
					</div>
					<?php if($el['rating_star']) echo '<span class="star  '.$el['rating_star'].'">'.$el['rating_star'].'</span>'; ?>
					<?php if($el['text_area']) echo '<p>'.$el['text_area'].'</p>'; ?>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php endif;?>