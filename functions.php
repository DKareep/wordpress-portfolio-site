<?php
function themeStyles(){
	wp_enqueue_style('main', get_template_directory_uri(). '/style.css');
	wp_enqueue_style('grid', get_template_directory_uri(). '/css/grid.css');
    wp_enqueue_style('normalize', get_template_directory_uri(). '/css/normalize.css');
    wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic');

    wp_register_style('flex-slider',get_template_directory_uri(),'/css/flexslider.css');

    if(is_page('Home')){
        wp_enqueue_style('flex-slider');
    }
}
function themeScripts(){
    wp_register_script('flex-slider-script',get_template_directory_uri(). '/js/flexslider.js',array('jquery'),'',true);

    if(is_page('Home')){
        wp_enqueue_script('flex-slider-script');
    }

    wp_enqueue_script('theme',get_template_directory_uri(). 'js/theme.js', array('jquery'),'',true);
}


add_action('wp_enqueue_scripts','themeScripts');
add_action('wp_enqueue_scripts','themeStyles');



add_theme_support('menus');
?>