<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site-main row">
	<div class="container">

		<div id="primary" class="primary-content left-block">
			<main id="main" class="content-area" role="main">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); 
				
				get_template_part( 'content' ); 

			endwhile; endif; ?>
	
			<?php blm_basic_paging_nav(); ?>
			
			</main><!-- #main -->
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</section><!-- .site-main -->
<?php get_footer(); ?>