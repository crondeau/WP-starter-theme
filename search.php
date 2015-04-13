<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content" class="primary-content left-block">
		<?php if ( have_posts() ) : ?>	
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'blm_basic' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
		
			<?php 
			while (have_posts()) : the_post(); 
			
				get_template_part( 'content' );
		
	 	   endwhile; 
		   ?>
		   
		   		<?php blm_basic_paging_nav(); ?>
		   
		   <?php else: ?>
			   
			   <article class="no-results">
		
				   <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
				   
			   </article>
	
	  	 <?php endif; ?>

		</section><!-- #content -->

		<?php get_sidebar(); ?>
			
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>