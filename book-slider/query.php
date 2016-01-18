<?php

  /*
  * @Author 		LotusPublishing
  * Copyright: 	2016 LotusPublishing
  */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
  }

  global $wp_query;

  $wp_query = new WP_Query(
    array (
      'post_type' => 'product',
      'post_status' => 'publish',
      'orderby' => $wcps_query_orderby,
      'order' => $wcps_query_order,
      'meta_query' => array(
        array(
          'key' => '_featured',
          'value' => 'yes',
          )),
      'posts_per_page' => $wcps_total_items,

      ) );
 ?>
