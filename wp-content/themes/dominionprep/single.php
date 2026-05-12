<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Dominion
 * @since Dominion-Prep 1.0
 */

get_header();

if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'custom-side-bar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif;

get_footer();
