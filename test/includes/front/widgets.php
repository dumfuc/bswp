<?php
function hp_widgets(){
    register_sidebar(array(
        'name'              => __('Sidebar', 'ikt'),
        'id'                => 'hp_sidebar',
        'description'       => __('Teema sidebar', 'ikt'),
        'class'             => '',
        'before_widget'     => '<div id=%1$s" class="card border-primary text-center %2$s">',
        'after_widget'      => '</div></div>',
        'before_title'      => '<div class="card-title p-2 bg-punane text-white">',
        'after_title'       => '</div><div class="card-body">'
    ));
}