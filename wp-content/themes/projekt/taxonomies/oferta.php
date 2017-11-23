<?php

function oferta_init() {
	register_taxonomy( 'oferta', array( 'telefon' ), array(
		'hierarchical'      => true,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Ofertas', 'of' ),
			'singular_name'              => _x( 'Oferta', 'taxonomy general name', 'of' ),
			'search_items'               => __( 'Search ofertas', 'of' ),
			'popular_items'              => __( 'Popular ofertas', 'of' ),
			'all_items'                  => __( 'All ofertas', 'of' ),
			'parent_item'                => __( 'Parent oferta', 'of' ),
			'parent_item_colon'          => __( 'Parent oferta:', 'of' ),
			'edit_item'                  => __( 'Edit oferta', 'of' ),
			'update_item'                => __( 'Update oferta', 'of' ),
			'add_new_item'               => __( 'New oferta', 'of' ),
			'new_item_name'              => __( 'New oferta', 'of' ),
			'separate_items_with_commas' => __( 'Separate ofertas with commas', 'of' ),
			'add_or_remove_items'        => __( 'Add or remove ofertas', 'of' ),
			'choose_from_most_used'      => __( 'Choose from the most used ofertas', 'of' ),
			'not_found'                  => __( 'No ofertas found.', 'of' ),
			'menu_name'                  => __( 'Ofertas', 'of' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'oferta',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'oferta_init' );
