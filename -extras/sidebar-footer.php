<?php
/**
 * The Footer Sidebar
 *
 * @package blm_basic
 */

?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'footer-1'  )
		&& ! is_active_sidebar( 'footer-2' )
		&& ! is_active_sidebar( 'footer-3'  )
		&& ! is_active_sidebar( 'f00ter-4' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="footer-widget-area" class="footer-sidebar row">
		<div class="container" role="complementary">

			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>

				<?php dynamic_sidebar( 'footer-1' ); ?>

			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>

				<?php dynamic_sidebar( 'footer-2' ); ?>

			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				
				<?php dynamic_sidebar( 'footer-3' ); ?>

			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				
				<?php dynamic_sidebar( 'footer-4' ); ?>

			<?php endif; ?>

		</div>
</div><!-- #footer-widget-area -->
