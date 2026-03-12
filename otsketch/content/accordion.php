<section class="row acc">
	<div class="grid-container">
	<?php if(get_sub_field('section_title')) echo '<div class="grid-x grid-padding-x"><h2>'.get_sub_field('section_title').'</h2></div>';?>
	<?php if( have_rows('accordion_list') ): $i = 0;
		echo '<div class="grid-x grid-padding-x"><ul role="tablist" class="accordion" data-accordion data-allow-all-closed="true">';
			while ( have_rows('accordion_list') ) : the_row(); $i++;
				$question = get_sub_field('question');
				$answer = get_sub_field('answer');
				echo '<li class="accordion-item' ;
					if($i == 1) echo ' is-active';
				echo '" data-accordion-item="">';
					 if($question) echo '<a href="#collapse'.$i.'" class="accordion-title" ><span>'.$question.'</span></a>';
					 if($answer) echo '<div id="collapse'.$i.'" class="accordion-content" data-tab-content><div>'.$answer.'</div></div>';
				echo '</li>';
			endwhile;
		echo '</ul></div>';
	endif;?>
	</div>
</section>