<?php get_header(); ?>

<!--banner-->
<div class="banner-wrapper">
	<div class="grid-container social-media-container show-for-medium">
		<div class="grid-x">
			<div class="cell small-12">
				<ul class="menu social-media">
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
					<li><a href=""><i class="fab fa-facebook"></i></a></li>
					<li><a href=""><i class="fab fa-pinterest"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="grid-container fluid full">
		<div class="grid-x">
			<div class="owl-carousel owl-home-slides owl-theme">
				<div class="item"><img src="<?php echo get_theme_file_uri( '/assets/img/banner1.jpg' ) ?>" alt=""></div>
				<div class="item"><img src="<?php echo get_theme_file_uri( '/assets/img/banner2.jpg' ) ?>" alt=""></div>
			</div>
		</div>
	</div>
</div>
<!--banner-->

<!--main-->
<main class="main">
	<section id="home-destaques">
		<div class="grid-container full fluid">
			<div class="grid-x">
				<div class="cell small-12 large-6"><a href="" style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-full.jpg' ) ?>);" class="destaque-bg destaque-full"><span class="destaque-wall"></span><span class="titulo-destaque">
							<h2>Camisetas</h2></span></a></div>
				<div class="cell small-12 large-6">
					<div class="grid-container fluid full">
						<div class="grid-x">
							<div class="cell small-12"><a href="" style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-half-1.jpg' ) ?>);" class="destaque-bg destaque-half"><span class="destaque-wall"></span><span class="titulo-destaque">
										<h2>Acessórios</h2></span></a></div>
							<div class="cell small-12"><a href="" style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-half-2.jpg' ) ?>);" class="destaque-bg destaque-half"><span class="destaque-wall"></span><span class="titulo-destaque">
										<h2>Bermudas</h2></span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php  get_template_part( 'content-produtos-destaques' ); ?>

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
									<li><a href=""><i class="fab fa-instagram"></i></a></li>
									<li><a href=""><i class="fab fa-facebook"></i></a></li>
									<li><a href=""><i class="fab fa-pinterest"></i></a></li>
								</ul><span class="info-contato-tel">(41) 98765-4321</span></span></div>
						<div class="cell small-12 large-6 contact-form"><span class="info-contato">
								<h2>Contato</h2></span>
							<form action="">
								<div class="grid-container">
									<div class="grid-x grid-margin-x grid-padding-x">
										<div class="small-12 cell">
											<input type="text" placeholder="Nome">
										</div>
										<div class="small-12 cell">
											<input type="email" placeholder="Email">
										</div>
										<div class="small-12 cell">
											<textarea placeholder="Mensagem"></textarea>
										</div>
										<div class="small-12 cell">
											<input type="submit" value="Enviar" class="button float-right">
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
</main>
<!--main-->
<?php get_footer(); ?>