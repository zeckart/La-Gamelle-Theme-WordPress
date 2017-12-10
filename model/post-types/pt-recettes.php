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



// Register Custom Taxonomy
function cat_recette_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Catégories', 'Taxonomy General Name', 'la-gamelle' ),
		'singular_name'              => _x( 'Catégorie', 'Taxonomy Singular Name', 'la-gamelle' ),
		'menu_name'                  => __( 'Catégories', 'la-gamelle' ),
		'all_items'                  => __( 'Toute les catégories', 'la-gamelle' ),
		'parent_item'                => __( 'Catégorie parente', 'la-gamelle' ),
		'parent_item_colon'          => __( 'Catégorie parente:', 'la-gamelle' ),
		'new_item_name'              => __( 'Nouvelle catégorie', 'la-gamelle' ),
		'add_new_item'               => __( 'Ajouter une catégorie', 'la-gamelle' ),
		'edit_item'                  => __( 'Modifier', 'la-gamelle' ),
		'update_item'                => __( 'Mettre à jour', 'la-gamelle' ),
		'view_item'                  => __( 'Afficher', 'la-gamelle' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'la-gamelle' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'la-gamelle' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'la-gamelle' ),
		'popular_items'              => __( 'Popular Items', 'la-gamelle' ),
		'search_items'               => __( 'Search Items', 'la-gamelle' ),
		'not_found'                  => __( 'Not Found', 'la-gamelle' ),
		'no_terms'                   => __( 'No items', 'la-gamelle' ),
		'items_list'                 => __( 'Items list', 'la-gamelle' ),
		'items_list_navigation'      => __( 'Items list navigation', 'la-gamelle' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categorie_recette', array( 'recette' ), $args );

}
add_action( 'init', 'cat_recette_taxonomy', 0 );