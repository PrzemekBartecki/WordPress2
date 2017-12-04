<?php
require 'post-types/telefon.php';
require 'taxonomies/oferta.php';

add_theme_support('menus');
add_theme_support('post-thumbnails');

function custom_excerpt($length){
	return	20;
}
add_filter( 'excerpt_length', 'custom_excerpt', 999);


function project_enqueue_script() {
	wp_enqueue_script(
		'main',
		get_stylesheet_directory_uri() . '/js/scripts.js',
		['jquery', 'slick'],
		true	);

	wp_enqueue_script(
		'slick',
		get_stylesheet_directory_uri() . '/slick/slick/slick.js', null,
		true	);

	wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/main.css',
        null );

}
add_action( 'wp_enqueue_scripts' , 'project_enqueue_script' );

if ( ! function_exists( 'post_pagination' ) ) :
	function post_pagination() {
		global $wp_query;
		$pager = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;