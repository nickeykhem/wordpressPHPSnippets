<?php

//Get the ID of the product
$product_id = get_the_ID();

//Get the product via the product ID	
$product = wc_get_product( $product_id );

//json decode the information of the product so we can extract information
$obj = json_decode($product, true);

//Capture the meta_data which is where the custom fields are added
$productData = $obj['meta_data'];

//Pluck a certain field out of each object in a list using the wp_list_pluck function
//https://developer.wordpress.org/reference/functions/wp_list_pluck/
//Here we pluck all the product meta_data (using the variable above)
$productDataValues = wp_list_pluck($productData, 'key', 'value');

//Loop through all the meta_data which is stored in key value store
// find the key, echo the value
// In this example, my custom field was not showing empty lines
// so I used the nl2br function to add a line break for new lines
// htmlentities() function convert all applicable characters to HTML entities.
foreach($productDataValues as $key => $value) {
    if ($value == 'example_value_for_key_im_finding') {
        echo '<br>'; //add some love with space
        echo nl2br(htmlentities($key));
    }