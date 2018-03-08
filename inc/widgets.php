<?php

function blm_basic_widgets_init() {
	register_sidebar( array(
		'id' 			=> 'primary',
		'name'		 	=> esc_html__( 'Blog Sidebar', 'blm_basic' ),
		'description' 	=> esc_html__( 'The following widgets will appear on your blog section.', 'blm_basic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="title__sidebar">',
		'after_title' 	=> '</h4>'
	) );
		
	/* Select the additonal widgets you need below
		
	register_sidebar( array(
		'id' 			=> 'secondary',
		'name' 			=> esc_html__( 'Page Sidebar', 'blm_basic' ),
		'description' 	=> esc_html__( 'The following widgets will appear on your pages.', 'blm_basic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="title__sidebar">',
		'after_title' 	=> '</h4>'
	) );
		
	register_sidebar( array(
		'id' 			=> 'footer-1',
		'name' 			=> esc_html__( 'Footer 1', 'blm_basic' ),
		'description' 	=> esc_html__( 'The following widgets will appear in the first footer widget area.', 'blm_basic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="title__footer">',
		'after_title' 	=> '</h4>'
	) );
		
	register_sidebar( array(
		'id' 			=> 'footer-2',
		'name' 			=> esc_html__( 'Footer 2', 'blm_basic' ),
		'description' 	=> esc_html__( 'The following widgets will appear in the second footer widget area.', 'blm_basic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title'	=> '<h4 class="title__footer">',
		'after_title' 	=> '</h4>'
	) );
	register_sidebar( array(
		'id' 			=> 'footer-3',
		'name' 			=> esc_html__( 'Footer 3', 'blm_basic' ),
		'description' 	=> esc_html__( 'The following widgets will appear in the third footer widget area.', 'blm_basic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="title__footer">',
		'after_title' 	=> '</h4>'
	) );
		
	register_sidebar( array(
		'id' 			=> 'footer-4',
		'name' 			=> esc_html__( 'Footer 4', 'blm_basic' ),
		'description' 	=> esc_html__( 'The following widgets will appear in the fourth footer widget area.', 'blm_basic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="title__footer">',
		'after_title' 	=> '</h4>'
	) ); */
}

add_action( 'widgets_init', 'blm_basic_widgets_init' );

?>