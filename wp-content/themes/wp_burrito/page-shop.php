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
     <?php global $post;

$category = get_the_terms( $post->ID, 'product_cat' );
$cat_link = get_category_link($category[0]);

//$nterms = get_the_terms( $post->ID, 'product_tag'  );
//echo $category[0]->name;
$links = get_the_terms( get_the_ID(), 'product_cat' );

//echo get_term_link( $terms[0] );

foreach ($category  as $term  ) {

$product_cat_id = $term->term_id;

$product_cat_name = $term->name;


break;

}


?>

      <div class="menu-content-image">
      
      <?php the_post_thumbnail(); ?>
      
      </div>
      <div class="menu-content-text">
        <a href="<?php echo $cat_link; ?>"><?php  echo $product_cat_name; ?><?php  echo $product_cat_id; ?></a>
      
        <h3 class="menu-content-text__title"><span>
        <a href="<?php the_permalink(); ?>">
        
        <?php the_title(); ?></a>
        </span>&nbsp;<span class="menu-content-text__value"><?php woocommerce_template_loop_price(); ?></span></h3>
        <p class="menu-content-text__components"><?php  do_action( 'show_product_short_description' ); ?></p>
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

<?php 
get_template_part( 'tpl-parts/menu-dop' );
get_template_part( 'tpl-parts/address' );
//$args = 'Какая-то строка';
//get_template_part( 'tpl-parts/address', null, $args );
?>
<?php
get_footer(); ?>

   