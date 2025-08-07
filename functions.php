<?php

function receita_aqui_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    register_nav_menus(array(
        'primary' => __('Menu Principal', 'receita-aqui'),
        'footer' => __('Menu Rodapé', 'receita-aqui'),
    ));

    load_theme_textdomain('receita-aqui', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'receita_aqui_theme_setup');

function receita_aqui_scripts()
{
    wp_enqueue_style(
        'receita-aqui-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    wp_enqueue_script(
        'receita-aqui-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'receita_aqui_scripts');
