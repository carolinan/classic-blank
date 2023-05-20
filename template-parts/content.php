<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package classic-blank
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		if ( is_singular() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div>
				<?php
				classic_blank_posted_on();
				classic_blank_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>
	<?php classic_blank_post_thumbnail(); ?>
	<div>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'classic-blank' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__( 'Pages:', 'classic-blank' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<footer>
		<?php classic_blank_entry_footer(); ?>
	</footer>
</article>
