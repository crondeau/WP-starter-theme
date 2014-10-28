<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content">
		
			<h1>Search results</h1>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
					<?php the_excerpt(); ?>

				</article>
		
	 	   <?php endwhile; else: ?>
			   
			   <article class="no-results">
		
				   <p>Sorry, no posts matched your criteria. Please try another keyword.</p>
				   
			   </article>
	
	  	 	<?php endif; ?>
	
			<?php blm_basic_paging_nav(); ?>
			
		</section><!-- #content -->

		<?php get_sidebar(); ?>
			
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>