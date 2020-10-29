<?php

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'New name goes here' );		// Rename the description tab
	//$tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab
	//$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab

	return $tabs;

}