<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site__main row">
	<div class="container">
		
		<div class="two__column--area">

			<main id="primary" class="content">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); 
				
					get_template_part( 'content' ); 

				endwhile; endif; ?>
	
				<?php blm_basic_paging_nav(); ?>
			
			</main><!-- #primary -->
		
			<?php get_sidebar(); ?>
		
		</div><!-- .two__column--area -->
		
	</div><!-- .container -->
</section><!-- .site__main -->
<?php get_footer(); ?>