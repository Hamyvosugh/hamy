<?php
/*
Template Name: Homepage
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Load the header template
get_header();
?>

<!-- Apply background color to the entire page -->
<style>
    body {
        background-color: #3E6093;
    }
</style>

<?php
// Start the WordPress Loop
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();

        // Optionally, you can uncomment the following line if you want to display the title
        // the_title('<h1>', '</h1>');

        // Display the content, which is required for Elementor to work
        the_content();

    endwhile;
else :

    // If no content is found, you can add a fallback here
    echo '<p>No content found</p>';

endif;

// Load the footer template
get_footer();