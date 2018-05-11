<?php get_header(); ?>

<!--banner-->
<div class="banner-wrapper">
	<?php  get_template_part( 'content-social-media' ); ?>
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

	<?php  get_template_part( 'content-destaques' ); ?>

	<?php  get_template_part( 'content-produtos-destaques' ); ?>

	<?php  get_template_part( 'content-contato-home' ); ?>

</main>
<!--main-->
<?php get_footer(); ?>