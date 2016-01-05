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
		<td class="column-one">
			<strong><?php echo book_author_names( $product->id ); ?></strong>
		</td>
		<td class="column-two">
			<?php if ( $product->enable_dimensions_display() ) : ?>
				<span>Size:</span> <?php echo $product->get_dimensions(); ?>
			<?php endif; ?>
		</td>
	</tr>

	<tr>
		<td class="column-one">
			<?php
				$print_type = $product->print_type;
				if ( $print_type == 'colour' ) {
					echo 'Colour';
				} else {
					echo 'Black & White';
				}
			?>
		</td>
		<td class="column-two"><span>Pages:</span> <?php echo $product->number_of_pages; ?></td>
	</tr>

	<tr>
		<td class="column-one"><span>ISBN:</span> <?php echo $product->isbn; ?></td>
		<td class="column-two">
			<?php
				$print_type = $product->print_type;
				if ( $print_type == 'ebook' ) {
					echo 'eBook';
				} elseif ( $print_type == 'hardcover' ) {
					echo 'Hardcover';
				} else {
					echo 'Paperback';
				}
			?>
		</td>
	</tr>

</table>
