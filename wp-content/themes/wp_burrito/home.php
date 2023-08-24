<?php
/*
Template Name: home

*/

?>
<?php
get_header(); ?>


     <!-- <div class="section hero">
  <div class="swiper mainSlider">
    <div class="swiper-wrapper">
      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-6.jpg);">
        <div class="order-swiper-slide__content wow animate__fadeIn" data-wow-duration="2s">
          <div class="swiper-slide__logo">
          <?php //the_custom_logo(); ?>
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
            <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>

        </div>
      </div>
      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-1.jpg);">
        <div class="order-swiper-slide__content">
          <div class="swiper-slide__logo">
          <?php //the_custom_logo(); ?>
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
            <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>

        </div>
      </div>
      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-2.jpg);">
        <div class="order-swiper-slide__content">
          <div class="swiper-slide__logo">
          <?php //the_custom_logo(); ?>
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
            <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>

        </div>
      </div>
      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-3.jpg);">
        <div class="order-swiper-slide__content">
          <div class="swiper-slide__logo">
          <?php //the_custom_logo(); ?>
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
            <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>

        </div>
      </div>

      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-4.jpg);">
        <div class="order-swiper-slide__content">
          <div class="swiper-slide__logo">
            <?php //the_custom_logo(); ?>
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
          <img class="header-logo__decor" src="<?php //echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>
        </div>
      </div>
      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-5.jpg);">
        <div class="order-swiper-slide__content">
          <div class="swiper-slide__logo">
          <?php //the_custom_logo(); ?>
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
            <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>
        </div>
      </div>
      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-1.jpg);">
        <div class="order-swiper-slide__content">
          <div class="swiper-slide__logo">
          <?php the_custom_logo(); ?>
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
            <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>
        </div>
      </div>
    </div>
  </div>-->
<?php


$loop = new WP_Query( array(
'post_type' => 'product',
'posts_per_page' => get_field('products_per_page'),
'category_cat' => 'menu',
'orderby' => 'menu_order',
'order' => 'ASC',
));

while ( $loop->have_posts() ): $loop->the_post(); ?>
<div <?php post_class("inloop-product"); ?>>
<div class="row">
<div class="col-sm-4">
<?php the_post_thumbnail("thumbnail-215x300"); ?>
</div>
<div class="col-sm-8">
<h4>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h4>
<?php the_content(); ?>
<p class="price">
<?php _e("Price:","examp"); ?>
<?php woocommerce_template_loop_price(); ?>
</p>
<?php woocommerce_template_loop_add_to_cart(); ?>
</div>
</div>
</div>

<?php endwhile; wp_reset_postdata(); ?>
<?php
  
  $args = array(
	
	'taxonomy'           => 'product_cat',
	'post_type'          => 'products',
  'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 0,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => __( 'Categories' ),
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
  //'parent'             => '0',
  'category' => 'menu',
  
);
echo '<ul>';
	wp_list_categories( $args );
echo '</ul>';
?>


  
  <?php 





  //echo $product->get_price(); 
  //echo do_shortcode('[products limit="5" columns="5" paginate="true"]') 
  //echo do_shortcode('[product_category category="main-dishes"]'); ?>





  <div class="hero__container container">
    <ul class="hero__nav list-reset">
      <li class="hero__nav--left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left.svg" alt=""></li>
      <li class="hero__nav--right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right.svg" alt=""></li>
    </ul>
    <div class="down-wrap">
      <a href="#down" class="down">
        <svg class="animate__animated animate__fadeInUp animate__infinite animate__slower"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrows-down"></use></svg>
      </a>
    </div>
  </div>
</div>
<section class="reservation">
  <div class="container reservation__container">
    <div class="reservation__content">
      
      

        <?php 
        echo do_shortcode('[contact-form-7 id="e4c0fec" title="Reservation"]') ?>
      
      <p class="reservation-explain">Due to the limited amount of tables in our restaurant, we cannot guarantee a private table.
        Some reservations will be sat at the bar or c ommunal. If you prefer a table, please
        call or make a note and we will do our bes t to accommodate your request.</p>
<div class="reservation-flower wow animate__pulse" data-wow-offset="200">
  <div class="flower"></div>
</div>

    </div>
  </div>
</section>

      <section class="calling">
  <div class="container">
    <h2 class="calling__title wow animate__zoomInDown" data-wow-duration="1.5s" data-wow-offset="200"><?php the_field('call'); ?></h2>
  </div>
</section>

      <section class="info-first info">
  <div class="container">
    <div class="info__content">
      <ul class="list-reset info__list">
        <li class="info__item wow animate__fadeInLeft" data-wow-offset="300" data-wow-delay=".1s">
          <div class="info__title">Burrito ChileBar</div>
          <div class="info__text">
            <p class="">Burrito — this is a chili bar in the heart
              of Tijuana, decorated  in a kitschy style
              with bright colors and a hot atmosphere.
              It embodies an  original   culture
              Mexico.  Visitorswillfeel as if
              they are in  hell and; heaven
              at  the; same  time</p>
          </div>
          <div class="info__decor wow animate__pulse" data-wow-offset="200">
            <div class="flower"></div>
          </div>
        </li>
        <li class="info__item wow animate__fadeInRight" data-wow-offset="300" data-wow-delay=".1s">
          <div class="info__img info__img--first"></div>
        </li>
      </ul>
    </div>
  </div>
</section>

      <section class="quote quote--first">
  <div class="container quote__container">
    <div class="quote__content wow animate__fadeInLeft" data-wow-offset="200">
      <quote class="quote__text">«Burrito ignites a hot flame in you, it collapses
        on you like lava, with its most powerful music,
               a sea of tequila and devilish food»</quote>
               <div class="quote__autor">Jonny Depp, the visitor</div>
    </div>

  </div>
</section>

      <section class="info-second info">
  <div class="container">
    <div class="info__content">
      <ul class="list-reset info__list">
        <li class="info__item wow animate__fadeInLeft" data-wow-offset="300" data-wow-delay=".1s">
          <div class="info__subtitle">The most profitable deals with us</div>
          <div class="info__title">Happy Hours</div>
          <div class="info__text">
        <p class="">Burrito — this is a chili bar in the heart
              of Tijuana, decorated  in a kitschy style
              with bright colors and a hot atmosphere.
              It embodies an  original   culture
              Mexico.  Visitorswillfeel as if
              they are in  hell and; heaven
              at  the; same  time</p>

  </div>

        </li>
        <li class="info__item wow animate__fadeInRight" data-wow-offset="300" data-wow-delay=".1s">
          <div class="info__img info__img--second"></div>
        </li>
      </ul>

    </div>
  </div>
</section>

      <section class="info--third info">
  <div class="container">
    <div class="info__content">
      <ul class="list-reset info__list">
        <li class="info__item info__item--block-1 wow animate__fadeInRight" data-wow-offset="200" data-wow-delay=".1s">
          <div class="info__subtitle">The most profitable deals with us</div>
          <div class="info__title">Music Time</div>
          <div class="info__decor wow animate__pulse" data-wow-offset="200">
            <div class="flower"></div>
          </div>
          <div class="info__text">
            <p class="">Burrito — this is a chili bar in the heart
              of Tijuana, decorated  in a kitschy style
              with bright colors and a hot atmosphere.
              It embodies an  original   culture
              Mexico.  Visitorswillfeel as if
              they are in  hell and; heaven
              at  the; same  time</p>
          </div>

        </li>
        <li class="info__item info__item--block-2 wow animate__fadeInLeft" data-wow-offset="200" data-wow-delay=".1s">
          <div class="info__img info__img--third"></div>
        </li>
      </ul>
    </div>
  </div>
</section>

      <section class="info-fourth info">
  <div class="container">
    <div class="info__content">
      <ul class="list-reset info__list">
        <li class="info__item wow animate__fadeInLeft" data-wow-offset="300" data-wow-delay=".1s">
          <div class="info__subtitle">50% discount every Sunday!</div>

          <div class="info__decor wow animate__pulse" data-wow-offset="300">
            <div class="flower"></div>
          </div>
          <div class="info__title">Sunday with teguila</div>
          <div class="info__text">
            <p class="">Burrito — this is a chili bar in the heart
              of Tijuana, decorated  in a kitschy style
              with bright colors and a hot atmosphere.
              It embodies an  original   culture
              Mexico.  Visitorswillfeel as if
              they are in  hell and; heaven
              at  the; same  time</p>
          </div>

        </li>
        <li class="info__item wow animate__fadeInRight" data-wow-offset="300" data-wow-delay=".1s">
          <div class="info__img info__img--fourth"></div>
        </li>
      </ul>
    </div>
  </div>
</section>

      <section class="quote quote--second">
  <div class="container quote__container">
    <div class="quote__content quote__content--second wow animate__fadeInLeft" data-wow-offset="200">
      <quote class="quote__text">«<?php the_field('quote_2_content');?>»</quote>
      <div class="quote__autor"><?php the_field('quote_2_author');?></div>
    </div>
  </div>
</section>

<?php 
get_template_part( 'tpl-parts/address' );
//$args = 'Какая-то строка';
//get_template_part( 'tpl-parts/address', null, $args );
?>

<?php
get_footer(); ?>

 <!-- -->