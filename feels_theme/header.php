<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="offCanvasLeft" data-off-canvas class="off-canvas position-left">
		<!--Menu-->
		<nav>
			<ul data-accordion-menu data-submenu-toggle="true" class="vertical menu accordion-menu off-canvas-menu">
				<li><a href="">Início</a></li>
				<li> <a href="">Masculino</a></li>
				<li><a href="">Feminino</a></li>
				<li><a href="">Faça Você mesmo</a></li>
				<li><a href="">contato</a></li>
			</ul>
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
							<ul class="menu main-menu float-left uppercase show-for-medium">
								<li class="active"><a href="index.html">Início</a></li>
								<li><a href="produtos.html">Masculino</a></li>
								<li><a href="produtos.html">Feminino</a></li>
								<li><a href="">Faça Você mesmo</a></li>
								<li><a href="">contato</a></li>
							</ul>
							<ul class="menu acc-menu float-right uppercase">
								<li><a href=""><i class="fas fa-search"></i></a></li>
								<li class="show-for-medium"><a href="">Minha Conta</a></li>
								<li><a href=""><i class="fas fa-shopping-bag"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--header-->