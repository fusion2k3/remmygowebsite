 
<section class="row  linkslist">
	<div class="grid-container">
		<?php if(get_sub_field('top_text')):?>
			<div class="grid-x grid-padding-x align-center">
				<?php echo get_sub_field('top_text');?>
			</div>
		<?php endif;?>
		<?php if($list = get_sub_field('links_list')):?>
			<div class="grid-x grid-padding-x links-list">
			<?php foreach($list as $el): ?>
				<div class="large-4 medium-4 small-12 cell">
					<?php 
					$link = $el['link'];
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
 						<?php if($el['icon']) echo wp_get_attachment_image($el['icon'], 'full', 0, array('title'=> '')); ?>
						<?php $color = $el['background'];
						$hex = $color;
						list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
						 
						?>
 						<?php if($el['tag']) echo '<span class="tag" style="color:'.$color.';background:rgba('.$r.','.$g.','.$b.', 0.1)">'.$el['tag'].'</span>';?>
						<?php echo '<h3>'.esc_html( $link_title ).'</h3>'; ?>
						<?php if($el['description']) echo '<p>'.$el['description'].'</p>';?>
						<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Learn more						</a>
					<?php endif; ?>
				</div>
			<?php endforeach;?>
			</div>
		<?php endif;?>
	</div>
</section>
 