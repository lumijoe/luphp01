<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package demosite_theme
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">
			<?php do_action( 'demosite_theme_404_content' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
