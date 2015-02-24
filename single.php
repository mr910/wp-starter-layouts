<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.5.0.1
 */

get_header(); ?>

	<div id="content" class="medium-8 large-8 columns" role="main">

    	<?php if ( function_exists( 'yoast_breadcrumb' ) ) { yoast_breadcrumb( '<p class="breadcrumbs">', '</p>' ); } ?>

<?php
the_ddlayout( 'default-layout' );
?>

	</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
