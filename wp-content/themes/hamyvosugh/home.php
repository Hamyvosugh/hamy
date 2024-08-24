<?php
/*
Template Name: Home
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Ensure compatibility with Elementor
if ( ! class_exists( 'Elementor\Plugin' ) ) {
    wp_die( 'Elementor plugin is required for this template to function properly.' );
}

// Load Elementor header
\Elementor\Plugin::instance()->frontend->get_builder_content_for_display();

while ( have_posts() ) : the_post();
    // The content will be managed by Elementor
    the_content();
endwhile;