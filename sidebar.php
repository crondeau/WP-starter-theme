<?php
/**
 * The Sidebar containing the main widget areas.
 * If no widgets are set, the content below will be displayed
 *
 * @package blm_basic
 */
?>
<section id="sidebar" class="primary-sidebar post-widgets" role="complementary">

	
	<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>	
		
	    <aside id="categories" class="widget"><h4 class="sidebar-title">Categories</h4>
			<ul>
				<?php wp_list_categories( 'title_li=' ); ?>
			</ul>
		</aside>
		
	<?php endif; ?>
	
</section>