<?php 
if(version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

if(version_compare($GLOBALS['wp_version'], '5.8.2', '<')) {
    die('WP theme only works in WordPress 5.8.2 or later. Please upgrade your WP site version.');
}


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

// Add css into wp_head()
add_action('wp_enqueue_scripts', 'include_styles');


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

// add javascript into wp_foot
add_action('wp-enqueue_scripts', 'include_js_files');



// register menus on the site

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