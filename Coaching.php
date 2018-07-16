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

	<div id="primary" class="no-sidebar content-area front-page">
		<main id="main" class="site-main">

            <div class="newsletter" >
                 <!-- wp newsletter message -->
                <h2 class="newsletter-message" >Helping successful people exceed their expectations in business and life… around the globe.</h2>

                <!-- newsletter input (may have to be inline from CC) -->
                <h2 class="newsletter-input" >Sign up for my newsletter:     big box here      submit </h2>
            </div>
           
            <!-- new area with wp title -->
            <div class="featured-banner" >
                <h1 class="featured-cards-title" ></h1>
                <!-- three boxes with wp messages and button titles -->
                <div class="featured-cards" >
                    <div class="featured-card" >
                        <p class="card-text" >Exceed the limitations you’ve created</p>
                        <!-- link/button text thing -->
                        <div class="featured-card-link" >
                            <h2>Business Coaching</h2>
                        </div>
                    </div>
                    <div class="featured-card" >
                        <p class="card-text" >Help your staff work efficiently and productively</p>
                        <!-- link/button text thing -->
                        <div class="featured-card-link" >
                            <h2>Business Coaching</h2>
                        </div>
                    </div>
                    <div class="featured-card" >
                        <p class="card-text" >Exceed the limitations you’ve created</p>
                        <!-- link/button text thing -->
                        <div class="featured-card-link" >
                            <h2>Business Coaching</h2>
                        </div>
                    </div>
                </div>
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
