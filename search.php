<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.5.0.1
 */

get_header(); ?>

	<div id="content" class="medium-8 large-8 columns" role="main">

<?php
the_ddlayout( 'default-layout' );
?>

	</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
