<section class="row gallery">
	<div class="grid-container">
	<?php if(get_sub_field('main_title')) echo '<div class="grid-x grid-padding-x"><h2>'.get_sub_field('main_title').'</h2></div>';?>
	<?php if( have_rows('image_list') ): $i = 0;
		echo '<div class="grid-x grid-padding-x"><div class="gall">';
			while ( have_rows('image_list') ) : the_row(); $i++;
				$image = get_sub_field('image');
 				echo '<div class="sl">';
					 if($image) echo ' '. wp_get_attachment_image($image, 'gallery', 0, array('title'=> '')).' ';
 				echo '</div>';
			endwhile;
		echo '</div></div>';
	endif;?>
	</div>
</section>