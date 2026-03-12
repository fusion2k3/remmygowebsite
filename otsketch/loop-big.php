<!--<div class="large-12 medium-12 small-12 cell">
	<div class="post big">
		<div class="img">
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('post-big');
				} else {?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
				<?php }?>
			</a>
		</div>
		<div class="entry-summary">
			<h3><?php the_title();?></h3>
			<?php the_excerpt();?>
			<span class="more">Learn More</span>
		</div>
	</div>
</div>-->
<div class="large-4 medium-4 small-12 cell">
	<div class="post">
		<div class="img" <?php if(get_field('color_picker_th')) echo 'style="background-color:'.get_field('color_picker_th').'"';?>>
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('post');
				} else {?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" width="420" height="230" alt="<?php bloginfo( 'name' ); ?>" />
				<?php }?>
			</a>
		</div>
		<div class="entry-summary">
			<?php $category = get_the_category();$i = 1; ?>
			<?php if($i == 1) {   echo '<span class="cat">'.$category[1]->cat_name.'</span>';   }  $i++;?>
			<h3><?php the_title();?></h3>
			<span class="more">Learn More</span>
		</div>
	</div>
</div>