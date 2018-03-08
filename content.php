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
	
	<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="entry__meta">
		<?php blm_basic_posted_on(); ?>
	</div>

	<div class="content__summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry__meta--footer">
		<?php blm_basic_entry_meta(); ?>
	</footer>
	
</article><!-- #post-## -->
