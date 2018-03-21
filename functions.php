<?php

/*
**function to add custom styles
**
**wp_enqueue_style()
*/

function wp_style(){
    wp_enqueue_style('bootstrap-style',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('awesome',get_template_directory_uri().'/css/font-awesome.min.css');
    
}

/*
**function to add custom scripts
**
**wp_enqueue_style()
*/
function wp_script(){
     wp_deregister_script('jquery'); // remove current jquery to handle to footer
   // wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-1.11.3.min',array(),false,true);
    wp_register_script( 'jquery', includes_url().'/js/jquery/jquery.js', array(),'', true );
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true);
    wp_enqueue_script('nicescroll-js',get_template_directory_uri().'/js/jquery.nicescroll.min.js',array(),false,true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(),false,true);
    
}

/*
**function to run styles and scripts
**
**wp_enqueue_style()
*/
add_action('wp_enqueue_scripts', 'wp_style');
add_action('wp_enqueue_scripts', 'wp_script');