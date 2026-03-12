<?php get_header(); ?>
	<div class="grid-container content">
	<?php $n = 0; if (have_posts()) : 
	echo '<div class="grid-x grid-padding-x blogarea">';
	 while (have_posts()) :  the_post();  $n++;
		//if($n==1):
			//get_template_part('loop','big');
		//else:
			get_template_part('loop');
		//endif;
	endwhile;
	echo '</div>';
		wp_pagenavi(); 
	else : get_template_part('404');endif;?>
	</div>
	

<?php get_footer(); ?>