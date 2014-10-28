<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package blm_basic
 */

get_header(); ?>

<main id="main" class="site-main row" role="main">
	<div class="container">
	
		<section id="content">
		
			<?php if (have_posts()) : ?>
	
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		
				<?php if (is_category()) { ?>				
					<h1><?php echo single_cat_title(); ?></h1>
			
				<?php } elseif( is_tag() ) { ?>
					<h1>Posts Tagged: <?php single_tag_title(); ?></h1>
			
				<?php } elseif (is_day()) { ?>
					<h1>Archive for <?php echo get_the_date(); ?></h1>
			
				<?php } elseif (is_month()) { ?>
					<h1>Archive for <?php echo get_the_date( _x( 'F Y', 'monthly archives date format', 'blm_basic' ) ) ?></h1>
			
				<?php } elseif (is_year()) { ?>
					<h1>Archive for <?php echo get_the_date( _x( 'Y', 'yearly archives date format', 'blm_basic' ) ) ?></h1>
			
				<?php } elseif (is_search()) { ?>
					<h1>Search Results</h1>
			
				<?php } elseif (is_author()) { ?>
					<h1>Author Archive</h1>
			
				<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1>Blog Archives</h1>
			
				<?php } ?>
	
			<?php while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
	    		<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
		 		<?php the_content( __( 'Read more', 'blm_basic' ) );?>
				
				<?php get_template_part( 'inc/meta' ); ?>
			
			</article>
	
	 	 	<?php endwhile; endif; ?>
	
			<?php blm_basic_paging_nav(); ?>
		  
		</section><!-- #content -->

		<?php get_sidebar(); ?>
		
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>