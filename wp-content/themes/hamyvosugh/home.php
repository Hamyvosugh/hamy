<?php
/*
Template Name:  Homepage
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Ensure compatibility with Elementor
if ( ! class_exists( 'Elementor\Plugin' ) ) {
    wp_die( 'Elementor plugin is required for this template to function properly.' );
}

// Get the current post ID
$post_id = get_the_ID();

// Load Elementor content for the current post
echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $post_id );

while ( have_posts() ) : the_post();
    // The content will be managed by Elementor, but if you want to output regular content as well:
    the_content();
endwhile;