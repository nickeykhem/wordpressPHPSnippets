<?

//Customise the dropdown 'choose an option'
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'new_text_for_blank_dropdown_option_woocommerce_variation', 10 );

function new_text_for_blank_dropdown_option_woocommerce_variation( $args ) {
    // Add new text below 
    $args['show_option_none'] = 'XXXXXX';
    return $args;
}
