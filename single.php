<?php
/**
 * The Template for displaying all single posts.
 *
 * @package blm_basic
 */

get_header(); ?>


<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content" class="primary-content left-block">
		
			<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-meta">
							<?php blm_basic_posted_on(); ?>
						</div>
					</header><!-- .entry-header -->
	
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
	
					<nav class="navigation post-navigation" role="navigation">
						<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'blm_basic' ); ?></h1>
						<div class="nav-previous left-block"><?php previous_post_link( '%link' ); ?></div>
						<div class="nav-next right-block"><?php next_post_link( '%link' ); ?></div>
					</nav>
	
				</article><!-- #post-## -->

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			
			endif; endwhile; ?>	

		</section>
	
		<?php get_sidebar(); ?>

	</div><!-- .container -->
</main><!-- .site-main -->

<?php get_footer(); ?>