<?php
/**
 * The default template for displaying content on single posts
 *
 *
 * @package blm_basic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php blm_basic_posted_on(); ?>
		</div>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'blm_basic' ); ?></h1>
		<div class="nav-previous left-block"><?php previous_post_link( '%link' ); ?></div>
		<div class="nav-next right-block"><?php next_post_link( '%link' ); ?></div>
	</nav>
	
</article><!-- #post-## -->
