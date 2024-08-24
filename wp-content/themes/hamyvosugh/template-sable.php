<?php
/*
Template Name: Sable Template
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Start the WordPress loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // This is essential for Elementor to work
        the_content();

    endwhile;
endif;