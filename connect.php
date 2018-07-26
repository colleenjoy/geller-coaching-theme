<?php
/**
Template Name: connect-page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coach
 */

get_header();
?>

	<div id="primary" class="no-sidebar content-area connect-page">
		<main id="main" class="site-main ">

            <?php the_field('connect_form') ?>
           
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
