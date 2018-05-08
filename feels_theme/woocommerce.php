<?php get_header(); ?>
	<main class="main">
		<!-- START LOOP -->
		<?php 	if ( is_singular( 'product' ) ) :

		// woocommerce_content();
		woocommerce_get_template( 'single-product.php' );

		else :
		//For ANY product archive.
		//Product taxonomy, product search or /shop landing
		woocommerce_get_template( 'archive-product.php' );
		endif; ?>

		<!-- END LOOP -->
	</main>
<?php get_footer(); ?>
