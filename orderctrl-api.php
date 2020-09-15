<?php
/**
 * Plugin Name: Order Ctrl API v2
 * Plugin URI: http://assetflow.co.za
 * Description: Order Ctrl API
 * Version: 2.0
 * Author: Stanton Hermanus
 */


function OrderCtrl_products() {
	$args = [
		'numberposts' => 99999,
		'post_type' => 'product'
	];

	$products = get_posts($args);
	$data = [];
	$i = 0;
	
	foreach($products as $product) {
		$data[$i]['id'] = $product->ID;
		$data[$i]['product name'] = $product->post_title;
		$data[$i]['category'] = $product->_wprr_category;
    $data[$i]['size'] = $product->_size;
    $data[$i]['colour'] = $product->_colour;
    $data[$i]['description'] = $product->post_excerpt;
    $data[$i]['selling_price'] = $product->_price;
    $data[$i]['featured_image']['thumbnail'] = get_the_post_thumbnail_url($product->ID, 'thumbnail');
    $data[$i]['featured_image']['medium'] = get_the_post_thumbnail_url($product->ID, 'medium');
    $data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($product->ID, 'large');
		$i++;
	}

  return $data;
}


function OrderCtrl_product( $slug ) {
	$args = [
		'name' => $slug['slug'],
		'post_type' => 'product'
	];

	$product = get_posts($args);

	$data['id'] = $product[0]->ID;
	$data['product name'] = $product[0]->post_title;
  $data['category'] = $product[0]->category;
  $data['size'] = $product[0]->_size;
  $data['colour'] = $product[0]->_colour;
  $data['description'] = $product[0]->_short_description;
	$data['selling_price'] = $product[0]->_price;
	$data['slug'] = $product[0]->post_name;
	$data['featured_image']['thumbnail'] = get_the_post_thumbnail_url($product[0]->ID, 'thumbnail');
	$data['featured_image']['medium'] = get_the_post_thumbnail_url($product[0]->ID, 'medium');
	$data['featured_image']['large'] = get_the_post_thumbnail_url($product[0]->ID, 'large');

	return $data;
}

add_action('rest_api_init', function() {
	register_rest_route('OrderCtrl/v1', 'products', [
		'methods' => 'GET',
		'callback' => 'OrderCtrl_products',
	]);

	register_rest_route( 'OrderCtrl/v1', 'products/(?P<slug>[a-zA-Z0-9-]+)', array(
		'methods' => 'GET',
		'callback' => 'OrderCtrl_product',
	) );
});