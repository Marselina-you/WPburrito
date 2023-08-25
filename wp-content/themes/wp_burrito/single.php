<?php
get_header(); 

?><section class="header-menu">
  <div class="container">
 
    <nav class="header-menu-nav" title="">
   
      <?php $args = array(
	'post_type'          => 'products',
	'taxonomy'           => 'product_cat',
    'child_of'           => '27',
    'separator'          => '', 
    'style' => '',
  
	
  
); 
echo '<ul class="header-menu-nav__list list-reset">';
wp_list_categories( $args );
echo '</ul>';
?>
</nav>
  </div>
</section>
<section class="menu">
  <div class="container menu__container">
<?php
if( have_posts() ){
	while( have_posts() ){
		the_post();
		// здесь оформляем данные для каждого поста в цикле
		?>
         <div class="menu__content">
      <div class="menu-content-image">
        <?php //the_content('', true); ?>
        <img src="<?php echo the_post_thumbnail_url(600, 'thumbnail'); ?>" alt="">
      </div>
      <div class="menu-content-text">
        <h3 class="menu-content-text__title"> <span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>&nbsp;<span class="menu-content-text__value"><?php woocommerce_template_loop_price(); ?></span></h3>
        <div class="menu-content-text__components"><?php  do_action( 'show_product_short_description' ); ?></div>
        <div class="menu-content-text__calories"><?php do_action( 'display_custom_product_attributes_on_loop' ); ?></div>
        <div class="menu-content-text__weight"><?php do_action( 'woocommerce_after_shop_loop'); ?></div>
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
    </section>
    </div>
       
   <?php } 
   }
   else {
     echo 'kuku';

}
?>
<?php
get_template_part( 'tpl-parts/address' );
get_footer(); ?>