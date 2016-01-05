<?php
/**
 * Product loop title
 *
 * @author  LotusPublishing
 * @package Lotus/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<span class="author-name"><?php echo book_author_names( $product->id ); ?></span>
