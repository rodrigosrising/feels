<?php /* Template Name: FAQ */ ?>
<?php get_header(); ?>

<section class="section-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-pading-x">
			<div class="cell auto">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<h1><?php the_title( ); ?></h1>
					<?php the_content( ); ?>

					<?php if( have_rows('faq') ): ?>
					<ul class="accordion" data-accordion>
						<?php while( have_rows('faq') ): the_row();
						// vars
						$pergunta = get_sub_field('pergunta');
						$resposta = get_sub_field('resposta');
						?>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title"><?php echo $pergunta; ?></a>
							<div class="accordion-content" data-tab-content>
								<?php echo $resposta; ?>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>