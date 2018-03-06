<?php
//Set up
add_theme_support('menus');
add_theme_support('post-thumbnails');


//Includes
include (get_template_directory() . '/includes/front/enqueue.php');
include (get_template_directory() . '/includes/front/setup.php');
include (get_template_directory() . '/includes/front/widgets.php');
include (get_template_directory() . '/includes/front/sidebar.php');

//Action and filter hooks
add_action('wp_enqueue_scripts', 'hp_enqueue');
add_action('after_setup_theme', 'hp_setup_theme');
add_action('widgets_init', 'hp_widgets');
//Shortcodes
