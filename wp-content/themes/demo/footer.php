<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__inner">
			<div class="site-footer__brand">
				<p class="site-footer__title"><?php bloginfo( 'name' ); ?></p>
				<p class="site-footer__tagline"><?php bloginfo( 'description' ); ?></p>
			</div>
			<div class="site-footer__meta">
				<p>
					<?php
					printf(
						esc_html__( 'Copyright %1$s %2$s. All rights reserved.', 'demo' ),
						esc_html( gmdate( 'Y' ) ),
						esc_html( get_bloginfo( 'name' ) )
					);
					?>
				</p>
				<a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'demo' ); ?></a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
