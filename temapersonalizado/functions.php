<?php


function mitema_setup() {
    
    register_nav_menus(array(
        'menu_principal' => __('Menú Principal', 'mitema'),
    ));

    
    add_theme_support('post-thumbnails');

    
    register_sidebar(array(
        'name' => __('Sidebar Principal', 'mitema'),
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('after_setup_theme', 'mitema_setup');


function mitema_scripts() {
    wp_enqueue_style('mitema-style', get_stylesheet_uri());
    
}
add_action('wp_enqueue_scripts', 'mitema_scripts');

