<?php

/**
 * Plugin Name: Order Ctrl API v2
 * Plugin URI: http://assetflow.co.za
 * Description: Order Ctrl API
 * Version: 2.0
 * Author: Stanton Hermanus
 */


function OrderCtrl_products()
{
	$args = [
		'limit' => -1
	];

	// get published products from wc internal api and store in array
	$products = wc_get_products($args);

	$data = [];
	$i = 0;

	// iterate products array
	foreach ($products as $product) {
		$data[$i]['id'] = $product->get_id();
		$data[$i]['product name'] = $product->get_title();
		$data[$i]['category'] = $product->get_category_ids();
		$data[$i]['size'] = $product->get_attribute('size');
		$data[$i]['colour'] = $product->get_attribute('colour');
		$data[$i]['description'] = $product->get_short_description();
		$data[$i]['selling_price'] = $product->get_price();
		$data[$i]['dynamic_pricing'] = getPricingTables($product->get_id());
		$data[$i]['featured_image']['thumbnail'] = get_the_post_thumbnail_url($product->get_id(), 'thumbnail');
		$data[$i]['featured_image']['medium'] = get_the_post_thumbnail_url($product->get_id(), 'medium');
		$data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($product->get_id(), 'large');
		$i++;
	}

	return $data;
}

function getPricingTables($product_id)
{
	$pricing_rules = get_post_meta($product_id, '_pricing_rules', TRUE);
	$pricing = [];

	foreach ($pricing_rules as $pricing_rule) {
		$rules = $pricing_rule['rules'];

		foreach ($rules as $rule) {
			array_push($pricing, $rule);
		}
	}

	return $pricing;
}


function OrderCtrl_product($slug)
{
	$args = [
		'name' => $slug['slug'],
	];

	$product = wc_get_products($args);

	$data['id'] = $product[0]->get_id();
	$data['product name'] = $product[0]->get_title();
	$data['category'] = $product[0]->get_category_ids();
	$data['size'] = $product[0]->get_attribute('size');
	$data['colour'] = $product[0]->get_attribute('colour');
	$data['description'] = $product[0]->get_short_description();
	$data['selling_price'] = $product[0]->get_price();
	$data['dynamic_pricing'] = getPricingTables($product[0]->get_id());
	$data['slug'] = $args['name'];
	$data['featured_image']['thumbnail'] = get_the_post_thumbnail_url($product[0]->get_id(), 'thumbnail');
	$data['featured_image']['medium'] = get_the_post_thumbnail_url($product[0]->get_id(), 'medium');
	$data['featured_image']['large'] = get_the_post_thumbnail_url($product[0]->get_id(), 'large');

	return $data;
}

add_action('rest_api_init', function () {
	register_rest_route('OrderCtrl/v1', 'products', [
		'methods' => 'GET',
		'callback' => 'OrderCtrl_products',
	]);

	register_rest_route('OrderCtrl/v1', 'products/(?P<slug>[a-zA-Z0-9-]+)', array(
		'methods' => 'GET',
		'callback' => 'OrderCtrl_product',
	));
});
