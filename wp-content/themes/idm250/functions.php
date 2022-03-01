<!-- Required -->
<?php
if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

if (version_compare($GLOBALS['wp_version'], '5.9.1', '<')) {
    die('WP theme only works in WordPress 5.9.1 or later. Please upgrade your WP site version.');
}

require get_template_directory() . '/includes/post-types.php';

// Add CSS into wp_head()

function include_styles()

{
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'
    );
    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/dist/styles/main.css'
    );
}
add_action('wp_enqueue_scripts', 'include_styles');


// Add JS into wp_foot

function include_js_files()

{
    wp_enqueue_script(
        'idm250-js',
        get_template_directory_uri() . '/dist/scripts/main.js',
        [],
        false,
        true
    );
}
add_action('wp-enqueue_scripts', 'include_js_files');



// Register menus on the site

function register_theme_navigation()

{
    register_nav_menus(
        [
            'primary_menu' => 'Primary Menu',
            'footer_menu' => 'Footer Menu',
        ]
    );
}
add_action('after_setup_theme', 'register_theme_navigation');


// SVG support

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



// Custom Menus 

function idm_render_menu($menu_name)
{
    if (!$menu_name) {
        return;
    }
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}


// Featured Image support 

function add_post_thumbnails_support()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');


// Custom taxonomies (categories) 

require get_template_directory() . '/includes/taxonomies.php';
