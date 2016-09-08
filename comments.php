<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package blm_basic
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! 

	if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				printf( 
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'english-cucumber' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h3>

		<ol id="commentlist" class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation clear" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'blm_basic' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&laquo; Previous', 'blm_basic' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Next &raquo;', 'blm_basic' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation 

	endif; // have_comments() 

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	
		<p class="no-comments"><?php _e( 'Comments are Closed.', 'blm_basic' ); ?></p>
		
	<?php endif; 

	comment_form(); ?>

</div><!-- #comments -->
