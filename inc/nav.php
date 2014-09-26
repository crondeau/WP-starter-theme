<?php
/**
 * This template generates the links to previous and next posts on the single template.
 * Use this if you don't want to use pagination (see page-navi.php)
 *
 * @package blm_basic
 */
?>

<nav class="post-navigation">
	<div class="nav-previous"><?php next_posts_link( __( 'Previous', 0 ) ); ?></div>
	<div class="nav-next"><?php previous_posts_link( __( 'Next', 0 ) ); ?></div>
</nav>

