<?php 

/** General **/

function the_pizzeria_setup(){
    // Enable Images
    add_theme_support('post-thumbnails');

    // SEO tag
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'the_pizzeria_setup');

function the_pizzeria_scripts_and_styles(){

    wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css', [], '1.0.0', 'all' );
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . '/dist/scripts.js', ['jquery'], '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'the_pizzeria_scripts_and_styles');

?>