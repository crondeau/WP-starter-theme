<?php

if ( ! function_exists( 'blm_basic_posted_on' ) ) :
	
/**
 * Prints the current post-date/time and author of the post.
 */

function blm_basic_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><span class="screen-reader-text"><time class="updated" datetime="%3$s">%4$s</time></span>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( '%s', 'post date', 'blm_basic' ), $time_string );

	$byline = sprintf(
		_x( 'by %s', 'post author', 'blm_basic' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;


if ( ! function_exists( 'blm_basic_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 *
 * @since Twenty Fifteen 1.0
 */
function blm_basic_entry_meta() {

	if ( 'post' == get_post_type() ) {

		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'blm_basic' ) );
		if ( $categories_list && blm_basic_categorized_blog() ) {
			printf( '<span class="links__cat">%1$s %2$s</span>',
				_x( 'Categories: ', 'Used before category names.', 'blm_basic' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'blm_basic' ) );
		if ( $tags_list ) {
			printf( '<span class="links__tag">%1$s %2$s</span>',
				_x( 'Tags:', 'Used before tag names.', 'blm_basic' ),
				$tags_list
			);
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="links_comment">';
		comments_popup_link( __( 'Leave a comment', 'blm_basic' ), __( '1 Comment', 'blm_basic' ), __( '% Comments', 'blm_basic' ) );
		echo '</span>';
	}
}
endif;

/**
 * Determine whether blog/site has more than one category.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return bool True of there is more than one category, false otherwise.
 */
function blm_basic_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'blm_basic_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'blm_basic_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so blm_basic_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so blm_basic_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in {@see blm_basic_categorized_blog()}.
 *
 * @since Twenty Fifteen 1.0
 */
function blm_basic_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'blm_basic_categories' );
}
add_action( 'edit_category', 'blm_basic_category_transient_flusher' );
add_action( 'save_post',     'blm_basic_category_transient_flusher' );


if ( ! function_exists( 'blm_basic_paging_nav' ) ) :
	
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Fourteen 1.0 (I'm borrowing willy nilly here... shoot me.)
 */


function blm_basic_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 3,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'blm_basic' ),
		'next_text' => __( 'Next &rarr;', 'blm_basic' ),
		'type'      => 'list',
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-nav" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'blm_basic' ); ?></h2>
			<?php echo $links; ?>
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

if ( ! function_exists( 'blm_custom_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Read more' link.
 *
 * @since Twenty Fifteen 1.0 (Borrowing once again...)
 *
 */
function blm_custom_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="link__more">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Read more %s', 'blm_basic' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'blm_custom_excerpt_more' );
endif;

?>