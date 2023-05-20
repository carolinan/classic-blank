<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package classic-blank
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
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
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php classic_blank_entry_footer(); ?>
	</footer>
</article>