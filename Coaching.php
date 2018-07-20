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
            <!-- add check for radio button to see if main section goes before accented -->
            <?php 
            if (get_field('section_ordering') == "Accented Section") {
                echo '<div class="accented-section">' . get_field('accented_section') . '</div>';
            } elseif (get_field('section_ordering') == "Main Section") {
                echo '<div class="main-section">' . get_field('main_text') . '</div>';
            }
            ?>
            <!-- add if statement for list section filled out -->
            <?php 
            if (get_field('list_title') && get_field('list_items')){
            echo '<div class="list-section">
                <h1>' . get_field('list_title') . '</h1>
                <div class="list">' .
                        get_field('list_items') .
                '</div>
            </div>';
            }
            ?>

            <?php
            if (get_field('section_ordering') == "Accented Section") {
                echo '<div class="main-section">' . get_field('main_text') . '</div>';
            } else {
                echo '<div class="accented-section">' . get_field('accented_section') . '</div>';
            }
            ?>

            <div class="closing-banner" >
                <?php the_field('closing_text')?>
            </div>
            <div class="newsletter">
                <h1 class="newsletter-title" ><?php the_field('newsletter_message')?></h1>
                <!-- newsletter inputs and stuff -->
            </div>
            <div class="author">
                <p><?php the_field('author')?></p>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
