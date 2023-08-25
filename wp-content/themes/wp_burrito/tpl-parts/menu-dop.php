<section class="menu-dop">
  <div class="container menu-dop__container">
    <div class="menu-dop__left">
      <nav class="header-menu-nav menu-dop__header" title="">
      <?php $args = array(
	'post_type'          => 'products',
	'taxonomy'           => 'product_cat',
  'child_of'           => '28',//показывать подкатегории категории с id28
  'hide_empty'         => 0, //показывать и пустые категории
  'separator'          => '', 
  'style' => '',
  
	
  
); 
echo '<ul class="header-menu-nav__list list-reset">';
wp_list_categories( $args );
echo '</ul>';
?>
        
      </nav>
     
      <ul class="list-reset menu-dop__list">
      <?php $loop = new WP_Query( array(
'post_type' => 'product',
'posts_per_page' => get_field('products_per_page'),
'taxonomy'   => 'product_cat',
'product_cat' => 'beverages',
'orderby' => 'menu_order',

'order' => 'ASC',
));

while ( $loop->have_posts() ): $loop->the_post(); ?>
      <li class="menu-dop__item">
        <div class="menu-dop__top">
          <div class="menu-dop__name-wrap">
            <div class="menu-dop__name"> <?php the_title(); ?></div>
          </div>

          <div class="quantity">
            <input class="extras" type="number" min="0" max="9" data-id="2" step="1" value="1">
            <div class="quantity-nav">
            <div class="quantity-button quantity-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus.svg" alt="plus"></div>
            <div class="quantity-button quantity-down"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/minus.svg" alt="minus">
          </div></div>
          </div>
        </div>
        <div class="menu-dop__value"><span class="value" data-price="2"><?php woocommerce_template_loop_price(); ?></div>
      </li><?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </div>





  </div>
  <div class="menu-block-btn">
    <button class="btn btn-reset menu__btn btn--stroke" title="самовывоз">Order for Pick-up</button>

    <button class="btn btn-reset menu__btn btn--stroke" title="доставка">Order for Delivery</button>
  </div>

</section>