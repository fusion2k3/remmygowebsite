<section class="row columns-text <?php if(get_sub_field('box_design')) echo 'boxdesign';?> <?php if(get_sub_field('background_color')) echo 'hasbg';?>" style="<?php if(get_sub_field('background_nw')) echo 'background-image:url('.get_sub_field('background_nw').');background-size:cover;';?> <?php if(get_sub_field('paadding_bottom')) echo 'padding-bottom:'.get_sub_field('paadding_bottom').'px;';?> <?php if(get_sub_field('padding_top')) echo 'padding-top:'.get_sub_field('padding_top').'px;';?>  <?php if(get_sub_field('background_color')) echo 'background-color:'.get_sub_field('background_color').';';?>" >
	<div class="grid-container">
	<?php if(get_sub_field('section_title')) echo '<div class="grid-x grid-padding-x align-center"><h2>'.get_sub_field('section_title').'</h2></div>';?>
	<?php if(get_sub_field('section_sub_title')) echo '<div class="grid-x grid-padding-x align-center"><p class="sub">'.get_sub_field('section_sub_title').'</p></div>';?>

	<?php if(get_sub_field('columns_width') == 'fullwidth'):?>
		<?php $class = 'large-12 medium-12 cell';?>
	<?php elseif(get_sub_field('columns_width') == 'two'):?>
		<?php $class = 'large-6 medium-6 cell';?>
	<?php elseif(get_sub_field('columns_width') == 'three'):?>
		<?php $class = 'large-4 medium-4 cell';?>
	<?php elseif(get_sub_field('columns_width') == 'four'):?>
		<?php $class = 'large-3 medium-3 cell';?>
	<?php endif;?>
	<?php if( have_rows('columns_list') ):
		echo '<div class="grid-x grid-padding-x  gridsarea">';
			while ( have_rows('columns_list') ) : the_row();
				$text = get_sub_field('text_area');
				echo '<div class="'.$class.' " >';
				
				echo '<div class="hold" >';
					if(is_front_page()) echo '<div class="blur"></div>';
					if($text) echo $text; 
				echo '</div>';
				echo '</div>';
			endwhile;
		
		
		echo '</div>';
		
		if(is_front_page()):
			echo '<div class="grid-x grid-padding-x infoboxes ">';
				echo '<div class="large-4 medium-4 cell">
					<h3>8 Hours</h3>
					<p>Avg time saved per client/week</p>
				</div>
				<div class="large-4 medium-4 cell">
					<h3>Xero</h3>
					<p>Integrates seamlessly with Xero</p>
				</div>
				
				<div class="large-4 medium-4 cell">
					<h3>AI Powered</h3>
					<p>Custom AI model that handles the grunt work</p>
				</div>
				';
			echo '</div>';
		endif;
		
	endif;?>
	</div>
	<?php  if(is_front_page()):?><div class="starfield" style="display:none"></div><?php endif;?>
</section>