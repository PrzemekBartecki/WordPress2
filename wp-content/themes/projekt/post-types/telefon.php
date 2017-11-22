<?php

function telefon_init() {
	register_post_type( 'telefon', array(
		'labels'            => array(
			'name'                => __( 'Telefons', 'tl' ),
			'singular_name'       => __( 'Telefon', 'tl' ),
			'all_items'           => __( 'All Telefons', 'tl' ),
			'new_item'            => __( 'New telefon', 'tl' ),
			'add_new'             => __( 'Add New', 'tl' ),
			'add_new_item'        => __( 'Add New telefon', 'tl' ),
			'edit_item'           => __( 'Edit telefon', 'tl' ),
			'view_item'           => __( 'View telefon', 'tl' ),
			'search_items'        => __( 'Search telefons', 'tl' ),
			'not_found'           => __( 'No telefons found', 'tl' ),
			'not_found_in_trash'  => __( 'No telefons found in trash', 'tl' ),
			'parent_item_colon'   => __( 'Parent telefon', 'tl' ),
			'menu_name'           => __( 'Telefons', 'tl' ),
		),
		'public'            => true,
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-phone',
		'show_in_rest'      => true,
		'rest_base'         => 'telefon',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'telefon_init' );

function telefon_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['telefon'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Telefon updated. <a target="_blank" href="%s">View telefon</a>', 'tl'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'tl'),
		3 => __('Custom field deleted.', 'tl'),
		4 => __('Telefon updated.', 'tl'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Telefon restored to revision from %s', 'tl'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Telefon published. <a href="%s">View telefon</a>', 'tl'), esc_url( $permalink ) ),
		7 => __('Telefon saved.', 'tl'),
		8 => sprintf( __('Telefon submitted. <a target="_blank" href="%s">Preview telefon</a>', 'tl'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Telefon scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview telefon</a>', 'tl'),
		// translators: Publish box date format, see https://secure.php.net/manual/en/function.date.php
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Telefon draft updated. <a target="_blank" href="%s">Preview telefon</a>', 'tl'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'telefon_updated_messages' );
