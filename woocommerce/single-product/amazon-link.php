<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="buttons-wrapper" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="inspection-copy">

		<a href="#" class="w8-button grey text-center wide-40">
			Request Inspection Copy
		</a>

	</p>

	<p class="amazon-link">

		<a href="<?php echo $product->amazon_link; ?>" target="blank" class="w8-button orange text-center wide-40">
			Buy Now
		</a>

	</p>

</div>
