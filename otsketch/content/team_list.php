<section class="row teamlist " >
	<div class="grid-container">
	<?php if(get_sub_field('main_title')) echo '<div class="grid-x grid-padding-x align-center"><h2>'.get_sub_field('main_title').'</h2></div>';?>
	<?php if( have_rows('team_list_r') ):
		echo '<div class="grid-x grid-padding-x  gridsarea">';
			while ( have_rows('team_list_r') ) : the_row();
				$photo =   wp_get_attachment_image(get_sub_field('photo'), 'team', 0, array('title'=> '')); 
				$hover =   wp_get_attachment_image(get_sub_field('hover_image'), 'full', 0, array('title'=> '')); 
				$name = get_sub_field('name');
				$position = get_sub_field('position');
				$text = get_sub_field('text');
				$facebook = get_sub_field('facebook');
				$linkedin = get_sub_field('linkedin');
				$twitter = get_sub_field('twitter');
				echo '<div class="large-4 medium-4 cell" >';
				echo '<div class="hold" >';
					if($photo) echo '<div class="photo">'.$photo.'</div>'; 
					if($name ) echo '<h3>'.$name .'</h3>'; 
					if($position ) echo '<span class="position">'.$position  .'</span>'; 
					if($text) echo '<p>'.$text  .'</p>'; 
						echo '<div class="social">';
							if($facebook) echo '<a href="'.$facebook.'" class="facebook">facebook</a>'; 
							if($linkedin) echo '<a href="'.$linkedin.'" class="linkedin">linkedin</a>'; 
							if($twitter) echo '<a href="'.$twitter.'" class="twitter">twitter</a>'; 
						echo '</div>';
					if($hover) echo '<div class="hover">'.$hover.'</div>';
				echo '</div>';
				echo '</div>';
			endwhile;
		echo '</div>';
	endif;?>
	</div>
</section>