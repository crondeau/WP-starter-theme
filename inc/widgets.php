<?php

function blm_widgets_init() {
	register_sidebar( array(
		'id' => 'primary',
		'name' => __( 'Blog Sidebar', 'blm_basic' ),
		'description' => __( 'The following widgets will appear on your blog section.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="sidebar-title">',
		'after_title' => '</h4>'
	) );
		
	/* Select the additonal widgets you need below
		
	register_sidebar( array(
		'id' => 'secondary',
		'name' => __( 'Page Sidebar', 'blm_basic' ),
		'description' => __( 'The following widgets will appear on your pages.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="sidebar-title">',
		'after_title' => '</h4>'
	) );
		
	register_sidebar( array(
		'id' => 'footer-1',
		'name' => __( 'Footer 1', 'blm_basic' ),
		'description' => __( 'The following widgets will appear in the first footer widget area.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="footer-title">',
		'after_title' => '</h4>'
	) );
		
	register_sidebar( array(
		'id' => 'footer-2',
		'name' => __( 'Footer 2', 'blm_basic' ),
		'description' => __( 'The following widgets will appear in the second footer widget area.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="footer-title">',
		'after_title' => '</h4>'
	) );
	register_sidebar( array(
		'id' => 'footer-3',
		'name' => __( 'Footer 3', 'blm_basic' ),
		'description' => __( 'The following widgets will appear in the third footer widget area.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="footer-title">',
		'after_title' => '</h4>'
	) );
		
	register_sidebar( array(
		'id' => 'footer-4',
		'name' => __( 'Footer 4', 'blm_basic' ),
		'description' => __( 'The following widgets will appear in the fourth footer widget area.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="footer-title">',
		'after_title' => '</h4>'
	) ); */
}

add_action( 'widgets_init', 'blm_widgets_init' );

?>