<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

//unres

/*
* Creating a function to create our CPT
*/

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
		'supports'            => array( 'revisions' ),
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

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Slideroptionen');
}

// acf
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_58a59ca31d731',
	'title' => 'Mitarbeiter',
	'fields' => array (
		array (
			'key' => 'field_58a59cad9e89f',
			'label' => 'Vorname',
			'name' => 'vorname',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_58a59cb99e8a0',
			'label' => 'Nachname',
			'name' => 'nachname',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_58a59e63793ac',
			'label' => 'Funktion',
			'name' => 'funktion',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'leitung' => 'Geschäftsleitung',
				'service' => 'Service',
				'kueche' => 'Küche',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_58a59cc19e8a1',
			'label' => 'Bild',
			'name' => 'bild',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'users',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58a5a0d6d4353',
	'title' => 'Slider Optionen',
	'fields' => array (
		array (
			'key' => 'field_58a5a0ec08cd4',
			'label' => 'Sliderauswahl',
			'name' => 'sliderauswahl',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'bild' => 'Bildslider',
				'video' => 'Video',
			),
			'default_value' => array (
				'bild' => 'bild',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_58a5a1f951022',
			'label' => 'Bild hinzufügen',
			'name' => 'bild_hinzufugen',
			'type' => 'repeater',
			'instructions' => 'Fügen Sie ein Bild für den Slider hinzu inklusive Text',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58a5a0ec08cd4',
						'operator' => '==',
						'value' => 'bild',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Bild hinzufügen',
			'sub_fields' => array (
				array (
					'key' => 'field_58a5a22351023',
					'label' => 'Sliderbild',
					'name' => 'sliderbild',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_58a5a23a51024',
					'label' => 'Bildbeschreibung',
					'name' => 'bildbeschreibung',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
		array (
			'key' => 'field_58a5a2b1d62c8',
			'label' => 'Video',
			'name' => 'video',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58a5a0ec08cd4',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-slideroptionen',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
