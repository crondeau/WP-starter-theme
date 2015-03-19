<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content" class="primary-content">
		<?php if ( have_posts() ) : ?>	
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'blm_basic' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
		
			<?php while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<header class="entry-header">
						<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					</header><!-- .entry-header -->
					
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->

				</article>
		
	 	   <?php endwhile; ?>
		   
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