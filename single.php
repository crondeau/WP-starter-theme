<?php
/**
 * The Template for displaying all single posts.
 *
 * @package blm_basic
 */

get_header(); ?>


<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content" class="primary-content">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<h1 class="post-title"><?php the_title(); ?></h1>
			
				<?php the_content(); ?>
						
				<?php get_template_part( 'inc/meta' ); ?>
			
				<nav class="navigation post-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'blm_basic' ); ?></h1>
						<div class="nav-previous"><?php previous_post_link( '%link' ); ?></div>
						<div class="nav-next"><?php next_post_link( '%link' ); ?></div>
				</nav>
			
			</article>

	 	   <?php comments_template(); ?>
	
	 	 <?php endwhile; endif; ?>
	
		</section>
	
		<?php get_sidebar(); ?>

	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>