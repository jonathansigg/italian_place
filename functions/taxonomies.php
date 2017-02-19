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

add_action( 'init', 'product_cat' );

function product_cat() {
	register_taxonomy(
		'product_cat',
		'products',
		array(
			'label' => __( 'Produktkategorie' ),
			'rewrite' => array( 'slug' => 'product_cat' ),
			'hierarchical' => true,
		)
	);
}
