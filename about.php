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
                <h2><?php the_field('full_width_section_title') ?></h2>
                <p><?php the_field('full_width_section') ?> </p>
            </div>

            <div class="primary-about" >
                <h2><?php the_field('full_width_section_title_2') ?></h2>
                <p><?php the_field('full_width_section_2') ?> </p>
            </div>

            <div class="primary-about" >
                <h2><?php the_field('full_width_section_title_3') ?></h2>
                <p><?php the_field('full_width_section_3') ?> </p>
            </div>

            <div class="secondary-about" >

            </div>
           
            

            <!-- other content -->
            <div class="call-to-action" >
                <h1><!-- get text from wp -->Turn Potential into Performance. <br> NOW.</h1>
            
                <p><!-- get text from wp -->No matter where you live, becoming more powerful is just a phone call away.</p>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
