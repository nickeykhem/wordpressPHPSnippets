<?php

 
/**
 * Enqueue scripts and styles - Example is using 4.5.2 of bootstrap. Note that the get_stylesheet_directory just gets the location of the theme's css location
 * get_template_directory_uri() gets the theme folder location
 */
 
function boostraploader() {
    // all styles
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), 20141119 );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), 20141119 );
    // all scripts
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'boostraploader' );
