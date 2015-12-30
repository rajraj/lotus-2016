<?php
  /**
   * WooCommerce Template
   *
   * Functions for the templating system.
   *
   * @author   LotusPublishing
   * @category Core
   * @package  Lotus2016/Functions
   * @version  1.0.0
   */

  if ( ! defined( 'ABSPATH' ) ) {
  	exit; // Exit if accessed directly
  }

  /**
   * Add WooCommerce Theme Support
   * Theme: Lotus 2016
   */
  add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
  add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

  function my_theme_wrapper_start() {
    echo '<section id="main">';
  }

  function my_theme_wrapper_end() {
    echo '</section>';
  }

  add_action( 'after_setup_theme', 'woocommerce_support' );
  function woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }

  /**
   * Unhook standard WooCommerce hooks
   * Product Summary Box
   */
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

  /**
   * Unhook standard WooCommerce hooks
   * Product Add to cart
   */
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
  remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
  remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
  remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
  remove_action( 'woocommerce_external_add_to_cart', 'woocommerce_external_add_to_cart', 30 );
  remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
  remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );

  /**
   * Unhook standard WooCommerce hooks
   * After Single Products Summary Div
   */
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

  /**
  * Hooks for Lotus Theme Product Single
  * Product Summary Box
  */
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_custom_attributes', 10 );
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
  add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_amazon_link', 20 );

  add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
  add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

  add_action( 'woocommerce_shop_loop_book_author_name', 'woocommerce_template_loop_book_author_name', 5 );

?>
