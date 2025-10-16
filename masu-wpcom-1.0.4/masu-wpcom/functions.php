<?php
function maletkosoves_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Main Menu', 'malet-kosoves'),
        'footer' => __('Footer Menu', 'malet-kosoves')
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'maletkosoves_setup');

function maletkosoves_scripts() {
    wp_enqueue_style('maletkosoves-style', get_stylesheet_uri());
    wp_enqueue_script('maletkosoves-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'maletkosoves_scripts');

function maletkosoves_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'malet-kosoves'),
        'id' => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'maletkosoves_widgets_init');
?>
