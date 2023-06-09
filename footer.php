<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package classic-blank
 */

?>
	<footer>
		<div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'classic-blank' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'classic-blank' ), 'WordPress' );
				?>
			</a>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
