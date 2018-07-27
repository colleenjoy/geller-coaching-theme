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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<script
		src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
		crossorigin="anonymous"></script>
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
		@media screen and (max-width: 600px) {
			.site-header {
				background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php header_image();?>);
				background-size: cover;
			}
		}
		</style>
<?php
	else :
	?>
	<style type="text/css">
		.site-header {
			background-image: url(<?php the_field('header_image'); ?>);
		}
		@media screen and (max-width: 600px) {
			.site-header {
				background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php the_field('header_image');?>);
				background-size: cover;
			}
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

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			<button class="menu-close icon-button" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-times"></i></button>
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
