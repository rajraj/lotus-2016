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

  // // Change number or products per row
  if (!function_exists('custom_shop_loop_columns')) {
  	function custom_shop_loop_columns() {
  		return 5;
  	}
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

  if (  ! function_exists( 'woocommerce_template_loop_book_author_name' ) ) {

  	/**
  	 * Show the product title in the product loop. By default this is an H3
  	 */
  	function woocommerce_template_loop_book_author_name() {
  		wc_get_template( 'loop/author-name.php' );
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
            'id'    => '_isbn',
            'label'    => __( 'ISBN', 'woocommerce' ),
            'placeholder'    => 'ISBN',
            'desc_tip'    => true,
            'description'    => __( 'Enter ISBN here.', 'woocommerce' ),
          )
        );

        woocommerce_wp_text_input(
          array(
            'id'    => '_number_of_pages',
            'label'    => __( 'No of Pages', 'woocommerce' ),
            'placeholder'    => 'No of pages',
            'desc_tip'    => true,
            'description'    => __( 'Enter number of pages here.', 'woocommerce' ),
          )
        );

        woocommerce_wp_select(
          array(
            'id'    => '_book_format',
            'label'    => __( 'Book Format', 'woocommerce' ),
            'desc_tip'    => true,
            'description'    => __( 'Select Book Format.', 'woocommerce' ),
            'options'=> array(
              'paperback' => __( 'Paperback', 'woocommerce' ),
              'hardcover' => __( 'Hardcover', 'woocommerce' ),
              'ebook' => __( 'eBook', 'woocommerce' )
            )
          )
        );

        woocommerce_wp_select(
          array(
            'id'    => '_print_type',
            'label'    => __( 'Print Type', 'woocommerce' ),
            'desc_tip'    => true,
            'description'    => __( 'Select Print Type.', 'woocommerce' ),
            'options'=> array(
              'colour' => __( 'Colour', 'woocommerce' ),
              'black' => __( 'Black & White', 'woocommerce' )
            )
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

      $woocommerce_select_field_print_type = $_POST['_print_type'];
    	if( !empty( $woocommerce_select_field_print_type ) )
    		update_post_meta( $post_id, '_print_type', esc_attr( $woocommerce_select_field_print_type ) );

      $woocommerce_text_field_isbn = $_POST['_isbn'];
      if( !empty( $woocommerce_text_field_isbn ) )
        update_post_meta( $post_id, '_isbn', esc_attr( $woocommerce_text_field_isbn ) );

      $woocommerce_text_field_number_of_pages = $_POST['_number_of_pages'];
      if( !empty( $woocommerce_text_field_number_of_pages ) )
        update_post_meta( $post_id, '_number_of_pages', esc_attr( $woocommerce_text_field_number_of_pages ) );

      $woocommerce_select_field_book_format = $_POST['_book_format'];
      if( !empty( $woocommerce_select_field_book_format ) )
        update_post_meta( $post_id, '_book_format', esc_attr( $woocommerce_select_field_book_format ) );
    }
  }

  if ( ! function_exists( 'woocommerce_default_product_tabs' ) ) {

  	/**
  	 * Add default product tabs to product pages.
  	 *
  	 * @param array $tabs
  	 * @return array
  	 */
  	function woocommerce_default_product_tabs( $tabs = array() ) {
  		global $product, $post;

  		// Description tab - shows product content
  		if ( $post->post_content ) {
  			$tabs['description'] = array(
  				'title'    => __( 'Synopsis', 'woocommerce' ),
  				'priority' => 10,
  				'callback' => 'woocommerce_product_description_tab'
  			);
  		}

  		// Additional information tab - shows attributes
			$tabs['book_author'] = array(
				'title'    => __( 'Author', 'woocommerce' ),
				'priority' => 20,
				'callback' => 'woocommerce_book_author_tab'
			);

  		// Reviews tab - shows comments
  		if ( comments_open() ) {
  			$tabs['reviews'] = array(
  				'title'    => sprintf( __( 'Reviews (%d)', 'woocommerce' ), $product->get_review_count() ),
  				'priority' => 30,
  				'callback' => 'comments_template'
  			);
  		}

  		return $tabs;
  	}
  }

  if ( ! function_exists( 'woocommerce_book_author_tab' ) ) {

  	/**
  	 * Output the attributes tab content.
  	 *
  	 * @subpackage	Product/Tabs
  	 */
  	function woocommerce_book_author_tab() {
      wc_get_template( 'single-product/author-bio.php' );
  	}
  }

?>
