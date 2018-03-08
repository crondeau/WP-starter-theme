<?php
/**
 * The template for displaying archive and category pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site__main row">
	<div class="container">

		<main id="primary" class="content block__left">
		
		<?php if (have_posts()) : ?>
			<h1 class="title__page--archive"><?php the_archive_title(); ?></h1>

			<?php while (have_posts()) : the_post(); 
			
				get_template_part( 'content' ); 
	
		 	 endwhile; endif; ?>
	
		<?php blm_basic_paging_nav(); ?>
		  
		</main><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</section><!-- .site__main -->
<?php get_footer(); ?>