<?php 



function enqueue_files(){

        wp_register_style('akea-style-custom', get_theme_file_uri().'/assets/files/css/akea-style-custom');
        wp_register_style('single.min', get_theme_file_uri(). '/assets/files/css/single.min.css');
        wp_register_style('style-core', get_theme_file_uri().'/assets/files/css/style-core.css');
        wp_register_style('zilla-likes', get_theme_file_uri(). '/plugins/zilla-likes/styles/zilla-likes.css');
        wp_register_style('settings',get_theme_file_uri().'/plugins/revslider/public/assets/css/settings.css');
        wp_register_style('page-builder', get_theme_file_uri(). '/plugins/goodlayers-core/include/css/page-builder.css');
        wp_register_style('plugin-style', get_theme_file_uri(). '/plugins/goodlayers-core/plugins/combine/style.css');
        wp_register_style('google_font1', get_theme_file_uri(). 'https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek');
        wp_register_style('google_font2', get_theme_file_uri().'https://fonts.googleapis.com/css?family=Open+Sans');
        wp_register_style('google_font3', get_theme_file_uri(). 'https://fonts.googleapis.com/css?family=PT+Serif');
        wp_register_style('google_font4', get_theme_file_uri().'https://fonts.googleapis.com/css?family=Montserrat');
        wp_register_style('google_font5', get_theme_file_uri(). 'https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800');

        // enqueue style

        wp_enqueue_style('akea-style-custom');
        wp_enqueue_style('single.min');
        wp_enqueue_style('style-core');
        wp_enqueue_style('zilla-likes');
        wp_enqueue_style('settings');
        wp_enqueue_style('page-builder');
        wp_enqueue_style('plugin-style');
        wp_enqueue_style('google_font1');
        wp_enqueue_style('google_font2');
        wp_enqueue_style('google_font3');
        wp_enqueue_style('google_font4');
        wp_enqueue_style('google_font5');
}