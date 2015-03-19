<?php
/**
 * The default template for displaying content on the blog
 *
 * Used for index/archive/search.
 *
 * @package blm_basic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="entry-meta">
			<?php blm_basic_posted_on(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php blm_basic_entry_meta(); ?>
	</footer>
	
</article><!-- #post-## -->
