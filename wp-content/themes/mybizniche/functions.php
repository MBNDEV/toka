<?php

define('MBN_DIR_URI', get_template_directory_uri());
define('MBN_DIR_PATH', get_template_directory());
define('MBN_ASSETS_URI', MBN_DIR_URI.'/resources');
define('MBN_MAP_API_KEY',"AIzaSyDac2mOtJr_IktjUhiLZYRL_xHzxRbodRE");

/**
 * Theme setup
**/
function mbn_theme_setup(){
    show_admin_bar(false);

    add_theme_support('title-tag');
    
    add_theme_support('post-thumbnails');

    add_theme_support( 'woocommerce');
    
    //set_post_thumbnail_size(1568, 9999);
    // add_image_size('small-thumbnail', '150', '100');
    add_image_size('contact-image', '487', '157',true);

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // add_theme_support('custom-logo',array(
    //     'height'      => 190,
    //     'width'       => 190,
    //     'flex-width'  => false,
    //     'flex-height' => false
    // ));

    // add_theme_support('customize-selective-refresh-widgets');
    // add_theme_support('wp-block-styles');

    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style( 'style-editor.css' );

    register_nav_menus(array(
        'header-nav'            => 'Header Navigation',
        'header-nav-mobile'     => 'Header Navigation (Mobile)',
    ));

}
add_action('after_setup_theme', 'mbn_theme_setup');



/**
 * Enqeueue stylesheets and scripts
**/
function mbn_enqueue_scripts(){
    global $wp_version;
    global $template;

    //Global CSS
    wp_enqueue_style( 'mbn-style', get_stylesheet_uri() );

    // unneccessary scripts
    wp_deregister_script('wp-embed');
    wp_deregister_style('wp-block-library');


    // dummy handler - for using inline-css
    wp_register_style('inlinecss-handle', false);
    wp_enqueue_style('inlinecss-handle');
    

    wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap', [], $wp_version);
    wp_enqueue_style('font-ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap', [], $wp_version);
    wp_enqueue_style('font-oswald', 'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap', [], $wp_version);

    
    if(!is_admin()){
        wp_deregister_script('jquery');
    }
    wp_enqueue_script('jquery', MBN_ASSETS_URI.'/vendor/jquery-3.4.1.min.js', [], $wp_version);

    // Foundation JS
    wp_enqueue_script('foundation', MBN_ASSETS_URI.'/vendor/foundation/dist/js/foundation.min.js', [], $wp_version);

    // Mmenu Light
    wp_enqueue_style('mmenu-light', MBN_ASSETS_URI.'/vendor/mmenu/mmenu-light.css', [], $wp_version);
    wp_enqueue_script('mmenu-light', MBN_ASSETS_URI.'/vendor/mmenu/mmenu-light.js', [], $wp_version);

    // slick
    wp_enqueue_style('slick', MBN_ASSETS_URI.'/vendor/slick/slick.css', [], $wp_version);
    wp_enqueue_script('slick', MBN_ASSETS_URI.'/vendor/slick/slick.min.js', [], $wp_version);
   
    // Masonry
    wp_enqueue_script('masonry', MBN_ASSETS_URI.'/vendor/masonry.pkgd.min.js', [], $wp_version);

    // Match Height
    wp_enqueue_script('match-height', MBN_ASSETS_URI.'/vendor/jquery.matchHeight-min.js', [], $wp_version);
    
    // App
    wp_enqueue_style('app', MBN_ASSETS_URI.'/css/app.css', [], $wp_version);
    
    
    wp_enqueue_script('app', MBN_ASSETS_URI.'/js/app.js', [], $wp_version);
    

    // localize objects
    wp_localize_script('app', 'main_obj', array(
        'ajax_url'  => admin_url('admin-ajax.php'),
        'home_url'  => home_url(),
        'theme_url' => MBN_DIR_URI,
        'nonce'     => wp_create_nonce('mbn-nonce')
    ));

    if(is_page_template("templates/template-contact.php")){
        wp_enqueue_style('contact-css', MBN_ASSETS_URI.'/css/contact.css', [], $wp_version);
        wp_enqueue_script('contact-js', MBN_ASSETS_URI.'/js/contact.js', [], $wp_version);
    }
    if(is_page_template("templates/template-findstore.php")){
        wp_enqueue_style('findstore-css', MBN_ASSETS_URI.'/css/find-store.css', [], $wp_version);
        wp_enqueue_script('findstore-js', MBN_ASSETS_URI.'/js/find-store.js', [], $wp_version);
    }
}
add_action('wp_enqueue_scripts', 'mbn_enqueue_scripts', 20);


// disable gutenberg
//add_filter('use_block_editor_for_post', '__return_false');


// remove wp emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Disable all colors within Gutenberg.
function mbn_gutenberg_disable_all_colors() {
    add_theme_support( 'editor-color-palette' );
    add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'mbn_gutenberg_disable_all_colors' );


/**
 * Register sidebars
**/
function mbn_register_sidebars(){
    // footer menus
    for($i=1;$i<=3;$i++){
        register_sidebar(array(
            'name'          => __('Footer Area '.$i),
            'id'            => 'footer-area-'.$i,
            'before_widget' => false,
            'after_widget'  => false,
            'before_title'  => false,
            'after_title'   => false,
        ));
    }
}
add_action('widgets_init', 'mbn_register_sidebars');



require MBN_DIR_PATH.'/includes/tgmpa/init.php';
require MBN_DIR_PATH.'/includes/post-types.php';
require MBN_DIR_PATH.'/includes/shortcodes.php';
require MBN_DIR_PATH.'/includes/utils.php';
require MBN_DIR_PATH.'/includes/public-hooks.php';
require MBN_DIR_PATH.'/includes/admin-hooks.php';
//require MBN_DIR_PATH.'/includes/options/theme-options.php';
// require MBN_DIR_PATH.'/includes/options/template-options.php';

