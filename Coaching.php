<?php
/**
Template Name: coaching-page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="no-sidebar content-area coaching-page">
		<main id="main" class="site-main">

            <div class="opening-banner">
                <h2><?php the_field('opening_text')?></h2>
            </div>
            <div class="accented-section" >
                <?php the_field('accented_section') ?>
                
            </div>
            
            <div class="list-section">
                <h1><?php the_field('list_title') ?></h1>
                <div class="lists">
                    <div class="col-1-2">
                        <?php the_field('list_items') ?>
                    </div>
                    <div class="col-1-2">
                        <?php the_field('list_items_2') ?>
                    </div>
                </div>
            </div>
            <div class="main-section">
                <?php the_field('main_text') ?>
            </div>
            <div class="closing-banner" >
                <?php the_field('closing_text') ?>
            </div>
            <div class="newsletter">
                <h1 class="newsletter-title" ><?php the_field('newsletter_message') ?></h1>
                <!-- newsletter inputs and stuff -->
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
