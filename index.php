<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site__main row">
	<div class="container">

		<main id="primary" class="content block__left">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); 
				
				get_template_part( 'content' ); 

			endwhile; endif; ?>
	
			<?php blm_basic_paging_nav(); ?>
			
		</main><!-- #primary -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</section><!-- .site__main -->
<?php get_footer(); ?>