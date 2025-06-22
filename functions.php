<?php

//add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'travel_enqueue_styles');
function travel_enqueue_styles()
{

    wp_enqueue_style('travel-gfonts', 'http://fonts.googleapis.com/css?family=Montserrat:300,400%7COpen+Sans:400,400i,700%7CMerriweather:400ii?subset=cyrillic');
    wp_enqueue_style('travel-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', [], time());
    wp_enqueue_style('travel-font-icons', get_stylesheet_directory_uri() . '/assets/css/font-icons.css', [], time());
    wp_enqueue_style('travel-style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], time());
    wp_enqueue_style('travel-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.min.css', [], time());
    wp_enqueue_style('travel-spacings', get_stylesheet_directory_uri() . '/assets/css/spacings.min.css', [], time());
    wp_enqueue_style('travel-animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', [], time());


    wp_enqueue_script('jquery');
    wp_enqueue_script('travel-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], time());
    wp_enqueue_script('travel-plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', ['jquery'], time());
    wp_enqueue_script('travel-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['jquery'], time());
}