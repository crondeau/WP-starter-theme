<?php
/**
 * The Sidebar containing the main widget areas.
 * If no widgets are set, the content below will be displayed
 *
 * @package blm_basic
 */
?>
<aside id="secondary" class="sidebar block__right" role="complementary">
	
	<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

		<div id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</div>	
		
	    <div id="categories" class="widget">
			<h4 class="title__sidebar">Categories</h4>
			<ul>
				<?php wp_list_categories( 'title_li=' ); ?>
			</ul>
		</div>
		
	<?php endif; ?>
	
</aside><!-- #secondary -->