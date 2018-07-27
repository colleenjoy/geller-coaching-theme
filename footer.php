<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coach
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- five footer pieces -->
		<div class="footer-links" >
			<!-- get title and link from wp -->
			<div>
				<h1>Email</h1>
				<small><?php esc_html_e(get_theme_mod('footer_email')); ?></small>
			</div>
			<div>
				<h1>Phone</h1>
				<small><?php esc_html_e(get_theme_mod('footer_phone')); ?></small>
			</div>
			<div>
				<h1>Linkedin</h1>
				<small><a href="https://linkedin.com/<?php esc_html_e(get_theme_mod('footer_linkedin')); ?>"> 
				<?php esc_html_e(get_theme_mod('footer_linkedin')); ?></a></small>
			</div>
			<div>
				<h1>Facebook</h1>
				<small><a href="https://facebook.com/<?php esc_html_e(get_theme_mod('footer_facebook')); ?>"> 
				<?php esc_html_e(get_theme_mod('footer_facebook')); ?></a></small>
			</div>
			<div>
				<h1>Twitter</h1>
				<small><a href="https://twitter.com/<?php esc_html_e(get_theme_mod('footer_twitter')); ?>"> 
				<?php esc_html_e(get_theme_mod('footer_twitter')); ?></a></small>
			</div>
		</div>
		<div class="site-info">
			<small><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'coach' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'coach' ), 'WordPress' );
				?>
			</a></small>
			<span class="sep"> | </span>
				<small><?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'coach' ), 'Coach', '<a href="https: //colleen-higgins-designs.github.io/portfolio/">Colleen Higgins Designs</a>' );
				?></small>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
