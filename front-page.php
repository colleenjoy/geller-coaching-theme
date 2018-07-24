<?php
/**
Template Name: front-page
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

	<div id="primary" class="no-sidebar content-area front-page">
		<main id="main" class="site-main">

            <div class="newsletter" >
                <!-- newsletter input (may have to be plugin from CC) -->
                <h2 class="newsletter-input" ><?php the_field('newsletter_form') ?></h2>
            </div>
           
            <!-- new area with wp title -->
            <div class="featured-banner" >
                <h1 class="featured-cards-title" > <?php the_field('cards_title') ?> </h1>
                <!-- three boxes with wp messages and button titles -->
                <div class="featured-cards" >
                    <div class="featured-card" >
                        <p class="card-text" ><?php the_field('card_text')?></p>
                        <!-- link/button text thing -->
                        <div class="featured-card-link" >
                            <h2><a href="<?php the_field('card_button')?>"> <?php the_field('card_button_text')?></a></h2>
                        </div>
                    </div>
                    <div class="featured-card" >
                        <p class="card-text" ><?php the_field('card_text_2')?></p>
                        <!-- link/button text thing -->
                        <div class="featured-card-link" >
                            <h2><a href="<?php the_field('card_button_2')?>"> <?php the_field('card_button_text_2')?></a></h2>
                        </div>
                    </div>
                    <div class="featured-card" >
                        <p class="card-text" ><?php the_field('card_text_3')?></p>
                        <!-- link/button text thing -->
                        <div class="featured-card-link" >
                            <h2><a href="<?php the_field('card_button_3')?>"> <?php the_field('card_button_text_3')?></a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- other content -->
            <div class="call-to-action" >
                <h1> <?php the_field('primary_call_to_action') ?> </h1>
            
                <h2><?php the_field('secondary_call_to_action') ?></h2>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
