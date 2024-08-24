<?php
function hamyvosugh_enqueue_styles() {
    $parent_style = 'hello-elementor-style'; // Parent theme style handle
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('hamyvosugh-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'hamyvosugh_enqueue_styles');

// Ensure theme support for Elementor
function hamyvosugh_elementor_support() {
    // Declare Elementor theme compatibility
    add_theme_support('elementor');

    // Add support for Elementor's location settings
    add_theme_support('elementor-experimental-theme-locations');
}
add_action('after_setup_theme', 'hamyvosugh_elementor_support');

// Fix for Elementor's full-width pages
function hamyvosugh_elementor_full_width_support() {
    if (function_exists('elementor_load_plugin_textdomain')) {
        remove_action('wp_body_open', 'hello_elementor_body_open');
    }
}
add_action('wp', 'hamyvosugh_elementor_full_width_support');

// Ensure Elementor is loaded before your theme
function hamyvosugh_elementor_load_before_theme() {
    if (!did_action('elementor/loaded')) {
        // Elementor is not loaded, stop the theme from executing further.
        return;
    }
}
add_action('after_setup_theme', 'hamyvosugh_elementor_load_before_theme', 0);

// Support for Elementor Pro's custom header/footer
function hamyvosugh_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'hamyvosugh_register_elementor_locations');

// Remove the title for all pages and posts
function hamyvosugh_remove_titles($title, $id = null) {
    if ( is_page() || is_single() ) {
        return ''; // Return an empty string to remove the title
    }
    return $title;
}
add_filter('the_title', 'hamyvosugh_remove_titles', 10, 2);


// footer menu
function hamyvosugh_register_menus() {
    register_nav_menus(
        array(
            'footer' => __( 'Footer Menu', 'hamyvosugh' ),
        )
    );
}
add_action( 'init', 'hamyvosugh_register_menus' );


// font
if ( ! function_exists( 'hamyvosugh_enqueue_styles' ) ) {
    function hamyvosugh_enqueue_styles() {
        // Enqueue the parent theme's style.css
        $parent_style = 'hello-elementor-style';
        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

        // Enqueue the Quicksand font from Google Fonts
        wp_enqueue_style('quicksand-font', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap', array(), null);
        
        // Enqueue your child theme's style.css
        wp_enqueue_style('hamyvosugh-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
    }
}
add_action('wp_enqueue_scripts', 'hamyvosugh_enqueue_styles');


// templ loading
// Enqueue the custom JavaScript file and pass the AJAX URL
function enqueue_custom_scripts() {
    // Register and enqueue your custom JavaScript file
    wp_enqueue_script(
        'custom-load-template', // Handle for the script
        get_template_directory_uri() . '/assets/js/load-template.js', // Path to the script
        array('jquery'), // Dependencies (jQuery in this case)
        null, // Version number, null if you want to skip versioning
        true // Load in the footer
    );

    // Pass the AJAX URL and other data to the script
    wp_localize_script('custom-load-template', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Handle the AJAX request to load the template dynamically
function load_dynamic_template() {
    // Get the template ID from the AJAX request
    $template_id = intval($_POST['template_id']);

    // Check if a valid template ID is provided
    if ($template_id) {
        // Load the template content
        $template_content = \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($template_id);
        echo $template_content;
    } else {
        // Output an error message if the template ID is invalid
        echo 'Invalid template ID.';
    }

    // End the AJAX request
    wp_die();
}
add_action('wp_ajax_load_dynamic_template', 'load_dynamic_template');
add_action('wp_ajax_nopriv_load_dynamic_template', 'load_dynamic_template');


/// end of them loading 