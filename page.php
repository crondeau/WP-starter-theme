<?php
/**
 * The template for displaying all pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<main class="site__main row">
	<div class="container--narrow">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="title__page"><?php the_title(); ?></h1>
			
			<div class="content__area">
				<?php the_content(); ?>
			</div><!-- .content__area -->

		<?php endwhile; ?>

	</div><!-- .container -->
</main><!-- .site__main -->
<?php get_footer(); ?>