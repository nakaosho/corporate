<?php
add_action( 'wp_enqueue_scripts', 'edge_enqueue_styles' );
function edge_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/scss/style.css', array('parent-style'));

    //親テーマのfunctions.js
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/common.js' );
    //子テーマのfunctions.js
    wp_enqueue_script( 'functions-child', get_stylesheet_directory_uri() . '/js/common.js', array( 'functions' ) );
}
?>
