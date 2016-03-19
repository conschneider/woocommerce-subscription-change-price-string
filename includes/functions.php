<?php

/*our functions for changing the price string*/

function change_signup_string( $string, $product, $include ) {

	global $wcsp_options;

 $string = str_replace( 'and a', $wcsp_options['replace_and'], $string );
 $string = str_replace( 'with a', $wcsp_options['replace_with'], $string );
 return $string;
 }
 add_filter( 'woocommerce_subscriptions_product_price_string', 'change_signup_string', 10, 3 );