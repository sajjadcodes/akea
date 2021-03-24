<?php 




if(!function_exists('enqueue_files')){

    function enqueue_files(){

// register styles

        wp_register_style('akea-style-custom', get_theme_file_uri().'/assets/files/css/akea-style-custom');
        wp_register_style('single.min', get_theme_file_uri(). '/assets/files/css/single.min.css');
        wp_register_style('style-core', get_theme_file_uri().'/assets/files/css/style-core.css');


        // enqueue style

        wp_enqueue_style('akea-style-custom');
        wp_enqueue_style('single.min');
        wp_enqueue_style('style-core');
    }
}