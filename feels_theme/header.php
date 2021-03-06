<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class('body'); ?>>
	<div id="offCanvasLeft" data-off-canvas class="off-canvas position-left">
		<!--Menu-->
		<nav>
			<?php
			wp_nav_menu(array(
				'container' => false,
				'menu' => __( 'Top Bar Menu', 'bfd_shop' ),
				'menu_class' => 'vertical menu accordion-menu off-canvas-menu',
				'theme_location' => 'header-menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
				'walker' => new F6_OFFCANVAS_MENU_WALKER(),
				'fallback_cb' => 'f6_offcanvas_menu_fallback',
			));
		?>
		</nav>
	</div>
	<div data-off-canvas-content class="off-canvas-content">
		<!--header-->
		<header class="header">
			<div class="grid-container">
				<div class="grid-x align-menu">
					<div class="cell shrink logo-bg">
						<?php
						if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							};
						?>
					</div>
					<div class="cell auto nav-container">
						<nav class="main-nav clearfix">
							<button type="button" data-open="offCanvasLeft" class="menu-icon hide-for-medium float-right"></button>
							<?php
								wp_nav_menu(array(
									'container' => false,
									'menu' => __( 'Top Bar Menu', 'bfd_shop' ),
									'menu_class' => 'menu main-menu float-left uppercase show-for-medium dropdown',
									'theme_location' => 'header-menu',
									'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
									'walker' => new F6_TOPBAR_MENU_WALKER(),
									'fallback_cb' => 'f6_topbar_menu_fallback',
								));
							?>
							<ul class="menu acc-menu float-right uppercase">
								<li><span class="search-button"><i class="fas fa-search"></i></span></li>
								<li class="show-for-medium"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('Minha Conta','woothemes'); ?></a></li>
								<li id="minicart">
									<div class="cart-head">
										<i class="fas fa-shopping-bag"></i>
										<span class="item-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
									</div>
									<div class="cart-popup widget_shopping_cart">
										<div class="widget_shopping_cart_content">
											<?php woocommerce_mini_cart(); ?>
										</div>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--header-->

		<?php if (!is_front_page()): ?>
			<?php  get_template_part( 'content-banner-page' ); ?>
		<?php endif; ?>

		<?php if (!is_front_page()): ?>
		<div id="breadcrumbs">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell small-12">
						<?php woocommerce_breadcrumb(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>

