<?php
/**
 * The Template for displaying all single posts.
 *
 * @package blm_basic
 */

get_header(); ?>


<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content" class="primary-content">
		
			<?php 
			while (have_posts()) : the_post(); 
				
				get_template_part( 'content', 'single' ); 


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			
			endwhile; 
			?>	

		</section>
	
		<?php get_sidebar(); ?>

	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>