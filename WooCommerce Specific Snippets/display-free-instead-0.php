<?php
  
add_filter( 'woocommerce_get_price_html', 'price_free_zero_empty', 9999, 2 );
   
function price_free_zero_empty( $price, $product ){
    if ( '' === $product->get_price() || 0 == $product->get_price() ) {
        $price = '<span class="woocommerce-Price-amount amount">FREE</span>';
    }  
    return $price;
}