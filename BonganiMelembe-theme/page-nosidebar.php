<?php
/**
 * Template Name: Page (No Sidebar)
 * Description: Page template with no sidebar.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'custom-wordpress-theme-for-flint-studio-technical-assessment' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'custom-wordpress-theme-for-flint-studio-technical-assessment' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'custom-wordpress-theme-for-flint-studio-technical-assessment' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
