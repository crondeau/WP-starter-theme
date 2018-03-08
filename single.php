<?php
/**
 * The Template for displaying all single posts.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site__main row">
	<div class="container">

		<main id="primary" class="content block__left">
		
		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry__meta">
						<?php blm_basic_posted_on(); ?>
					</div>

				<div class="content__area">
					<?php the_content(); ?>
				</div>

				<nav class="navigation post__nav" role="navigation">
					<h2 class="screen-reader-text"><?php _e( 'Post navigation', 'blm_basic' ); ?></h2>
					<div class="post__nav--previous"><?php previous_post_link( '%link' ); ?></div>
					<div class="post__nav--next"><?php next_post_link( '%link' ); ?></div>
				</nav>

			</article><!-- #post-## -->

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
		
			endif; endwhile; ?>	

		</main><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</section><!-- .site__main -->

<?php get_footer(); ?>