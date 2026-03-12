<section class="row columns-text  videos-c"  >
	<div class="grid-container">
	<?php if(get_sub_field('title')) echo '<div class="grid-x grid-padding-x align-center"><h2>'.get_sub_field('title').'</h2></div>';?>
	<?php if(get_sub_field('title_sub')) echo '<div class="grid-x grid-padding-x align-center"><p class="sub">'.get_sub_field('title_sub').'</p></div>';?>
	<?php 
	$link = get_sub_field('video_button');
	if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
		?>
		<div class="grid-x grid-padding-x align-center"><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
	<?php endif; ?>
	<?php	echo '<div class="grid-x grid-padding-x  gridsarea">';
		$text = get_sub_field('video_url');
		echo '<div class=" large-12 medium-12 cell " >';
		echo '<div class="hold" >';
			echo '<div class="videoarea" style="padding: 56% 0 0 0; position: relative;"><iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" title="Introducing Moddy Photos!" src="'.$text.'" frameborder="0"></iframe></div>';
			 if(get_sub_field('poster')) echo '<div class="poster" style="background-image:url('.get_sub_field('poster').')"><span class="play"><svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path opacity="0.4" d="M69.825 128.333C102.042 128.333 128.158 102.216 128.158 69.9998C128.158 37.7832 102.042 11.6665 69.825 11.6665C37.6084 11.6665 11.4916 37.7832 11.4916 69.9998C11.4916 102.216 37.6084 128.333 69.825 128.333Z" fill="white"/>
			<path d="M87.325 59.6749L70.4083 49.9332C66.2083 47.4832 61.1333 47.4832 56.9333 49.9332C52.7333 52.3832 50.225 56.6999 50.225 61.5999V81.1415C50.225 85.9832 52.7333 90.3582 56.9333 92.8082C59.0333 94.0332 61.3666 94.6165 63.6416 94.6165C65.975 94.6165 68.25 94.0332 70.35 92.8082L87.2666 83.0665C91.4666 80.6165 93.975 76.2999 93.975 71.3999C94.0916 66.4999 91.5833 62.1249 87.325 59.6749Z" fill="white"/>
			</svg>
			</span></div>';
		echo '</div>';
		echo '</div>';
	echo '</div>';
	?>
	</div>
</section>