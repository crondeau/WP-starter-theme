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
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
						<h1 class="page-title"><?php the_title(); ?></h1>
			
						<?php the_content(); ?>
			
					</article>
		
				<?php endwhile; endif; ?>
		
			</section><!-- #content -->

			<?php get_sidebar(); ?>
	
	</div><!-- .container -->
</main><!-- #main -->
<?php get_footer(); ?>