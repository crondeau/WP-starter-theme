<?php
/**
 * The template for displaying all pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site-main row">
	<div class="container">

		<div id="primary" class="primary-content left-block">
			<main id="main" class="content-area" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
	
				</article><!-- #post-## -->

			<?php endwhile; ?>
		
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</section><!-- .site-main -->
<?php get_footer(); ?>