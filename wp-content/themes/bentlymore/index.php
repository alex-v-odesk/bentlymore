<?php
	
/* Template Name: Case Results */	
	
get_header(); ?>

<div class="main">
	
	<div class="inner_main">
		
		<div class="one_column">
			
			<div class="internal_header_wrapper content">
				
				<h1>News Stories</h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				
				<div class="att_bio_wrapper">
					
					<?php get_sidebar('blog'); ?>
					
					<div class="inner_content content">
			
						<?php get_template_part( 'loop', 'index' );?>
			
					
					</div><!-- inner_content -->	
					
					
				</div><!-- att_bio_wrapper -->			
					
		
		</div><!-- one_column -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
