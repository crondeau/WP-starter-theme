<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main" class="row">
	<div class="container">

			<section id="fourofour" class="fourofour-content">
				
				<header class="page-header">
					<h1 class="page-title">Page not found.</h1>
				</header><!-- .page-header -->	
				
				<p>We've recently made changes to our website and the page you are looking for might have been deleted or moved. Please <a href="<?php echo home_url(); ?>">visit our home page instead</a>.</p>
				<p>Sorry for the inconvenience.</p>	
					
			</section>

	</div><!-- .container -->
</div><!-- #main -->

<?php get_footer(); ?>