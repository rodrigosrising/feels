<?php
$principal = get_field('destaque1', 'option');
	$thumbnail_principal = get_woocommerce_term_meta( $principal->term_id, 'thumbnail_id', true );
	$image_principal = wp_get_attachment_url( $thumbnail_principal );
$superior = get_field('destaque2', 'option');
	$thumbnail_superior = get_woocommerce_term_meta( $superior->term_id, 'thumbnail_id', true );
	$image_superior = wp_get_attachment_url( $thumbnail_superior );
$inferior = get_field('destaque3', 'option');
	$thumbnail_inferior = get_woocommerce_term_meta( $inferior->term_id, 'thumbnail_id', true );
	$image_inferior = wp_get_attachment_url( $thumbnail_inferior );
?>

<section id="home-destaques">
		<div class="grid-container full fluid">
			<div class="grid-x">

			<?php if( $principal ): ?>
				<div class="cell small-12 large-6">
					<a href="<?php echo get_term_link( $principal ); ?>" style="background-image: url(<?php echo $image_principal ?>);" class="destaque-bg destaque-full">
						<span class="destaque-wall"></span>
						<span class="titulo-destaque">
							<h2><?php echo $principal->name; ?></h2>
						</span>
					</a>
				</div>
				<?php endif; ?>

				<div class="cell small-12 large-6">
					<div class="grid-container fluid full">
						<div class="grid-x">

							<?php if( $superior ): ?>
							<div class="cell small-12">
								<a href="<?php echo get_term_link( $superior ); ?>" style="background-image: url(<?php echo $image_superior ?>);" class="destaque-bg destaque-half">
									<span class="destaque-wall"></span>
									<span class="titulo-destaque">
										<h2><?php echo $superior->name; ?></h2>
									</span>
								</a>
							</div>
							<?php endif; ?>

							<?php if( $inferior ): ?>
							<div class="cell small-12">
								<a href="<?php echo get_term_link( $inferior ); ?>" style="background-image: url(<?php echo $image_inferior ?>);" class="destaque-bg destaque-half">
									<span class="destaque-wall"></span>
									<span class="titulo-destaque">
										<h2><?php echo $inferior->name; ?></h2>
									</span>
								</a>
							</div>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>