<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package classic-blank
 */

get_header();
?>
	<main>
		<section>
			<header>
				<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'classic-blank' ); ?></h1>
			</header><!-- .page-header -->
			<div>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'classic-blank' ); ?></p>
				<?php
				get_search_form();
				the_widget( 'WP_Widget_Recent_Posts' );
				?>
				<div>
					<h2><?php esc_html_e( 'Most Used Categories', 'classic-blank' ); ?></h2>
					<ul>
						<?php
						wp_list_categories(
							array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							)
						);
						?>
					</ul>
				</div>
				<?php
				/* translators: %1$s: smiley */
				$classic_blank_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'classic-blank' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$classic_blank_archive_content" );
				the_widget( 'WP_Widget_Tag_Cloud' );
				?>
			</div>
		</section>
	</main>
<?php
get_footer();
