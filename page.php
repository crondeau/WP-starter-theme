<?php
/**
 * This template will be used to display page content.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">

		<section id="content" class="primary-content">
		
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'page' );

			endwhile;
			?>
		
		</section><!-- #content -->

		<?php get_sidebar(); ?>
	
	</div><!-- .container -->
</main><!-- #main -->
<?php get_footer(); ?>