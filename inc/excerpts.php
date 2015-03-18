<?php

// Remove ellipses from excerpt
function blm_custom_excerpt_more($more) {
	return '...<br /><a href="'. get_permalink() .'" class="more-link">Read more</a>';
	}
add_filter('excerpt_more', 'blm_custom_excerpt_more');


//Modify the excerpt length
function blm_custom_excerpt_length($length) {
	return 50;
	}
add_filter('excerpt_length', 'blm_custom_excerpt_length');

?>