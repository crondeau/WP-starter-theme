<?php
/**
 * The template for displaying archive and category pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content">
		
			<?php if (have_posts()) : ?>
	
				<h1><?php the_archive_title(); ?></h1>
	
			<?php while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
	    		<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
		 		<?php the_content( 'Read more' );?>
				
				<?php get_template_part( 'inc/meta' ); ?>
			
			</article>
	
	 	 	<?php endwhile; endif; ?>
	
			<?php blm_basic_paging_nav(); ?>
		  
		</section><!-- #content -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>