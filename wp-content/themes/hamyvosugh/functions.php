<?php
function hamyvosugh_enqueue_styles() {
    $parent_style = 'hello-elementor-style'; // Parent theme style handle
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('hamyvosugh-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'hamyvosugh_enqueue_styles');