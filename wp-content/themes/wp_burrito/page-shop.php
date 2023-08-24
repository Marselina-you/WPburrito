<?php /*Template Name: Shop */?>
<?php
get_header(); ?>
<section class="header-menu">
  <div class="container">
 
    <nav class="header-menu-nav" title="">
   
      <?php $args = array(
	'post_type'          => 'products',
	'taxonomy'           => 'product_cat',
  'child_of'           => '27',
  //'title_li'  => '',
  'separator'          => '', 
  'style' => '',
  
	
  
); 
echo '<ul class="header-menu-nav__list list-reset">';
wp_list_categories( $args );
echo '</ul>';
?>
        <!--<li class="header-menu-nav__item"><a href="#" class="nav__link">Appetizers</a></li>
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Main Dishes</a></li>
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Desserts</a></li>-->
    
    </nav>
  </div>
</section>
<section class="menu">
  <div class="container menu__container">
    <h2 class="menu__title">Appetizers</h2>
    <?php $loop = new WP_Query( array(
'post_type' => 'product',
'posts_per_page' => get_field('products_per_page'),
'taxonomy'   => 'product_cat',
'product_cat' => 'appetizers',
'orderby' => 'menu_order',
'order' => 'ASC',
));  
while ( $loop->have_posts() ): $loop->the_post(); ?>
		 <div class="menu__content">

      <div class="menu-content-image">
      
      <?php the_post_thumbnail(); ?>
       
      </div>
      <div class="menu-content-text">
        <h3 class="menu-content-text__title"><span>
        <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?></a>
        </span>&nbsp;<span class="menu-content-text__value">
<?php woocommerce_template_loop_price(); ?></span></h3>
        <div class="menu-content-text__components"></div>
        <div class="menu-content-text__calories"> Kk</div>
        <div class="menu-content-text__weight"><?php the_content(); ?> g</div>
        <button class="btn-reset btn btn--order menu-content-text__btn">order</button>
        <div class="add-plus add-plus--none">
          <div class="add-plus__minus">
            <button tabindex="0" type="button" class="add-plus__btn">
              <span class="add-plus__svg" style="border-radius: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                  <path d="M5 11a1 1 0 1 0 0 2h14a1 1 0 1 0 0-2H5Z"></path>
                </svg></span>
            </button>
          </div>
          <input type="text" class="add-plus__input" value="1">
          <!--<span class="add-plus__quantity" data-id="1" data-value="1">1 шт.</span>-->
          <div class="add-plus__plus">
            <button tabindex="0" type="button" class="add-plus__btn">
              <span class="add-plus__svg" style="border-radius: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                  <path d="M12 4a1 1 0 0 0-1 1v6H5a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2h-6V5a1 1 0 0 0-1-1Z">
                  </path>
                </svg>

              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
		
   
    
    <nav class="header-menu-nav header-menu-nav--bottom" title="">
    <?php $args = array(
	'post_type'          => 'products',
	'taxonomy'           => 'product_cat',
  'child_of'           => '27',
  //'title_li'  => '',
  'separator'          => '', 
  'style' => '',
  
	
  
); 
echo '<ul class="header-menu-nav__list list-reset">';
wp_list_categories( $args );
echo '</ul>';
?>
     
    </nav>
    <hr width="50%">
</div>
</section>
<section class="menu-dop">
  <div class="container menu-dop__container">
    <div class="menu-dop__left">
      <nav class="header-menu-nav menu-dop__header" title="">
      <?php $args = array(
	'post_type'          => 'products',
	'taxonomy'           => 'product_cat',
  'child_of'           => '28',
  //'title_li'  => '',
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
'product_cat' => 'extras',
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
            <input class="extras" type="number" min="0" max="9" data-id="${item.id}" step="1" value="${valIn}">
            <div class="quantity-nav">
            <div class="quantity-button quantity-up">
            <img src="img/plus.svg" alt=""></div><div class="quantity-button quantity-down"><img src="img/minus.svg" alt=""></div></div>
          </div>
        </div>
        <div class="menu-dop__value"><span class="value" data-price="${item.price}"><?php woocommerce_template_loop_price(); ?></div>
      </li><?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </div>





  </div>
  <div class="menu-block-btn">
    <button class="btn btn-reset menu__btn btn--stroke" title="самовывоз">Order for Pick-up</button>

    <button class="btn btn-reset menu__btn btn--stroke" title="доставка">Order for Delivery</button>
  </div>

</section>
<?php 
get_template_part( 'tpl-parts/address' );
//$args = 'Какая-то строка';
//get_template_part( 'tpl-parts/address', null, $args );
?>
<?php
get_footer(); ?>

   