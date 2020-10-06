<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


/**
 * Get all variations stock quantity
 * 
 * @param int $product_id Product ID which has variations
 */
function wc_get_variable_product_stock_quantity( $product_id ) {

  $product    = wc_get_product( $product_id );
  $variations = $product->get_available_variations();

  $variations_stock = array();

  foreach ( $variations as $variation ) {

      $variation_o = new WC_Product_Variation( $variation['variation_id'] );

      $data['name'] = $variation_o->get_name();
      $data['quantity'] = $variation_o->get_stock_quantity();
      $variations_stock[] = $data;
  }

  return $variations_stock;
}