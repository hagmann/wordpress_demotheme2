<?php

function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 140,
        'flex-height' => false,
        'flex‐width' => true,
    ));
}

add_action('after_setup_theme', 'theme_setup');

if (!isset($content_width)) {
    $content_width = 600;
}

add_image_size('full-width-horizontal', 640, 320, true);
set_post_thumbnail_size($width, $height, $crop);

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}

add_action('init', 'register_my_menus');


register_sidebars(2, array('name' => 'sidebar-1'));