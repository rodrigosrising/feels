<?php get_header(); ?>

<?php if (is_account_page() && is_user_logged_in() ): ?>
<section class="section-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-padding-x grid-margin-x">
			<div class="cell small-12 medium-3">
				<?php do_action( 'woocommerce_account_navigation' ); ?>
			</div>
			<div class="cell small-12 medium-9">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php the_content( ); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php elseif (is_account_page() && !is_user_logged_in() ): ?>

<section class="section-wrapper section-wrapper-login">
	<div class="login-wrapper" style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-full.jpg' ) ?>);">
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-margin-x">
				<div class="cell small-12">
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<?php the_content( ); ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php else: ?>

<section class="section-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-pading-x">
			<div class="cell auto">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<h1><?php the_title( ); ?></h1>
					<?php the_content( ); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
