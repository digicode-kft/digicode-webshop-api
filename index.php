<?php

require_once 'sdk/Price.php';
require_once 'sdk/Product.php';
require_once 'sdk/User.php';


/**
 * Price module
 */
$price = new Price(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$price_get = $price->get(array("partnumber" => "LS2208-SR20007R-UR"));
print_r($price_get);

$price_list = $price->list();
print_r($price_list);


/**
 * Product module
 */
$product = new Product(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$product_get = $product->get(array("partnumber" => "LS2208-SR20007R-UR"));
print_r($product_get);

$product_list = $product->list(array(
	'list_offset' => 0,
	'list_condition' => array(
		'name' => 'REPLACE_WITH_ANY_PRODUCT_NAME',
		'manufacturer_id' => 'REPLACE_WITH_ANY_MANUFACTURER_ID',
	),
));
print_r($product_list);

$product_list_image = $product->list_image(array(
	'list_condition' => array(
		'partnumber' => 'LS2208-SR20007R-UR',
	),
));
print_r($product_list_image);

/**
 * User module
 */
$user = new User(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

$user_get = $user->get();
print_r($user_get);

$user_company = $user->company();
print_r($user_company);

$user_company_user_list = $user->company_user_list();
print_r($user_company_user_list);
