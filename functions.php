<?php
/**
 * @package WordPress
 * @subpackage Kindness
 * @since Kindness 1.0
 *
 * Main Theme Functions File
 * Created by CMSMasters
 *
 */


// CMSMasters Directories
define('CMSMASTERS_THEME', TEMPLATEPATH . '/theme');
define('CMSMASTERS_PAGES', CMSMASTERS_THEME . '/pages');
define('CMSMASTERS_CLASSES', CMSMASTERS_THEME . '/classes');
define('CMSMASTERS_FUNCTIONS', CMSMASTERS_THEME . '/functions');
define('CMSMASTERS_ADMIN', CMSMASTERS_THEME . '/administrator');
define('CMSMASTERS_ADMIN_TMCE', CMSMASTERS_ADMIN . '/tinymce');
define('CMSMASTERS_ADMIN_CSS', get_template_directory_uri() . '/theme/administrator/css');
define('CMSMASTERS_ADMIN_JS', get_template_directory_uri() . '/theme/administrator/js');
define('CMSMASTERS_ADMIN_TINYMCE', get_template_directory_uri() . '/theme/administrator/tinymce');



// Load Theme Local File
$locale = get_locale();

if (is_admin()) {
    load_theme_textdomain('cmsmasters', CMSMASTERS_ADMIN . '/languages');

    $locale_file = CMSMASTERS_ADMIN . '/languages/' . $locale . '.php';
} else {
    load_theme_textdomain('cmsmasters', CMSMASTERS_THEME . '/languages');

    $locale_file = CMSMASTERS_THEME . '/languages/' . $locale . '.php';
}

if (is_readable($locale_file)) {
    require_once($locale_file);
}



// Load Theme Options
require_once(CMSMASTERS_ADMIN . '/admin-options.php');

// Load Admin Interface
require_once(CMSMASTERS_ADMIN . '/admin-interface.php');

// Load Admin Meta Boxes
require_once(CMSMASTERS_ADMIN . '/post-options.php');

// Load Slider Manager
require_once(CMSMASTERS_ADMIN . '/slider-manager.php');

// Load Form Builder
require_once(CMSMASTERS_ADMIN . '/form-builder.php');

// Load Admin Scripts and Styles
require_once(CMSMASTERS_ADMIN . '/admin-scripts.php');

// Load TinyMCE and QuickTag Plugins
require_once(CMSMASTERS_ADMIN_TMCE . '/tinymce-buttons.php');

// Load Theme Functions
require_once(CMSMASTERS_FUNCTIONS . '/theme-functions.php');

// Load Likes
require_once(CMSMASTERS_FUNCTIONS . '/likes.php');

// Load Navigation Select
require_once(CMSMASTERS_CLASSES . '/nav-select.php');

// Load Options from the Database
require_once(CMSMASTERS_CLASSES . '/var.php');

// Load Pagination
require_once(CMSMASTERS_CLASSES . '/wp-pagenavi.php');

// Load Breadcrumbs
require_once(CMSMASTERS_CLASSES . '/breadcrumb.php');

// Load Sidebar Generator Class
require_once(CMSMASTERS_CLASSES . '/sidebar-generator.php');

// Load CMSMasters Portfolio Post Type
require_once(CMSMASTERS_CLASSES . '/portfolio-posttype.php');

// Load Custom CMSMasters Widgets Classes
require_once(CMSMASTERS_CLASSES . '/widgets.php');

// Load Custom Default Widgets Classes
require_once(CMSMASTERS_CLASSES . '/widgets-default.php');

// Load Slider Manager Data Access
require_once(CMSMASTERS_CLASSES . '/slider-manager.php');

// Load Slider Manager Controller
require_once(CMSMASTERS_CLASSES . '/slider-controller.php');

// Load Theme Update Notifire
//require_once(CMSMASTERS_FUNCTIONS . '/update-notifier.php');

// Load Template Functions
require_once(CMSMASTERS_FUNCTIONS . '/template-functions.php');

// Load Custom Shortcodes
require_once(CMSMASTERS_FUNCTIONS . '/shortcodes.php');

// Load Custom Comments Template
require_once(CMSMASTERS_FUNCTIONS . '/comments.php');


// Create Database Tables Backggounds, Fonts, Icons, Forms, Sliders, Likes & Redirect to Theme Options Page on Theme Activation
if (isset($_GET['activated'])) {
	require_once(CMSMASTERS_FUNCTIONS . '/database-import.php');
}

// Code for Basic Google Maps Placemarks. -celsom3

function bgmpShortcodeCalled()
{
    global $post;

    if( ( function_exists( 'is_front_page' ) && is_front_page() ) || ( function_exists( 'is_home_page' ) && is_home_page() ) )
        add_filter( 'bgmp_map-shortcode-called', '__return_true' );

    $shortcodePageSlugs = array(
        'colleges'
    );

    if( $post )
        if( in_array( $post->post_name, $shortcodePageSlugs ) )
            add_filter( 'bgmp_map-shortcode-called', '__return_true' );

}
add_action( 'wp', 'bgmpShortcodeCalled' );


//Making jQuery Google API

// function modify_jquery() {
//     if (!is_admin()) {
//         // comment out the next two lines to load the local copy of jQuery
//         wp_deregister_script('jquery');
//         wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, '2.1.3');
//         wp_enqueue_script('jquery');
//     }
// }
//
// add_action('init', 'modify_jquery');


?>
