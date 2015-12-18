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

  /** Single Product ********************************************************/

  if ( ! function_exists( 'woocommerce_template_single_attributes' ) ) {

    /**
     * Output the product attributes.
     *
     * @subpackage	Product
     */
    function woocommerce_template_single_attributes() {
      wc_get_template( 'single-product/additional-information.php' );
    }
  }

  if ( ! function_exists( 'woocommerce_template_single_custom_attributes' ) ) {
    /**
     * Output the product attributes.
     *
     * @subpackage	Product
     */
     function woocommerce_template_single_custom_attributes() {
       wc_get_template( 'single-product/additional-information.php' );
     }
  }

  if ( ! function_exists( 'woocommerce_template_single_amazon_link' ) ) {

    /**
     * Output the product attributes.
     *
     * @subpackage	Product
     */
    function woocommerce_template_single_amazon_link() {
      wc_get_template( 'single-product/amazon-link.php' );
    }
  }

  // Display Fields
  if ( ! function_exists( 'woo_add_custom_general_fields' ) ) {

    /**
     * Add custom fields to Product General Tab.
     *
     * @subpackage	Product
     */
    function woo_add_custom_general_fields() {

      global $woocommerce, $post;

      echo '<div class="options_group">';
        echo '<h2>Book Details</h2>';

        woocommerce_wp_text_input(
          array(
            'id'    => '_amazon_link',
            'label'    => __( 'Amazon Link', 'woocommerce' ),
            'placeholder'    => 'Amazon link',
            'desc_tip'    => true,
            'description'    => __( 'Enter Amazon link here.', 'woocommerce' ),
          )
        );

        woocommerce_wp_text_input(
          array(
            'id'    => '_author_name',
            'label'    => __( 'Author', 'woocommerce' ),
            'placeholder'    => 'Author name',
            'desc_tip'    => true,
            'description'    => __( 'Enter Author name here.', 'woocommerce' ),
          )
        );

        woocommerce_wp_text_input(
          array(
            'id'    => '_isbn',
            'label'    => __( 'ISBN', 'woocommerce' ),
            'placeholder'    => 'ISBN',
            'desc_tip'    => true,
            'description'    => __( 'Enter ISBN here.', 'woocommerce' ),
          )
        );

        woocommerce_wp_text_input(
          array(
            'id'    => '_num_pages',
            'label'    => __( 'Pages', 'woocommerce' ),
            'placeholder'    => 'No of pages',
            'desc_tip'    => true,
            'description'    => __( 'Enter number of pages here.', 'woocommerce' ),
          )
        );

        woocommerce_wp_text_input(
          array(
            'id'    => '_format',
            'label'    => __( 'Format', 'woocommerce' ),
            'placeholder'    => 'Format',
            'desc_tip'    => true,
            'description'    => __( 'Enter book format here.', 'woocommerce' ),
          )
        );
      echo '</div>';

    }
  }

  // Save Fields
  if ( ! function_exists( 'woo_add_custom_general_fields_save' ) ) {

    /**
     * Save custom fields to Product.
     *
     * @subpackage	Product
     */
     // Text Field
    function woo_add_custom_general_fields_save( $post_id ) {
      $woocommerce_text_field_amazon_link = $_POST['_amazon_link'];
    	if( !empty( $woocommerce_text_field_amazon_link ) )
    		update_post_meta( $post_id, '_amazon_link', esc_attr( $woocommerce_text_field_amazon_link ) );

      $woocommerce_text_field_author_name = $_POST['_author_name'];
    	if( !empty( $woocommerce_text_field_author_name ) )
    		update_post_meta( $post_id, '_author_name', esc_attr( $woocommerce_text_field_author_name ) );

      $woocommerce_text_field_isbn = $_POST['_isbn'];
      if( !empty( $woocommerce_text_field_isbn ) )
        update_post_meta( $post_id, '_isbn', esc_attr( $woocommerce_text_field_isbn ) );

      $woocommerce_text_field_num_pages = $_POST['_num_pages'];
      if( !empty( $woocommerce_text_field_num_pages ) )
        update_post_meta( $post_id, '_num_pages', esc_attr( $woocommerce_text_field_num_pages ) );

      $woocommerce_text_field_format = $_POST['_format'];
      if( !empty( $woocommerce_text_field_format ) )
        update_post_meta( $post_id, '_format', esc_attr( $woocommerce_text_field_format ) );
    }
  }

?>
