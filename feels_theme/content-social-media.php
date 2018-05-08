<div class="grid-container social-media-container show-for-medium">
	<div class="grid-x">
		<div class="cell small-12">
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
		</div>
	</div>
</div>