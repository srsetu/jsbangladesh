<?php
require_once get_theme_file_path('/inc/tgm.php');

// Add theme support

function jsbangladesh_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5');
    add_theme_support('post-formats', [
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'audio',
        'video'
    ]);
}

add_action('after_setup_theme', 'jsbangladesh_theme_setup');

// Loading Scripts

function jsbangladesh_scripts()
{
    wp_enqueue_style('main-css', get_stylesheet_uri(), [], time(), 'all');
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/custom.css', [], '1.0', 'all');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap');
    wp_enqueue_style('google-fonts-galada', '/fonts.googleapis.com/css2?family=Galada&display=swap');
}

add_action('wp_enqueue_scripts', 'jsbangladesh_scripts');

// Register nav menus

register_nav_menus(array(
    'main-menu' => __('Main Menu', 'jsbangladesh'),
    'footer-menu' => __('Footer Menu', 'jsbangladesh'),
));

// Register Widgets

function jsbangladesh_widgets_init()
{
    register_sidebar([
        'name' => __('Main Sidebar', 'jsbangladesh'),
        'id' => 'main-sidebar',
        'description' => __('Add your widgets'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
}

add_action('widgets_init', 'jsbangladesh_widgets_init');


// Controlling excerpt length

function jsbangladesh_exceprt_length($length)
{
    return 25;
}

add_filter('excerpt_length', 'jsbangladesh_exceprt_length', 999);



















