
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<div class="single_post">
		
		<div class="single_post_img">
			
			<img src="<?php bloginfo('template_directory');?>/images/post-image.png"/>
			
		</div><!-- single_post_img -->
		
		<div class="single_post_content">
		
			<h2><a class="post_link" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			
			<div class="post_info">
				
				<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date; ?></span>
				<span class="user">Bently & More LLP</span>
				
				<?php echo get_the_category_list();?>
				
			</div><!-- post_info -->
	
			<div class="excerpt">
			
				<?php echo wp_trim_words( get_the_content(), 32, '...' );?>
			
				<?php edit_post_link( __( 'Edit'), '', '' ); ?>
			
			<a class="read_more" href="">Read More</a><!-- Read More -->
			
			</div><!-- excerpt -->
		
		</div><!-- single_post_content -->
		
	</div><!-- single_post -->
			
		
<?php endwhile; // end of loop ?>

<?php endif; ?>



<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav-below" class="navigation">
		
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></div>
			
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
	
	</div><!-- #nav-below -->

<?php endif; ?>

