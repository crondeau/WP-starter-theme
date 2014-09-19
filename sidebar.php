<?php
/**
 * The Sidebar containing the main widget areas.
 * If no widgets are set, the content below will be displayed
 *
 * @package blm_basic
 */
?>
<section id="sidebar">
	
	<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>	
		
	    <aside id="categories" class="widget"><h4>Categories</h4>
			<ul>
				<?php wp_list_categories( 'title_li=' ); ?>
			</ul>
		</aside>
		
		<aside id="archives" class="widget"><h4>Archives</h4>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</aside>
		
		<aside id="subscribe" class="widget"><h4>Subscribe</h4>
			<ul>
			   	<li><a href="<?php bloginfo( 'rss2_url' ); ?>">Entries (RSS)</a></li>
			 	<li><a href="<?php bloginfo( 'comments_rss2_url' ); ?>">Comments (RSS)</a></li>
			</ul>
		</aside>
		
	<?php endif; ?>
	
</section>