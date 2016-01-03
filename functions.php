<?php

// Enqueue main.css and fonts.js

function monotop_styles_and_scripts() {

    wp_enqueue_style( 'main-style',
        get_template_directory_uri() . '/main.css'
    );

    wp_enqueue_script( 'fonts', get_template_directory_uri() . '/js/fonts.js', array(), '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'monotop_styles_and_scripts' );


// Add some theme support for auto title, html5 forms and feeds

function monotop_custom_theme_suppport() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'html5' );
    add_theme_support( 'automatic-feed-links' );

}

add_action( 'after_setup_theme', 'monotop_custom_theme_suppport' );


?>
