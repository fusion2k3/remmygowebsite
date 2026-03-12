<section class="row calculatorarea" >
	<div class="grid-container">
		<div class="grid-x grid-padding-x ">
		<div class="calc-hold ">
			<?php if(get_sub_field('shortcode')):?>
				<div class="top">
				<?php echo do_shortcode(get_sub_field('shortcode'));?>
				</div>
			<?php endif;?>
			<?php if(get_sub_field('diagram_image')) echo '<div class="d-holder"><h2>Diagram</h2>'.wp_get_attachment_image(get_sub_field('diagram_image'), 'full', 0, array('title'=> '')).'</div>'; ?>
		</div>
		</div>
	</div>
</section>
