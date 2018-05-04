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
            <div style="background-image: url(<?php echo get_theme_file_uri( '/assets/img/destaque-full.jpg' ) ?>);" class="cell banner-interno"></div>
          </div>
        </div>
      </div>
      <!--banner-->
      <!--main-->
      <main class="main">
        <section class="lista-produtos section-wrapper">
          <div class="grid-container">
            <div class="grid-x grid-margin-x">

              <div class="cell small-12 medium-3 large-fixed-size">
                <div class="sidebar-content">
                  <aside class="widget woocommerce widget_product_categories">
                    <h4 class="widget-title">Categorias <span class="toggle"></span></h4>
                    <ul style="display: block;" class="product-categories">
                      <li class="cat-item cat-item-67 cat-parent closed"><a href="">Masculino</a><span class="toggle"></span>
                        <ul style="display: block;" class="children">
                          <li class="cat-item cat-item-111">Acessórios</li>
                          <li class="cat-item cat-item-111">Bermudas</li>
                          <li class="cat-item cat-item-111">Camisetas</li>
                        </ul>
                      </li>
                      <li class="cat-item cat-item-67 cat-parent closed"><a href="">Feminino</a><span class="toggle"></span>
                        <ul style="display: block;" class="children">
                          <li class="cat-item cat-item-111">Acessórios</li>
                          <li class="cat-item cat-item-111">Bermudas</li>
                          <li class="cat-item cat-item-111">Camisetas</li>
                        </ul>
                      </li>
                    </ul>
                  </aside>
                  <aside id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter yith-wcan-list-price-filter">
                    <h4 class="widget-title">Preço <span class="toggle"></span></h4>
                    <form action="">
                      <div class="price_slider_wrapper">
                        <div style="" class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                          <div style="width: 100%; left: 0%;" class="ui-slider-range ui-widget-header ui-corner-all"></div><span tabindex="0" style="left: 0%;" class="ui-slider-handle ui-state-default ui-corner-all"></span><span tabindex="0" style="left: 100%;" class="ui-slider-handle ui-state-default ui-corner-all"></span>
                        </div>
                        <div class="price_slider_amount">
                          <input type="text" id="min_price" name="min_price" value="39" data-min="39" placeholder="Min price" style="display: none;">
                          <input type="text" id="max_price" name="max_price" value="299" data-max="299" placeholder="Max price" style="display: none;">
                          <button type="submit" class="button">Filtrar</button>
                          <div class="price_label">Preço:<span class="from">R$ 89,90</span><span class="to">R$ 109,90</span></div>
                        </div>
                      </div>
                    </form>
                  </aside>
                </div>
              </div>
              <div class="cell auto">
								<?php woocommerce_content(); ?>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!--main-->

<?php get_footer(); ?>