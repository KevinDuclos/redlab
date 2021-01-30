<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

function theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

register_nav_menus( array(
    'menu' => 'Menu Principal',
    'footer' => 'Menu Footer',
));

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );