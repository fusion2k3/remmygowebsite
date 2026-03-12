<section class="row columns" <?php if(get_sub_field('background_image')) echo 'style="background-image:url('.get_sub_field('background_image').');"';?>  <?php if(get_sub_field('custom_id')) echo 'id="'.get_sub_field('custom_id').'"';?>>
	<div class="grid-container">
	<?php if(get_sub_field('section_title')) echo '<div class="grid-x grid-padding-x align-center"><h2>'.get_sub_field('section_title').'</h2></div>';?>
	
	<?php if(get_sub_field('columns_width') == 'fullwidth'):?>
		<?php $class = 'large-12 medium-12 cell'; $size = 'full';?>
	<?php elseif(get_sub_field('columns_width') == 'two'):?>
		<?php $class = 'large-6 medium-6 cell'; $size = 'post-big';?>
	<?php elseif(get_sub_field('columns_width') == 'three'):?>
		<?php $class = 'large-4 medium-4 cell'; $size = 'post';?>
	<?php elseif(get_sub_field('columns_width') == 'four'):?>
		<?php $class = 'large-3 medium-3 cell'; $size = 'post';?>
	<?php endif;?>
	
	<?php if( have_rows('columns_list') ):
		echo '<div class="grid-x grid-padding-x blogarea">';
			while ( have_rows('columns_list') ) : the_row();
				$image = get_sub_field('image');
				$sub_title = get_sub_field('sub_title');
				$title = get_sub_field('title');
				$link = get_sub_field('link');
				echo '<div class="'.$class.'" ><div class="post">';
				
					if($image) echo '<div class="img">';if($link) echo '<a class="more" href="'.$link.'">';
						if($image) echo ''.wp_get_attachment_image($image, $size, 0, array('title'=> '')).''; 
					if($link) echo '</a>';if($image) echo '</div>';
					echo '<div class="entry-summary">';
					if($sub_title) echo '<span class="cat">'.$sub_title.'</span>';
					if($title) echo '<h3>'.$title.'</h3>';
					if($link) echo '<a class="more" href="'.$link.'">Learn More</a>';
				echo '</div></div></div>';
			endwhile;
		echo '</div>';
	endif;?>
	</div>
</section>