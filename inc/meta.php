<?php
/**
 * This template generates the meta information below each post. 
 * Link to Author, Date, Number of comments
 * List which category and tags are associated with this post
 *
 * @package blm_basic
 */
?>

<div class="entrymeta">
	<p class="small-text">Written by <?php the_author();?>, <?php the_time( 'F d, Y' ); ?>
	<?php
	if ( comments_open() ) :
		echo ' | ';
		comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments', 'comments-link');
	   
	endif;
	?></p>
	<p class="small-text">Filed under: <?php the_category(', ');?> | <?php echo the_tags(); ?> </p>
</div>