<section class="row columns productslist" >
	<div class="grid-container">
	<?php if(get_sub_field('section_title')) echo '<div class="grid-x grid-padding-x align-center"><div class="large-12 medium-12 cell">'.get_sub_field('section_title').'</div></div>';?>
		
	<?php if( have_rows('products_list_rp') ):
		echo '<div class="grid-x grid-padding-x blogarea">';
			while ( have_rows('products_list_rp') ) : the_row();
				$image = get_sub_field('image');
				$icon = get_sub_field('title_icon');
				$title = get_sub_field('title');
				$text = get_sub_field('text');
				$link = get_sub_field('link');
				echo '<div class="large-6 medium-6 cell" ><div class="post">';
					if($image) echo '<div class="img">'.wp_get_attachment_image($image, 'post-big', 0, array('title'=> '')).'</div>'; 
					echo '<div class="entry-summary">';
					if($title) echo '<h3>';
					if($icon) echo ''.wp_get_attachment_image($icon, 'thumbnail', 0, array('title'=> '')).''; 
					if($title) echo ''.$title.'';
					if($title) echo '</h3>';
					if($text) echo '<p>'.$text.'</p>';
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif;
				echo '</div></div></div>';
			endwhile;
		echo '</div>';
	endif;?>
	</div>
</section>