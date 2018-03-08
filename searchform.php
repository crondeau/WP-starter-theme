<?php
/**
 * The template generates your search form
 *
 * @package blm_basic
 */
?>

<form method="get" id="searchform" class="search__form" action="<?php echo home_url( '/' ); ?>">
	<label for="s" class="screen-reader-text">Search for:</label>
	<input type="search" class="search__form--input" name="s" id="s" placeholder="Search for ..." />
	<button type="submit" class="search__form--submit" id="searchsubmit" value="<?php esc_attr_e('Go', 'blm_basic'); ?>"><?php esc_attr_e('Go', 'blm_basic'); ?></button>
</form>
 
