<?php



function hyggelodge_scripts()
{
    wp_register_style('foundation-style', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css', array(), true);
    wp_enqueue_style('foundation-style');
    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), true);
    wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'hyggelodge_scripts');

function hyggelodge_customize_register($wp_customize)
{
    $wp_customize->add_section(
        'hyggelodge_logo_section',
        array(
            'title'          => 'Logo',
            'priority'       => 30,
            'description'    => 'Ajouter le logo'
        )
    );
    $wp_customize->add_setting('hyggelodge_logo');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hyggelodge_logo',
            array(
                'label'      => 'Logo',
                'section'    => 'hyggelodge_logo_section',
                'settings'   => 'hyggelodge_logo'
            )
        )
    );

    $wp_customize->add_section(
        'hyggelodge_logo_white_section',
        array(
            'title'          => 'Logo blanc',
            'priority'       => 30,
            'description'    => 'Ajouter le logo blanc'
        )
    );
    $wp_customize->add_setting('hyggelodge_logo_white');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hyggelodge_logo_white',
            array(
                'label'      => 'Logo',
                'section'    => 'hyggelodge_logo_white_section',
                'settings'   => 'hyggelodge_logo_white'
            )
        )
    );
}
add_action('customize_register', 'hyggelodge_customize_register');
