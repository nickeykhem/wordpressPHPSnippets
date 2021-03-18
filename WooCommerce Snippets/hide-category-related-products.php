<?

add_filter( 'woocommerce_related_products', 'exclude_product_category_from_related_products', 10, 3 );
function exclude_product_category_from_related_products( $related_posts, $product_id, $args  ){
    // HERE define your product category slug
    $term_slug = 'hoodies';

    // Get the product Ids in the defined product category
    $exclude_ids = wc_get_products( array(
        'status'    => 'publish',
        'limit'     => -1,
        'category'  => array($term_slug),
        'return'    => 'ids',
    ) );

    return array_diff( $related_posts, $exclude_ids );
}
