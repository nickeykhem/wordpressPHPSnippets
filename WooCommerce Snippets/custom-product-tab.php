<?php

/**
 * Add a custom product data tab
 * Nickey Khem - nickeykhem.com
 */

add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {

    // Adds the new tab

    $tabs['test_tab'] = array(
        'title'     => __( 'New Product Tab', 'woocommerce' ),
        'priority'  => 50,
        'callback'  => 'woo_new_product_tab_content'
    );

    $tabs['test_tab_two'] = array(
        'title'     => __( 'Another New Product Tab', 'woocommerce' ),
        'priority'  => 60,
        'callback'  => 'woo_new_product_tab_content_two'
    );

    $tabs['test_tab_three'] = array(
        'title'     => __( 'Yet Another New Product Tab', 'woocommerce' ),
        'priority'  => 70,
        'callback'  => 'woo_new_product_tab_content_three'
    );

    return $tabs;

}
function woo_new_product_tab_content() {
    echo '<h2>New Product Tab</h2>';
    echo '<p>Here\'s your new product tab.</p>';
}

function woo_new_product_tab_content_two() {
    echo '<h2>New Product Tab</h2>';
    echo '<p>Here\'s your new product tab.</p>';
}

function woo_new_product_tab_content_three() {
    echo '<h2>New Product Tab</h2>';
    echo '<p>Here\'s your new product tab.</p>';
}