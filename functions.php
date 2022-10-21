<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function examplethemeci_enqueue_styles() {
    wp_enqueue_style( 'example-theme-ci', get_stylesheet_directory_uri() . '/dist/index.css' );
}

add_action( 'wp_enqueue_scripts', 'examplethemeci_enqueue_styles' );
