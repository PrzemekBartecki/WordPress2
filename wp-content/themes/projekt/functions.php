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



function moja_funckja_smtp_email( $phpmailer ) {

	$phpmailer->isSMTP();

	$phpmailer->Host = "smtp.gmail.com"; // Adres serwera SMTP
	$phpmailer->Port = "465"; // Nr portu, zazwyczaj: 25|465|587

	$phpmailer->SMTPAuth = true; // Autoryzacja SMTP: true|false
	$phpmailer->SMTPSecure = "ssl"; // Typ szyfrowania, zazwyczaj: tls|ssl

	$phpmailer->Username = "przemyslaw.bartecki@gmail.com"; // Nazwa użytkownika dla serwera SMTP
	$phpmailer->Password = "przemek1988"; // Hasło użytkownika dla serwera SMTP

	$phpmailer->From = "przemyslaw.bartecki@gmail.com"; // Adres e-mail nadawcy
	$phpmailer->FromName = "Imie "; // Nazwa nadawcy

}
add_action('phpmailer_init','moja_funckja_smtp_email');