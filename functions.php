<?php
function themeStyles(){
	wp_enqueue_style('main', get_template_directory_uri(). '/style.css');
}
add_action('wp_enqueue_scripts','themeStyles');
add_theme_support('menus');
?>