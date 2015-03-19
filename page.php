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
		
			<?php while (have_posts()) : the_post(); ?>		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article>
			<?php endwhile; ?>
		
		</section><!-- #content -->

		<?php get_sidebar(); ?>
	
	</div><!-- .container -->
</main><!-- #main -->
<?php get_footer(); ?>