<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author  LotusPublishing
 * @package Lotus2016/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="author-bio" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

  <?php $authors = wp_get_post_terms( $product->id, 'authors' ); ?>

  <?php foreach( $authors as $author ) { ?>
    <h3><?php echo $author->name; ?></h3>
    <div class="bio">
      <?php echo $author->description; ?>
    </div>
  <?php } ?>

</div>
