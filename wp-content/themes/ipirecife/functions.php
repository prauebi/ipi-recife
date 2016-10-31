<?php
	add_theme_support( 'post-thumbnails' );

// Custo Post Type - Eventos
function create_post_eventos() {

	register_post_type( 'eventos',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Eventos' ),
				'singular_name' => __( 'Evento' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'eventos'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_post_eventos' );


add_action( 'init', 'create_tipo_evento' );

function create_tipo_evento() {
	register_taxonomy(
		'tipo_evento',
		'eventos',
		array(
			'label' => __( 'Tipo Evento' ),
			'rewrite' => array( 'slug' => 'tipo_evento' ),
			'hierarchical' => true,
		)
	);
}



/*
* Creating a function to create our CPT
*/
function custom_post_type_eventos() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Eventos', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Evento', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Eventos', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Evento', 'twentythirteen' ),
		'all_items'           => __( 'Todos Eventos', 'twentythirteen' ),
		'view_item'           => __( 'Ver Evento', 'twentythirteen' ),
		'add_new_item'        => __( 'Adicionar Evento', 'twentythirteen' ),
		'add_new'             => __( 'Adicionar Novo', 'twentythirteen' ),
		'edit_item'           => __( 'Editar Evento', 'twentythirteen' ),
		'update_item'         => __( 'Atualizar Evento', 'twentythirteen' ),
		'search_items'        => __( 'Procurar Evento', 'twentythirteen' ),
		'not_found'           => __( 'Evento não encontrado :(', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Evento não encontrado :(', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'eventos', 'twentythirteen' ),
		'description'         => __( 'Eventos', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'tipos_eventos' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'eventos', $args );

}


/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_eventos', 0 );
