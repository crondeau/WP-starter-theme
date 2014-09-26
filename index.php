<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
		
			<section id="content">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
						<?php the_content( 'Read more' ); ?>
				
						<?php get_template_part( 'inc/meta' ); ?>

					</article>
		
				<?php endwhile; endif; ?>
	
				<?php blm_basic_paging_nav(); ?>
	
			</section><!-- #content -->

			<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>