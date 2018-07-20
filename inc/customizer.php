<?php
/**
 * _s Theme Customizer
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section('footer', array(
		'title' => __('Footer', 'themename'),
		'priority' => 105, // Before Widgets.
	));

	$wp_customize->add_setting('footer_email', array(
		'sanitize_callback' => 'sanitize_email',
	));
	$wp_customize->add_setting('footer_phone', array(
		// 'sanitize_callback' => 'sanitize_',
	));
	$wp_customize->add_setting('footer_linkedin', array(
		// 'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('footer_facebook', array(
		// 'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('footer_twitter', array(
		// 'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control('footer_email', array(
		'type' => 'email',
		'priority' => 10,
		'section' => 'footer',
		'label' => __('Email'),
		'description' => __('Your email address to be displayed in the footer'),
		'input_attrs' => array(
			'placeholder' => 'example@gmail.com',
		),
	));

	$wp_customize->add_control('footer_phone', array(
		'type' => 'tel',
		'priority' => 10,
		'section' => 'footer',
		'label' => __('Phone Number'),
		'description' => __('Your phone number to be displayed in the footer'),
		'input_attrs' => array(
			'placeholder' => '(555) 555-5555',
		),
	));

	$wp_customize->add_control('footer_linkedin', array(
		'type' => 'url',
		'priority' => 10,
		'section' => 'footer',
		'label' => __('LinkedIn'),
		'description' => __('Your LinkedIn profile to be displayed in the footer'),
		'input_attrs' => array(
			'placeholder' => '/linkedin-profile',
		),
	));

	$wp_customize->add_control('footer_facebook', array(
		'type' => 'url',
		'priority' => 10,
		'section' => 'footer',
		'label' => __('Facebook'),
		'description' => __('Your Facebook page to be displayed in the footer'),
		'input_attrs' => array(
			'placeholder' => '/facebook-page',
		),
	));

	$wp_customize->add_control('footer_twitter', array(
		'type' => 'url',
		'priority' => 10,
		'section' => 'footer',
		'label' => __('Twitter'),
		'description' => __('Your Twitter handle to be displayed in the footer'),
		'input_attrs' => array(
			'placeholder' => '@twitter-handle',
		),
	));

	

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => '_s_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => '_s_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function _s_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function _s_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );
