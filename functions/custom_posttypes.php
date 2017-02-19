<?php
function users() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Mitarbeiter', 'Post Type General Name', 'italianplace' ),
		'singular_name'       => _x( 'Mitarbeiter', 'Post Type Singular Name', 'italianplace' ),
		'menu_name'           => __( 'Mitarbeiter', 'italianplace' ),
		'parent_item_colon'   => __( 'Mitarbeiter Vorgesetzter', 'italianplace' ),
		'all_items'           => __( 'Alle Mitarbeiter', 'italianplace' ),
		'view_item'           => __( 'Mitarbeiter anzeigen', 'italianplace' ),
		'add_new_item'        => __( 'Neuer Mitarbeiter', 'italianplace' ),
		'add_new'             => __( 'Hinzufügen', 'italianplace' ),
		'edit_item'           => __( 'Mitarbeiter bearbeiten', 'italianplace' ),
		'update_item'         => __( 'Mitarbeiter aktualisieren', 'italianplace' ),
		'search_items'        => __( 'Mitarbeiter suchen', 'italianplace' ),
		'not_found'           => __( 'Nicht gefunden', 'italianplace' ),
		'not_found_in_trash'  => __( 'Nicht in gelöscht gefunden', 'italianplace' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'users', 'italianplace' ),
		'description'         => __( 'Mitarbeiter', 'italianplace' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title','revisions' ),
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
	register_post_type( 'users', $args );
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'users', 0 );


function products() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Produkt', 'Post Type General Name', 'italianplace' ),
		'singular_name'       => _x( 'Produkte', 'Post Type Singular Name', 'italianplace' ),
		'menu_name'           => __( 'Produkte', 'italianplace' ),
		'parent_item_colon'   => __( 'Produktobergestellt', 'italianplace' ),
		'all_items'           => __( 'Alle Produkte', 'italianplace' ),
		'view_item'           => __( 'Produkte anzeigen', 'italianplace' ),
		'add_new_item'        => __( 'Neues Produkt', 'italianplace' ),
		'add_new'             => __( 'Hinzufügen', 'italianplace' ),
		'edit_item'           => __( 'Produkt bearbeiten', 'italianplace' ),
		'update_item'         => __( 'Produkte aktualisieren', 'italianplace' ),
		'search_items'        => __( 'Produkt suchen', 'italianplace' ),
		'not_found'           => __( 'Nicht gefunden', 'italianplace' ),
		'not_found_in_trash'  => __( 'Nicht in gelöscht gefunden', 'italianplace' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'products', 'italianplace' ),
		'description'         => __( 'Produkt', 'italianplace' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title','revisions' ),
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
	register_post_type( 'products', $args );
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'products', 0 );
