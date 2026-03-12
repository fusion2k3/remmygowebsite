<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<section class="row image-text " >
			<div class="grid-container">
				<div class="grid-x grid-padding-x " >
					<div class="large-6 medium-12 cell ">
 						<?php gravity_form(2, true, true, false, '', true, 10); ?>
					</div>
 
					<div class="large-6 medium-12 cell ">
						<?php the_content();?>
 					</div>
				</div>
			</div>
		</section>
		<?php if($list = get_field('_locs_list')): ?>
		<section class="row columns">
			<div class="grid-container">
			
				<div class="grid-x grid-padding-x ">
					<h2>Office Locations</h2>
				</div>
				<div class="grid-x grid-padding-x blogarea">
					<?php foreach($list as $el): ?>
					<div class="large-3 medium-6 cell " ><div class="post">
						<?php if($el['_loc_image']) echo '<div class="img"><a href="'.$el['_loc_link'].'" target="_blank" rel="noreferrer noopener">'.wp_get_attachment_image($el['_loc_image'], 'post', 0, array('title'=> '')).'</a></div>'; ?>
						<div class="entry-summary">
							<?php if($el['_loc_title']) echo '<h3>'.$el['_loc_title'].'</h3>'; ?>
							<?php if($el['_loc_add']) echo '<span class="add">'.$el['_loc_add'].'</span>'; ?>
							<?php if($el['_loc_tel']) echo '<span class="tel">'.$el['_loc_tel'].'</span>'; ?>
							<?php if($el['_loc_fax']) echo '<span class="fax">'.$el['_loc_fax'].'</span>'; ?>
							<a href="#" class="button" data-loc="<?php echo $el['_loc_title'];?>" data-open="modal">Send Enquiry</a>
						</div></div></div>
					<?php endforeach; ?>
				</div>
			
			</div>
		</section>
		<?php endif; ?>
		<div class="large-6 medium-6 cell reveal" data-reveal id="modal" >
			<button class="close-button" data-close aria-label="Close modal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php gravity_form(4, true, true, false, '', true, 10); ?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>