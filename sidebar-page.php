<?php
/**
 * The Sidebar containing the main widget areas which are used on pages.
 * If no widgets are set, the content below will be displayed
 *
 * @package blm_basic
 */
?>
<section id="sidebar">
	
	<?php if ( ! dynamic_sidebar( 'secondary' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>	
		
	<?php endif; ?>
	
</section>