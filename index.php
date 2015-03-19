<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
		
		<section id="content" class="primary-content">
		
			<?php 
			if (have_posts()) : while (have_posts()) : the_post(); 
				
				get_template_part( 'content' ); 

			endwhile; endif; 
			?>
	
			<?php blm_basic_paging_nav(); ?>
	
		</section><!-- #content -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>