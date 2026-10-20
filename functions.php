<?php
function agency_enqueue_styles() {
    wp_enqueue_style(
        'agency-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Poppins:wght@600;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style( 'agency-style', get_stylesheet_uri(), array( 'agency-fonts' ), '1.1' );
}
add_action( 'wp_enqueue_scripts', 'agency_enqueue_styles' );
function agency_setup() {
    register_nav_menus( array(
        'primary' => 'Primary Menu',
    ) );
}
add_action( 'after_setup_theme', 'agency_setup' );