<?

//Customise the dropdown 'choose an option'
add_filter('woocommerce_dropdown_variation_attribute_options_args', 'wcvdc_dropdown_choice', 10);


// Displays the custom "Choose an option" on the front end
function custom_dropdown_choice( $args ){

  $args['show_option_none'] = "Select an option:";

  return $args;
  
}
