<?php
/*-------------------------------------------------------------------------*/
/*  WOOCOMMERCE
/*-------------------------------------------------------------------------*/
add_filter( 'woocommerce_enqueue_styles', '__return_false' );


// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {

	ob_start();
	?>

	<div class="cart-contents">
		<i class="fas fa-shopping-bag"></i>
		<span class="item-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	</div>

	<?php $fragments['div.cart-contents'] = ob_get_clean();

	return $fragments;

} );

add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {

	ob_start();
	?>

	<div class="header-quickcart">
			<?php woocommerce_mini_cart(); ?>
	</div>

	<?php $fragments['div.header-quickcart'] = ob_get_clean();

	return $fragments;

} );

/*BREADCRUMB*/
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
	return array(
		'delimiter'   => '',
		'wrap_before' => '<nav aria-label="Você está em:" role="navigation" itemprop="breadcrumb"><ul class="breadcrumbs">',
		'wrap_after'  => '</ul></nav>',
		'before'      => '<li>',
		'after'       => '</li>',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	);
}

/*custom excerpt*/
// remove_action( 'woocommerce_after_shop_loop_item_title', 'my_custom_excerpt', 15 );

function my_custom_excerpt(){
	echo '<p>' .excerpt(8) .'</p>';
}

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );


/**
 * @snippet       Disable Variable Product Price Range
 * @how-to        Watch tutorial @ http://businessbloomer.com/?p=19055
 * @sourcecode    http://businessbloomer.com/disable-variable-product-price-range-woocommerce/
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 2.4.7
 */

add_filter( 'woocommerce_variable_sale_price_html', 'bbloomer_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'bbloomer_variation_price_format', 10, 2 );

function bbloomer_variation_price_format( $price, $product ) {

// Main Price
	$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
	$price = $prices[0] !== $prices[1] ? sprintf( __( '<span class="apartir">A partir de:</span> %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

// Sale Price
	$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
	sort( $prices );
	$saleprice = $prices[0] !== $prices[1] ? sprintf( __( '<span class="apartir">A partir de:</span> %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

	if ( $price !== $saleprice ) {
		$price = '<del>' . $saleprice . '</del> <ins>' . $price . '</ins>';
	}
	return $price;
}


/*SHOP PAGE*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
add_action( 'woocommerce_after_shop_loop', 'custom_pagination', 10 );
function custom_pagination(){
	echo '<div class="grid-x"><div class="small-12 cell">';
	bfc_custom_post_navigation();
	echo '</div></div>';
}

/*SINGLE PRODUCT PAGE*/
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 5 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'the_content', 20 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

remove_action( 'woocommerce_after_single_product_summary' ,'woocommerce_output_product_data_tabs',10);

/*cart page*/
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

function searchfilter($query) {
if ($query->is_search &&is_woocommerce() && !is_admin() ) {
		if(isset($_GET['post_type'])) {
				$type = $_GET['post_type'];
						if($type == 'products') {
								$query->set('post_type',array('products'));
						}
		}
}
return $query;
}
add_filter('pre_get_posts','searchfilter');


function wpa_109409_is_purchasable( $purchasable, $product ){
    if( $product->get_price() == 0 )
        $purchasable = false;
    return $purchasable;
}
add_filter( 'woocommerce_is_purchasable', 'wpa_109409_is_purchasable', 10, 2 );

// /*********** REMOVE PRICE FROM ALL PLACES *******/
add_filter( 'woocommerce_variable_sale_price_html', 'theme_remove_prices', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'theme_remove_prices', 10, 2 );
add_filter( 'woocommerce_get_price_html', 'theme_remove_prices', 10, 2 );

function theme_remove_prices( $price, $product ) {
	if ( $product->get_price() == 0 ) {
		 return '<span class="price"><span class="woocommerce-Price-amount amount">Preço sob consulta</span></span>';
	}
	else{
		return $price;
	}
}

// Modify the default WooCommerce orderby dropdown
//
// Options: menu_order, popularity, rating, date, price, price-desc
// In this example I'm removing price & price-desc but you can remove any of the options
function patricks_woocommerce_catalog_orderby( $orderby ) {
	unset($orderby["popularity"]);
	unset($orderby["rating"]);
	return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "patricks_woocommerce_catalog_orderby", 20 );

add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );
function custom_woocommerce_get_catalog_ordering_args( $args ) {
  $orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
	if ( 'nome' == $orderby_value ) {
		$args['orderby'] = 'title';
		$args['order'] = 'asc';
		$args['meta_key'] = '';
	}
	return $args;
}
add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );
function custom_woocommerce_catalog_orderby( $sortby ) {
	$sortby['nome'] = 'Nome';
	$sortby['date'] = 'Novos Produtos';
	$sortby['price'] = 'Menor Preço';
	$sortby['price-desc'] = 'Maior Preço';
	return $sortby;
}
