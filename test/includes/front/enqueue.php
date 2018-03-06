<?php
function hp_enqueue(){
    wp_register_style('hp_bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.css');
    wp_register_style('hp_main', get_template_directory_uri() . '/assets/styles/style.css');
    wp_register_style('hp_geometricblack', get_template_directory_uri() . '/assets/styles/geometric415blackbt.ttf');
    wp_register_style('hp_geometricmedium', get_template_directory_uri() . '/assets/styles/geometric415mediumbt.ttf');
    wp_register_style('hp_roboto', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Roboto:300,400,700');

    wp_enqueue_style('hp_bootstrap');
    wp_enqueue_style('hp_main');
    wp_enqueue_style('hp_geometricblack');
    wp_enqueue_style('hp_geometricmedium');
    wp_enqueue_style('hp_roboto');

    wp_register_script('hp_bootjs', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array(), false, true);
    wp_register_script('hp_scroll', get_template_directory_uri() . '/assets/scripts/scrollreveal.js', array(), false, true);
    wp_register_script('hp_main', get_template_directory_uri() . '/assets/scripts/app.js', array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('hp_bootjs');
    wp_enqueue_script('hp_scroll');
    wp_enqueue_script('hp_main');
}