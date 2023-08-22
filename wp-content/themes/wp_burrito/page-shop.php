<?php /*Template Name: Shop */?>
<?php
get_header(); ?>
<section class="header-menu">
  <div class="container">
    <nav class="header-menu-nav" title="">
      <ul class="header-menu-nav__list list-reset">
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Appetizers</a></li>
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Main Dishes</a></li>
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Desserts</a></li>
      </ul>
    </nav>
  </div>
</section>
<section class="menu">
  <div class="container menu__container">
    <h2 class="menu__title">Appetizers</h2>
    <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		 <div class="menu__content">
      <div class="menu-content-image">
        <?php the_post_thumbnail(); ?>
      
        <!--<img src="/assets/img/tapas.png" alt="tapas with bacon">-->
      </div>
      <div class="menu-content-text">
        <h3 class="menu-content-text__title"><span>
        <?php the_title(); ?>
        </span>&nbsp;<span class="menu-content-text__value">10 $</span></h3>
        <div class="menu-content-text__components"><?php the_content(); ?></div>
        <div class="menu-content-text__calories">350 Kk</div>
        <div class="menu-content-text__weight">500 g</div>
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
		<?php 
	}
}


wp_reset_postdata(); // Сбрасываем $post
?>
   
    
    <nav class="header-menu-nav header-menu-nav--bottom" title="">

      <ul class="header-menu-nav__list list-reset">
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Appetizers</a></li>
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Main Dishes</a></li>
        <li class="header-menu-nav__item"><a href="#" class="nav__link">Desserts</a></li>

      </ul>
    </nav>
    <hr width="50%">
</div>
</section>

<?php 
get_template_part( 'tpl-parts/address' );
//$args = 'Какая-то строка';
//get_template_part( 'tpl-parts/address', null, $args );
?>
<?php
get_footer(); ?>

   