<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function project_enqueue_script() {
	wp_enqueue_script(
		'main',
		get_stylesheet_directory_uri() . '/js/app.js',
		['jquery'],
		true	);

	wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/main.css',
        null );

}
add_action( 'wp_enqueue_scripts' , 'project_enqueue_script' );