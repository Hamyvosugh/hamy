<?php
/*
Template Name: saved Template
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Load the header
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the WordPress loop
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();

                // This is essential for Elementor to work
                the_content();

            endwhile;
        else :
            // If no content is found, you can add a fallback message here
            echo '<p>No content found.</p>';
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
// Load the footer
get_footer();