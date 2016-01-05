<?php
/**
 * Product loop title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<h3 class="book-title" title="<?php the_title(); ?>">
	<?php
		echo substr( get_the_title(), 0, 50 );
		if ( strlen( get_the_title()) > 50 ) echo ' ...';
	?>
</h3>
