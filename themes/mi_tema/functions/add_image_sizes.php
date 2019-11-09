<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'square'		=> __( 'Tamaño para el home.php' ),
		'detail'	=> __( 'Tamaño para archivo single.php' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'square', 400, 400, true );			// Personalización del tamaño de home.php
	add_image_size( 'detail', 800, 400, true );		// Personalización del tamaño de single.php

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
