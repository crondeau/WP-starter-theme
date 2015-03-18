<?php
/**
 * The Sidebar containing the main widget areas which are used on pages.
 *
 * @package blm_basic
 */
?>
<section id="sidebar" class="secondary-sidebar page-widgets" role="complementary">
	
	<?php if ( ! dynamic_sidebar( 'secondary' ) ) : ?>

	<?php endif; ?>
	
</section>