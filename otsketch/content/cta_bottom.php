<div class="rec bottom"> <canvas id="gradient-canvas" style="width:100vw;height:15px"></canvas></div>
<section class="row columns newcta" <?php if(get_sub_field('background')) echo 'style="background-image:url('.get_sub_field('background').');"';?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x blogarea">
			<?php $text = get_sub_field('text_area');?>
			<div class="large-12 medium-12 cell" ><div class="post">
				<div class="entry-summary">
					<?php if($text) echo ''.$text.'';?>
				</div>
			</div>
		</div>
	</div>
</section>