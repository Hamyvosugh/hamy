<?php
/**
 * Template Name: Saved Elementor Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Hello_Elementor_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Display the content of the current page
        while ( have_posts() ) :
            the_post();

            the_content();

        endwhile; // End of the loop.

        // Display a specific saved Elementor template using its shortcode
        echo do_shortcode( '[elementor-template id="YOUR_TEMPLATE_ID"]' );
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();