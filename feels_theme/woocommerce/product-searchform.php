<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form role="search" method="get" class="woocommerce-product-search search-overlay__container" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<i class="fas fa-search search-overlay__icon float-left" aria-hidden="true"></i>
	<input type="search" class="search-term" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" value="<?php echo get_search_query(); ?>" name="s">
	<input type="hidden" name="post_type" value="product" />
<i class="fas fa-window-close search-overlay__close float-right" aria-hidden="true"></i>
</form>
