<?php
/**
 * CraftedStays (Astra Child) — functions.php
 *
 * Loads parent + child stylesheets in the right order, and adds a body class
 * so design-system rules in style.css activate automatically on every page.
 *
 * Spec lives in DESIGN.md in the GitHub repo:
 * https://github.com/thegilbertchan/craftedstays-design-system
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Enqueue parent (Astra) and child stylesheets.
 * The child must declare a dependency on the parent so the cascade is correct.
 */
function craftedstays_child_enqueue_styles() {
    // Parent
    wp_enqueue_style(
        'astra-theme-css',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( get_template() )->get( 'Version' )
    );
    // Child
    wp_enqueue_style(
        'craftedstays-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'astra-theme-css' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'craftedstays_child_enqueue_styles', 15 );

/**
 * Add `cs-page` body class ONLY when the page is using the design system.
 * Detection: page template is `elementor_canvas`. (Homepage / regular pages
 * use `elementor_header_footer` and are deliberately untouched.)
 */
function craftedstays_body_class( $classes ) {
    if ( is_page() && get_page_template_slug() === 'elementor_canvas' ) {
        $classes[] = 'cs-page';
    }
    return $classes;
}
add_filter( 'body_class', 'craftedstays_body_class' );

