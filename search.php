<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site-main row">
	<div class="container">

		<div id="primary" class="primary-content left-block">
			<main id="main" class="content-area" role="main">
				
				
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'blm_basic' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
				
			<?php if ( have_posts() ) : ?>	
				
				<?php while (have_posts()) : the_post(); 
			
					get_template_part( 'content' );
					
				endwhile; ?>
		   
		   		<?php blm_basic_paging_nav(); ?>
		   
		  	 	<?php else: ?>

			   	<article class="no-results">
		
				   <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
				   
			   </article>
	
	  	 <?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</section><!-- .site-main -->
<?php get_footer(); ?>