<?php
/**
 * Single Product attributes
 *
 * @author    LotusPublishing
 * @package   Lotus2016/Templates
 * @version   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>

<table class="table book-attributes">

	<tr>
		<td class="column-one"><strong></strong></td>
		<td class="column-two">
			<?php if ( $product->enable_dimensions_display() ) : ?>
				<span>Size:</span> <?php echo $product->get_dimensions(); ?>
			<?php endif; ?>
		</td>
	</tr>

	<tr>
		<td class="column-one"></td>
		<td class="column-two"><span>Pages:</span> <?php echo $product->num_pages; ?></td>
	</tr>

	<tr>
		<td class="column-one"><span>ISBN:</span> <?php echo $product->isbn; ?></td>
		<td class="column-two"><?php echo $product->format; ?></td>
	</tr>

</table>
