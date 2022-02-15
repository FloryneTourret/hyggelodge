<?php

function wpdocs_theme_name_scripts()
{
    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/master.css', array(), true);
    wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
