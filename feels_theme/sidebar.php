<div class="columns small-12 medium-4 large-3 sidebar">
		<div class="sidebar-menu">
			<h3 class="hide-for-small-only uppercase section-title">Produtos</h3>
			<div class="title-bar" data-responsive-toggle="menu-sidebar-menu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle class="icon-menu"></button>
				<div class="title-bar-title" data-toggle>Menu de Produtos</div>
			</div>
			<?php 
				$taxonomy     = 'product_cat';
				$orderby      = 'name'; 
				$show_count   = false;
				$pad_counts   = false;
				$hierarchical = true;
				$title        = '';

				$args = array(
					'taxonomy'     => $taxonomy,
					'orderby'      => $orderby,
					'show_count'   => $show_count,
					'pad_counts'   => $pad_counts,
					'hierarchical' => $hierarchical,
					'title_li'     => $title,
					'walker'=> new Walker_Simple_Example
				);
			?>

			<ul class="vertical menu accordion-menu" data-accordion-menu data-submenu-toggle="true">
				<?php wp_list_categories( $args ); ?>
			</ul>
		</div><!-- sidebar-menu -->	
		<?php if ( is_active_sidebar( 'shop_sidebar' )  ) : ?>
			<aside id="secondary" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'shop_sidebar' ); ?>
			</aside><!-- .sidebar .widget-area -->
		<?php endif; ?>
	</div><!-- columns sidebar-->

