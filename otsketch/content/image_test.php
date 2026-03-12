 <section   class="   row image-text testimon"  >
	<div class="grid-container">
		<div class="grid-x grid-padding-x  " >
			<div class="large-6 medium-12 cell   "  >
				<?php if(get_sub_field('image') ):?>
					<div class="img-h">
					<?php $image = get_sub_field('image');
					if( $image ): 
						 if($image) echo wp_get_attachment_image($image, 'full', 0, array('title'=> '')); ?>						 
 					<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="large-6 medium-12 cell " >
				<?php if(get_sub_field('tag')) echo '<span class="tag">'.get_sub_field('tag').'</span>';?>
				<?php if(get_sub_field('title')) echo '<h3>'.get_sub_field('title').'</h3>';?>
				<?php if(get_sub_field('text')) echo ''.get_sub_field('text').'';?>
				<div class="author">
					<?php  if(get_sub_field('photo')) echo wp_get_attachment_image(get_sub_field('photo'), 'photo', 0, array('title'=> '')); ?>		
					<div class="h">
						<?php if(get_sub_field('name')) echo '<span class="name">'.get_sub_field('name').'</span>';?>
						<?php if(get_sub_field('position')) echo '<span class="position">'.get_sub_field('position').'</span>';?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 