<section class="logoslist row ">
	<div class="grid-container">
		<?php if( get_sub_field('section_title')) echo get_sub_field('section_title');?>
		<?php if($list = get_sub_field('logos_list_box')): ?>
			<div class="grid-x grid-padding-x align-center">
				<?php foreach($list as $el): ?>
					<?php if($el['link']) echo '<a href="'.$el['link'].'" target="_blank" rel="noreferrer noopener">'; ?>
						<?php if($el['image']) echo wp_get_attachment_image($el['image'], 'full', 0, array('title'=> '')); ?>
					<?php if($el['link']) echo '</a>'; ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>