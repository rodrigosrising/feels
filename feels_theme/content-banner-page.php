<!--banner-->
<div class="banner-wrapper">

	<?php  get_template_part( 'content-social-media' ); ?>

			<div class="grid-container fluid full">
				<div class="grid-x">
				<?php if (is_shop() or is_product_category()): ?>

					<header class="woocommerce-products-header">
						<div class="grid-container">
							<div class="grid-x">
								<div class="cell auto">
									<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
										<h1 class="woocommerce-products-header__title page-title uppercase"><?php woocommerce_page_title(); ?></h1>
									<?php endif; ?>

									<?php
									/**
									 * Hook: woocommerce_archive_description.
									 *
									 * @hooked woocommerce_taxonomy_archive_description - 10
									 * @hooked woocommerce_product_archive_description - 10
									 */
									do_action( 'woocommerce_archive_description' );
									?>

								</div>
							</div>
						</div>
					</header>
				<?php endif; ?>


				<?php if (is_product_category()): ?>
					<?php global $wp_query;
						// get the query object
						$cat = $wp_query->get_queried_object();
						// get the thumbnail id using the queried category term_id
						$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
						// get the image URL
						$image = wp_get_attachment_url( $thumbnail_id );
					?>

					<?php if ($image): ?>
						<div style="background-image: url(<?php echo $image ?>);" class="cell banner-interno"></div>
						<?php else : ?>
						<div style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-full.jpg' ) ?>);" class="cell banner-interno"></div>
					<?php endif; ?>

				<?php elseif (is_account_page() && is_user_logged_in() or is_page()): ?>

					<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					if ($image): ?>
						<div style="background-image: url(<?php echo $image ?>);" class="cell banner-interno"></div>
						<?php else : ?>
						<div style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-full.jpg' ) ?>);" class="cell banner-interno"></div>
					<?php endif; ?>

				<?php elseif (is_account_page() && !is_user_logged_in() ): ?>

				<?php else : ?>
					<div style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-full.jpg' ) ?>);" class="cell banner-interno"></div>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<!--banner-->