<?php
/**
Template Name: about-page
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

	<div id="primary" class="no-sidebar content-area about-page">
		<main id="main" class="site-main">

            <div class="primary-about" >
                <?php the_field('full_width_section') ?>
            </div>

            <div class="page-breaker" ></div>

            <div class="primary-about" >
                <?php the_field('full_width_section_2') ?>
            </div>

            <div class="page-breaker" ></div>

            <div class="secondary-about-section" >
                <h2><?php the_field('half_width_section_title') ?></h2>
                
                <div class="secondary-about" >
                    <div>
                        <?php the_field('half_width_text') ?>
                    </div>
                    <div>
                        <?php the_field('half_width_text_2') ?>
                    </div>
                </div>
            </div>

            <div class="page-breaker" ></div>

            <div class="featured-image-section" >
                <?php the_field('featured_image_section')?>
            </div>
           
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
