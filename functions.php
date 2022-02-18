<?php

function wpdocs_theme_name_scripts()
{
    wp_register_style('foundation-style', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css', array(), true);
    wp_enqueue_style('foundation-style');
    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), true);
    wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
