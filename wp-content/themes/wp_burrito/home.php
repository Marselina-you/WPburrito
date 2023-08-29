<?php
/*
Template Name: home

*/


get_header(); ?>


   <div class="section hero">
  <div class="swiper mainSlider">
    
    <div class="swiper-wrapper">
  <?php  $loop = new WP_Query( array(
'post_type' => 'post',
'posts_per_page' => get_field('products_per_page'),
'category' => 'slider',
'orderby' => 'menu_order',
'order' => 'ASC',
));

while ( $loop->have_posts() ): $loop->the_post(); ?>
      <div class="order-swiper-slide swiper-slide" style="background-image: url(<?php echo the_post_thumbnail_url(600, 'thumbnail'); ?>">
     
      <div class="order-swiper-slide__content wow animate__fadeIn" data-wow-duration="2s">
          <div class="swiper-slide__logo">
          <?php  the_custom_logo(); ?> 
          </div>
          <div class="order-swiper-slide__title">Burrito</div>
          <div class="order-swiper-slide__decor">
            <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor.svg" alt="burrito">
          </div>
          <div class="order-swiper-slide__subtitle">chilebar</div>

        </div>
       
	
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    
     
     

   
    
      
    </div>
  </div>






  <div class="hero__container container">
    <ul class="hero__nav list-reset">
      <li class="hero__nav--left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left.svg" alt=""></li>
      <li class="hero__nav--right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right.svg" alt=""></li>
    </ul>
    <div class="down-wrap">
      <a href="#down" class="down">
      
      <svg class="animate__animated animate__fadeInUp animate__infinite animate__slower" width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.3067 23.8879C10.7049 23.8485 11.0819 23.688 11.3847 23.4276L19.524 16.451C19.9343 16.1225 20.1932 15.641 20.2417 15.1187C20.2901 14.5963 20.1251 14.077 19.7845 13.6773C19.4423 13.2791 18.9548 13.0354 18.4309 13.0036C17.9071 12.9718 17.3923 13.1535 17.0047 13.5077L10.125 19.4065L3.24529 13.5077C2.8577 13.1535 2.34295 12.9718 1.81908 13.0036C1.29521 13.0354 0.807705 13.2791 0.465542 13.6773C0.124886 14.077 -0.040146 14.5963 0.00830261 15.1187C0.0567513 15.641 0.315649 16.1225 0.725963 16.451L8.86534 23.4276C9.26351 23.7698 9.78435 23.9348 10.3067 23.8879Z"/>
<path d="M10.3067 10.8879C10.7049 10.8485 11.0819 10.688 11.3847 10.4276L19.524 3.45102C19.9343 3.12248 20.1932 2.64104 20.2417 2.11868C20.2901 1.59633 20.1251 1.07704 19.7845 0.677315C19.4423 0.279144 18.9548 0.0353896 18.4309 0.00356854C17.9071 -0.0282258 17.3923 0.153457 17.0047 0.507745L10.125 6.40646L3.24529 0.507745C2.8577 0.153465 2.34295 -0.0282138 1.81908 0.00356854C1.29521 0.0353629 0.807705 0.279121 0.465542 0.677315C0.124886 1.077 -0.040146 1.59633 0.00830261 2.11868C0.0567513 2.64104 0.315649 3.12246 0.725963 3.45102L8.86534 10.4276C9.26351 10.7698 9.78435 10.9348 10.3067 10.8879Z"/>
</svg>
        
      </a>
    </div>
  </div>
</div>
<section class="reservation" style="background-color: black">
<?php $args = array(
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
	'taxonomy'           => 'product_cat',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
);

echo '<ul>';
	wp_list_categories( $args );
echo '</ul>'; ?>
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