<?php
get_header(); ?>

<body class="body">
  <div class="site-container">
<header class="header container">
  <div class="header__container">
    <div class="header-logo wow animate__fadeInLeft">
      <h1 class="header-logo__title">burrito</h1>
      <img class="header-logo__decor" src="img/decor.svg" alt="burrito">
      <span class="header-logo__subtitle">chilebar</span>
    </div>
    <div class="nav-wrap">
      <nav class="nav header__nav wow animate__fadeInDown">
      <?php wp_nav_menu(); ?>
        <ul class="nav__list list-reset">
          <li class="nav__item"><a href="#" class="nav__link">main</a></li>
          <li class="nav__item"><a href="#" class="nav__link">about us</a></li>
          <li class="nav__item"><a href="#" class="nav__link">menu</a></li>
          <li class="nav__item"><a href="#" class="nav__link">reservation</a></li>
          <li class="nav__item"><button class="btn-reset btn-order nav__link cart__count">cart</button></li>
    </ul>
    </nav>
    </div>

  <div class="burger-wrap">
    <button class="burger btn-reset">
      <span class="burger__line"></span>
    </button>
  </div>
  <div class="mini-cart">
    <div class="mini-cart__top">
      <ul class="list-reset mini-cart__list">
        <li class="mini-cart__item" data-id="">
          <article class="mini-cart__product mini-product">
            <div class="mini-product__image">
              <img src="/img/tapas.png" alt="">
            </div>
            <div class="mini-product__content">
              <div class="mini-product__text">
                <h3 class="mini-product__title">Tapas with bacon</h3>
                <span class="mini-product__quant">4</span>
                <span class="mini-product__price">1450 r</span>

              </div>
              <button class="btn-reset mini-product__delete" aria-label="Удалить товар">
                <svg>
                  <use xlink:href="img/sprite.svg#trash"></use>
                </svg>
              </button>
            </div>
          </article>
        </li>
        <li class="mini-cart__item" data-id="">
          <article class="mini-cart__product mini-product">
            <div class="mini-product__image">
              <img src="/img/tapas.png" alt="">
            </div>
            <div class="mini-product__content">
              <div class="mini-product__text">
                <h3 class="mini-product__title">Tapas with bacon</h3>
                <span class="mini-product__quant">4</span>
                <span class="mini-product__price">1450 r</span>

              </div>
              <button class="btn-reset mini-product__delete" aria-label="Удалить товар">
                <svg>
                  <use xlink:href="img/sprite.svg#trash"></use>
                </svg>
              </button>
            </div>
          </article>
        </li>
      </ul>
    </div>
  <div class="mini-cart__bottom">
    <div class="mini-cart__itog">
      <span class="mini-cart__txt">In total</span>
      <span class="mini-cart__summ">1459</span>
    </div>
    <button class="btn-reset btn btn--primary mini-cart__btn" data-graph-path="cart-modal">order</button>
  </div>
  </div>
  </div>
</header>

   
     <section class="about">
  <div class="about__hero">
    <h1 class="about__title  wow animate__fadeInDown" data-wow-offset="300" data-wow-delay=".1s">Chili-bar «Burrito»</h1>
    <div class="about__text wow animate__fadeInLeft" data-wow-offset="300" data-wow-delay=".3s">This is a 24-hour bar with Mexican cuisine and drinks.
      It will be noisy, hot and spicy!</div>
      <div class="down-wrap">
        <a href="#down" class="about__down">
          <svg class="animate__animated animate__fadeInDown animate__infinite animate__slower"><use xlink:href="img/sprite.svg#arrows-down"></use></svg>
        </a>
      </div>
  </div>
  <div class="about-block about-interior">
    <div class="about-block__container about-interior__container container">
      <hr>
      <h2 class="about-block__title">Interior</h2>
      <ul class="about-interior__images grid">
</ul>
    </div>
  </div>
  <div class="about-block about-chef">
    <div class="about-block__container container">
      <hr>
      <h2 class="about-block__title">Chef</h2>
      <div class="about-chef__content">
        <div class="about-chef__left wow animate__fadeInLeft" data-wow-offset="300" data-wow-delay=".1s">
          <img src="img/chef.png" alt="chef">
          <button class="about__overlay" data-graph-path="modal-first" data-id="6"></button>
        </div>
        <div class="about-chef__right wow animate__fadeInRight" data-wow-offset="300" data-wow-delay=".1s">
        <div class="about-chef__subtitle">Chef of the chili bar «Burrito»</div>
        <div class="about-chef__name">Pablo Gonzalez</div>
        <div class="about-chef__images">
          <div class="about-chef__img"><img src="img/about-dish-1.png" alt="salad">
            <button class="about__overlay" data-graph-path="modal-first" data-id="7"></button>
          </div>
          <div class="about-chef__img"><img src="img/about-dish-2.png" alt="burrito">
            <button class="about__overlay" data-graph-path="modal-first" data-id="8"></button>
          </div>
          <div class="about-chef__img"><img src="img/about-dish-3.png" alt="nuts">
            <button class="about__overlay" data-graph-path="modal-first" data-id="9"></button>
          </div>
        </div>
      </div>
    </div>

    </div>

    <div class="about__link wow animate__fadeInUp" data-wow-offset="300" data-wow-delay=".1s">
      <a href="#">go over <span>menu</span>
        <svg>
          <use xlink:href="img/sprite.svg#arrow"></use>
        </svg> </a>
</div>
    <div class="about__decor wow animate__pulse" data-wow-offset="300">
      <div class="flower"></div>

    </div>
    <div class="about__hr">
      <hr>
    </div>

  </div>

</section>

      <section class="address-block">
  <div class="container">
    <div class="address-block__content">
      <h2 class="title address-block__title">Our address</h2>
      <address class="address-block__address">Moscow A.Berzarina str. building 6</address>
      <span class="address-block__phone">(510) 647-9525</span>
      <div class="address-block__mail">info@lamarchaberkeley.com</div>
      <a href="" class="address-block__btn btn btn--gray btn-reset wow animate__pulse" data-wow-offset="200">reserve</a>

    </div>
    <a class="arrow-up" href="#top">
      <svg class="animate__animated animate__fadeInUp animate__infinite animate__slower wow" data-wow-offset="200">
            <use xlink:href="img/sprite.svg#up-arrow"></use>
          </svg>
        </a>
  </div>
</section>

   

    <div class="graph-modal">
    <div class="graph-modal__container modal-first" role="dialog" aria-modal="true" data-graph-target="modal-first">
        <button class="btn-reset graph-modal__close js-modal-close" aria-label="Закрыть модальное окно"></button>
        <div class="graph-modal-content">

        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper my-swiper mySwiper2">
          <div class="swiper-wrapper my-swiper-wrapper">
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

        </div>

          <div thumbsSlider="" class="swiper  my-swiper mySwiper">
            <div class="swiper-wrapper my-swiper-wrapper">

          </div>

        </div>

      <!-- Swiper JS -->

      <!-- Initialize Swiper -->

      </div>
  </div>
</div>

  </div>
  <?php
wp_footer();
?>
  

