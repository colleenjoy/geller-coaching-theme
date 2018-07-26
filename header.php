<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coach
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,600|Lato:300,300i,400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	if ( get_field('header_image') == '') :
	?>
	<style type="text/css">
		.site-header {
			background-image: url(<?php header_image(); ?>);
		}
		</style>
<?php
	else :
	?>
	<style type="text/css">
		.site-header {
			background-image: url(<?php the_field('header_image'); ?>);
		}
	</style>
<?php endif; ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coach' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="site-navigation">
			<?php if ( ! is_front_page() ) :
			?>
			<big class="site-logo" ><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></big>
			<?php endif; ?>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'coach' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( get_field('header_text_alignment') == 'left' ) :
				if ( is_front_page() ) :
					?>
					<h1 class="site-title site-title-home title-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$coach_description = get_bloginfo('description', 'display');
					if ($coach_description || is_customize_preview()):
					?>
						<p class="site-description description-left"><?php echo $coach_description; /* WPCS: xss ok. */ ?></p>
						<?php 
					endif;
				elseif (is_home()):
					?>
					<h1 class="site-title title-right"><?php single_post_title()?></h1>
					<?php
				else :
					?>
					<h1 class="site-title title-left"><?php the_title() ?></h1>
					<?php
				endif; 
			else :
				if (is_front_page()):
					?>
					<h1 class=" site-title site-title-home title-right"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
					<?php
					$coach_description = get_bloginfo('description', 'display');
					if ($coach_description || is_customize_preview()):
					?>
						<p class="site-description description-right"><?php echo $coach_description; /* WPCS: xss ok. */ ?></p>
						<?php 
					endif;
				elseif (is_home()):
					?>
					<h1 class="site-title title-right"><?php single_post_title()?></h1>
					<?php
				else:
					?>
					<h1 class="site-title title-right"><?php the_title()?></h1>
					<?php
				endif;
			endif; ?>
				
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
