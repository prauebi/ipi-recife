<?php
	add_theme_support( 'post-thumbnails' );

// Custom Post Type - Eventos
function create_post_eventos() {

	register_post_type( 'eventos',
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
add_action( 'init', 'create_post_eventos' );

function custom_post_type_eventos() {

// Rotulos do Custom Post Type - Eventos
	$labels = array(
		'name'                => _x( 'Eventos', 'Post Type General Name', 'ipirecife' ),
		'singular_name'       => _x( 'Evento', 'Post Type Singular Name', 'ipirecife' ),
		'menu_name'           => __( 'Eventos', 'ipirecife' ),
		'parent_item_colon'   => __( 'Parent Evento', 'ipirecife' ),
		'all_items'           => __( 'Todos Eventos', 'ipirecife' ),
		'view_item'           => __( 'Ver Evento', 'ipirecife' ),
		'add_new_item'        => __( 'Adicionar Evento', 'ipirecife' ),
		'add_new'             => __( 'Adicionar Novo', 'ipirecife' ),
		'edit_item'           => __( 'Editar Evento', 'ipirecife' ),
		'update_item'         => __( 'Atualizar Evento', 'ipirecife' ),
		'search_items'        => __( 'Procurar Evento', 'ipirecife' ),
		'not_found'           => __( 'Evento não encontrado :(', 'ipirecife' ),
		'not_found_in_trash'  => __( 'Evento não encontrado :(', 'ipirecife' ),
	);
	
// Opções do Custom Post Type - Eventos
	
	$args = array(
		'label'               => __( 'eventos', 'ipirecife' ),
		'description'         => __( 'Eventos', 'ipirecife' ),
		'labels'              => $labels,
		// Caracteristicas suportadas no Custom Post Type - Eventos
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// Associando a taxonomia tipo eventos ao Custom Post Type - Eventos 
		'taxonomies'          => array( 'tipos_eventos' ),
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
	
	register_post_type( 'eventos', $args );

}

add_action( 'init', 'custom_post_type_eventos', 0 );

// Taxonomia Tipo Eventos

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
add_action( 'init', 'create_tipo_evento' );

