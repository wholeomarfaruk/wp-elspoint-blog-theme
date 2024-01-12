<?php
/*=======================================
* wp enqueue styles or scripts or fonts 
=========================================*/
function elspoint_add_css_jquery_files(){
    //Google font 
    wp_enqueue_style( 'elspoint_google_font_sora','https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap', 'false' );

    //font awesome icon
    wp_enqueue_style( 'fontawesome_icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1', 'all');
    
    wp_enqueue_style('elspoint_style',get_stylesheet_uri());
    wp_register_style( 'bootstrap_min_css', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.3.2');
    wp_enqueue_style('bootstrap_min_css');
    wp_register_style( 'elspoint_custom_style', get_template_directory_uri().'/css/custom.css', array(), '1.0.0');
    wp_enqueue_style('elspoint_custom_style');


    //jquery & js
    wp_enqueue_script('jquery');
    wp_register_script( 'bootstrap_min_js', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '5.3.2', 'true');
    wp_enqueue_script('bootstrap_min_js');
    wp_register_script( 'elspoint_main_js', get_template_directory_uri().'/js/main.js', array(), '1.0.0','true');
    wp_enqueue_script('elspoint_main_js');

};

add_action('wp_enqueue_scripts', 'elspoint_add_css_jquery_files');
