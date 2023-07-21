<?php
/**
 * Enqueue child styles.
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css', array(), 100 );
}

// add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' ); // Remove the // from the beginning of this line if you want the child theme style.css file to load on the front end of your site.

add_filter( 'kadence_author_meta_output', 'custom_author_by_line' );
function custom_author_by_line( $output ) {
ob_start(); ?>
<span class="posted-by">
<span class="meta-label">By</span>
<?php do_action('pp_multiple_authors_show_author_box', false, 'inline', false, true); ?>
</span>
<?php
return ob_get_clean();
}