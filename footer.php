<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DepWP
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row">
		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'depwp' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly Powered by %s', 'depwp' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>

			<a href="<?php echo esc_url( __( 'https://tsktech.in/', 'depwp' ) ); ?>">
				<?php printf(esc_html__( 'Theme: %1$s by %2$s.', 'depwp' ), 'DepWP', 'TSKAMATH TECHNOLOGIES PVT LTD'); ?>


			</a>

				<?php
				// /* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'depwp' ), 'DepWP', '<a href="http://www.tskamath.com">Tskamath Technologies</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
