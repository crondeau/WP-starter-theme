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

<div id="comments" class="comments__area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h3 class="title__comments">
			<?php
				printf( esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'blm_basic' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>');
			?>
		</h3>

		<ol class="comment__list">
			<?php
				wp_list_comments( array(
					'style'      	=> 'ol',
					'short_ping' 	=> true,
					'avatar_size' 	=> 56,
				) );
			?>
		</ol><!-- .comment__list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment__nav" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'blm_basic' ); ?></h2>
			<div class="comment__nav--links">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'blm_basic' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'blm_basic' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'blm_basic' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
