<?php
$recent_atts = shortcode_atts( array(
	'per_page' => '6',
	'columns'  => '6',
	'orderby'  => 'date',
	'order'    => 'desc',
	'category' => '',  // Slugs
	'operator' => 'IN', // Possible values are 'IN', 'NOT IN', 'AND'.
), $recent_atts, 'recent_products' );

$recent_args = array(
	'post_type'           => 'product',
	'post_status'         => 'publish',
	'ignore_sticky_posts' => 1,
	'posts_per_page'      => $recent_atts['per_page'],
	'orderby'             => $recent_atts['orderby'],
	'order'               => $recent_atts['order'],
	'meta_query'          => WC()->query->get_meta_query(),
	'tax_query'           => WC()->query->get_tax_query(),
);
$recent_query = new WP_Query( $recent_args );
?>
<?php if( $recent_query->have_posts() ) : ?>

<section id="produtos-destaques" class="section-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<h2 class="titulo">Mais Populares</h2>
			</div>
			<div class="cell small-12">
				<div class="owl-carousel owl-produtos-destaques owl-theme">
					<?php while($recent_query->have_posts() ) : $recent_query->the_post(); ?>
						<?php wc_get_template_part( 'woocommerce/content', 'product' ); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; wp_reset_postdata(); ?>