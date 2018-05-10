	<!--footer-->
	<footer class="footer section-wrapper">
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-margin-x">
				<div class="cell small-12 medium-6 large-3">
					<h4>Institucional</h4>
					<nav>
						<?php
						wp_nav_menu(array(
							'container' =>false,
							'menu' => __( 'Footer Menu', 'bfd_shop' ),
							'menu_class' => 'menu vertical footer-menu uppercase',
							'theme_location' => 'footer-menu-institucional',
							'fallback_cb' => 'vertical_menu_fallback',
							));
						?>
					</nav>
				</div>
				<div class="cell small-12 medium-6 large-3">
					<h4>Loja</h4>
					<nav>
						<?php
						wp_nav_menu(array(
							'container' =>false,
							'menu' => __( 'Footer Menu', 'bfd_shop' ),
							'menu_class' => 'menu vertical footer-menu uppercase',
							'theme_location' => 'footer-menu-loja',
							'fallback_cb' => 'vertical_menu_fallback',
							));
						?>
					</nav>
				</div>
				<div class="cell small-12 medium-6 large-3">
					<h4>Formas de Pagamento</h4>
					<ul class="menu pagamentos-menu uppercase">
						<li class="payment"><i class="fab fa-cc-visa fa-2x"></i></li>
						<li class="payment"><i class="fab fa-cc-mastercard fa-2x"></i></li>
						<li class="payment"><i class="fab fa-cc-amex fa-2x"></i></li>
						<li class="payment"><i class="fab fa-cc-paypal fa-2x"></i></li>
						<li class="payment"><i class="fab fa-cc-diners-club fa-2x"></i></li>
					</ul>
				</div>
				<div class="cell small-12 medium-6 large-3">
					<h4>Newsletter</h4>
					<div class="input-group">
						<input type="email" class="input-group-field">
						<div class="input-group-button">
							<button type="submit" class="button"><i class="fas fa-paper-plane"></i></button>
						</div>
					</div>
					<h4>Mídias Sociais
						<ul class="menu social-media social-media-footer">
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
					</h4>
				</div>
			</div>
		</div>
	</footer>
	<!--footer-->
</div>
<?php wp_footer(); ?>
</body>
</html>
