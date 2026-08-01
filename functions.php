<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Theme Setup
|--------------------------------------------------------------------------
*/

function estatein_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('menus');

    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'estatein'),
    ]);
}

add_action('after_setup_theme', 'estatein_setup');


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/

function estatein_enqueue_assets()
{
    wp_enqueue_style(
        'estatein',
        get_template_directory_uri() . '/assets/css/app.css',
        [],
        filemtime(get_template_directory() . '/assets/css/app.css')
    );

    wp_enqueue_script(
        'estatein',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        filemtime(get_template_directory() . '/assets/js/app.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'estatein_enqueue_assets');