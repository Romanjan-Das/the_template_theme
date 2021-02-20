<?php 
function load_stylesheets()
{
    wp_register_style('style_b',get_template_directory_uri() . '/css/style_b.css',array(),false,'all');
    wp_enqueue_style('style_b');

    wp_register_style('style',get_template_directory_uri() . '/style.css',array(),false,'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function load_scripts(){
    wp_register_script('script',get_template_directory_uri() . '/js/script.js','',1,true);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts','load_scripts');