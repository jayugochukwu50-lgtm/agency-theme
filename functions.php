<?php
function agency_enqueue_styles() {
    wp_enqueue_style( 'agency-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'agency_enqueue_styles' );
function agency_setup() {
    register_nav_menus( array(
        'primary' => 'Primary Menu',
    ) );
}
add_action( 'after_setup_theme', 'agency_setup' );