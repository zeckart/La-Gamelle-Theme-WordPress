<?php

add_theme_support( 'post-thumbnails' );

// Register Custom Post Type
function recette_post_type() {

	$labels = array(
		'name'                  => _x( 'Recettes', 'Post Type General Name', ZK_THEME_DOMAIN ),
		'singular_name'         => _x( 'Recette', 'Post Type Singular Name', ZK_THEME_DOMAIN ),
		'menu_name'             => __( 'Recettes', ZK_THEME_DOMAIN ),
		'name_admin_bar'        => __( 'Post Type', ZK_THEME_DOMAIN ),
		'archives'              => __( 'Recettes archives', ZK_THEME_DOMAIN ),
		'attributes'            => __( 'Recette attibuts', ZK_THEME_DOMAIN ),
		'parent_item_colon'     => __( 'Recette parent', ZK_THEME_DOMAIN ),
		'all_items'             => __( 'Toutes les recettes', ZK_THEME_DOMAIN ),
		'add_new_item'          => __( 'Ajouter nouvelle recette', ZK_THEME_DOMAIN ),
		'add_new'               => __( 'Ajouter recette', ZK_THEME_DOMAIN ),
		'new_item'              => __( 'Nouvelle recette', ZK_THEME_DOMAIN ),
		'edit_item'             => __( 'Modifier recette', ZK_THEME_DOMAIN ),
		'update_item'           => __( 'Mettre à jour recette', ZK_THEME_DOMAIN ),
		'view_item'             => __( 'Afficher recette', ZK_THEME_DOMAIN ),
		'view_items'            => __( 'Afficher recettes', ZK_THEME_DOMAIN ),
		'search_items'          => __( 'Rechercher recette', ZK_THEME_DOMAIN ),
	);
	$args = array(
		'label'                 => __( 'Recette', ZK_THEME_DOMAIN ),
		'description'           => __( 'Les recettes de burger', ZK_THEME_DOMAIN ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'recette', $args );

}
add_action( 'init', 'recette_post_type', 0 );

