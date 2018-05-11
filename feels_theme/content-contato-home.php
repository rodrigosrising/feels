<section id="contato-home">
	<div data-equalizer data-equalize-on="small" class="grid-container full">
		<div class="grid-x">
			<div style="background-image: url('<?php echo get_theme_file_uri( '/assets/img/contato.jpg' ) ?>);" data-equalizer-watch class="cell small-12 large-6 contato-box contato-bg"></div>
		</div>
		<div data-equalizer-watch class="contato-info-wrapper">
			<div class="grid-container">
				<div class="grid-x">
					<div class="cell small-12 large-6 hide-for-small-only"><span class="info-contato float-right">
							<ul class="menu social-media">
								<?php if( get_field('instagram', 'option') ): ?>
									<li><a href="<?php the_field('instagram', 'option'); ?>"><i class="fab fa-instagram"></i></a></li>
								<?php endif; ?>
								<?php if( get_field('facebook', 'option') ): ?>
									<li><a href="<?php the_field('facebook', 'option'); ?>"><i class="fab fa-facebook"></i></a></li>
								<?php endif; ?>
								<?php if( get_field('pinterest', 'option') ): ?>
									<li><a href="<?php the_field('pinterest', 'option'); ?>"><i class="fab fa-pinterest"></i></a></li>
								<?php endif; ?>
							</ul>
							<span class="info-contato-tel"><?php the_field('telefone_1', 'option'); ?></span></span></div>
					<div class="cell small-12 large-6 contact-form"><span class="info-contato">
							<h2>Contato</h2></span>
							<form action="">
								<div class="grid-container">
									<div class="grid-x grid-margin-x grid-padding-x">
										<div class="small-12 cell">
											<?php echo do_shortcode( '[contact-form-7 id="128" title="Formulário de contato 1"]' ) ?>
										</div>
									</div>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>