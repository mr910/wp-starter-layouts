<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
