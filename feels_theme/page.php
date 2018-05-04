<?php get_header(); ?>

<?php if (is_account_page() && is_user_logged_in() ): ?>
	<div class="row">
		<div class="columns small-12 medium-3">
			<?php do_action( 'woocommerce_account_navigation' ); ?>
		</div>
		<div class="columns small-12 medium-9">
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<?php the_content( ); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- columns content-->
	</div><!-- row -->
<?php else: ?>
	<div class="row template-content">
		<div class="columns small-12">
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<h1><?php the_title( ); ?></h1>
				<?php the_content( ); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- columns content-->
	</div><!-- row -->
<?php endif; ?>

<?php get_footer(); ?>
