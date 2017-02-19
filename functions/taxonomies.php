<?php
add_action( 'init', 'user_function' );

function user_function() {
	register_taxonomy(
		'user_function',
		'users',
		array(
			'label' => __( 'Funktion' ),
			'rewrite' => array( 'slug' => 'user_function' ),
			'hierarchical' => true,
		)
	);
}
