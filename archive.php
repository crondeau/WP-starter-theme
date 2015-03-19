<?php
/**
 * The template for displaying archive and category pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content" class="primary-content">
		
		<?php if (have_posts()) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php the_archive_title(); ?></h1>
			</header>
	
			<?php 
			while (have_posts()) : the_post(); 
			
				get_template_part( 'content' ); 
	
	 	 	endwhile; endif; 
			?>
	
			<?php blm_basic_paging_nav(); ?>
		  
		</section><!-- #content -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>