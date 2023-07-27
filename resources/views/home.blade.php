@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))

@section('page', 'home')

@section('content')
<section class="home-page">
  <div class="home-page__wrapper">
    <div class="home-page__container">
      <div class="home-page__content">
        <div class="home-page__icon icon-curl"></div>
        <h1 class="home-page__titel">@lang('home.head-screen.title')</h1>
        <p class="home-page__accent">@lang('home.head-screen.text')</p>
        <p class="home-page__text">@lang('home.head-screen.description')</p>
        <button class="home-page__popup" data-popup='#popup'>@lang('home.head-screen.btn-text')</button>
      </div>
      <div class="home-page__mobile">
        <div class="home-page__mobile-icon icon-curl"></div>
        <p class="home-page__text-mobile">@lang('home.head-screen.description')</p>
        <button class="home-page__popup-mobile" data-popup='#popup'>@lang('home.head-screen.btn-text')</button>
      </div>
    </div>
    <div class="home-page__bg-wrapper">
      @if(App::isLocale('es'))
      <picture class="home-page__bg">
        <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/header/1.webp">
        <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/header/1.webp">
        <img src="/img/home/es/header/1.jpg" alt="">
      </picture>
      @elseif(App::isLocale('ru'))
      <picture class="home-page__bg">
        <source type="image/webp" media="(min-width:650px)" srcset="/img/home/ru/header/1.webp">
        <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/header/1.webp">
        <img src="/img/home/ru/header/1.jpg" alt="">
      </picture>
      @endif
    </div>
  </div>
</section>

<section class="about">
  <div class="about__container">
    <div class="about__wrapper">
      <div class="about__title-author">
        <div class="about__title">
          <h3 class="about__title-h3 section-name">@lang('home.about.title-h3')</h3>
          <h2 class="about__title-h2 section-title">@lang('home.about.title-h2')</h2>
        </div>
        <div class="about__author">
          <div class="about__author-wrapper">
            <div class="about__author-img">
              @if(App::isLocale('es'))
              <picture>
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/about/1.webp">
                <img src="/img/home/es/about/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture>
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/about/1.webp">
                <img src="/img/home/ru/about/1.jpg" alt="">
              </picture>
              @endif
            </div>

            <div class="about__author-name-wrapper">
              <p class="about__author-name">@lang('home.about.author-name')</p>
              <p class="about__author-profession">@lang('home.about.author-profession')</p>
            </div>
          </div>
          <div class="about__author-signa">
            @if(App::isLocale('es'))
            <picture>
              <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/about/2.webp">
              <img src="/img/home/es/about/2.jpg" alt="">
            </picture>
            @elseif(App::isLocale('ru'))
            <picture>
              <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/about/2.webp">
              <img src="/img/home/ru/about/2.jpg" alt="">
            </picture>
            @endif

          </div>
        </div>
      </div>
      <div class="about__text-wrapper">
        <p class="about__text">@lang('home.about.text-1')</p>
        <p class="about__text">@lang('home.about.text-2')</p>
      </div>


      <div class="about__img">
        @if(App::isLocale('es'))
        <picture>
          <source type="image/webp" media="(min-width:400px)" srcset="/img/home/es/about/3.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/about/1.webp">
          <img src="/img/home/es/about/3.jpg" alt="">
        </picture>
        @elseif(App::isLocale('ru'))
        <picture>
          <source type="image/webp" media="(min-width:400px)" srcset="/img/home/ru/about/3.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/about/1.webp">
          <img src="/img/home/ru/about/3.jpg" alt="">
        </picture>
        @endif
      </div>
    </div>
</section>

<section class="services">

  <div class="services__container">
    <p class="services__decor">services</p>
    <div class="services__servis">
      <div class="services__title">
        <h3 class="services__title-h3 section-name">@lang('home.services.title-h3')</h3>
        <h2 class="services__title-h2 section-title">@lang('home.services.title-h2')</h2>
      </div>
      <div class="services__imgs-wrapper">

        <a class="services__imgs-item" href="#">
          @if(App::isLocale('es'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/es/services/1.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/es/mobile/services/1.webp">
            <img src="/img/home/es/services/1.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/ru/services/1.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/ru/mobile/services/1.webp">
            <img src="/img/home/ru/services/1.jpg" alt="">
          </picture>
          @endif

          <div class="services__content">
            <h4 class="services__content-title">@lang('home.services.card-one-text')</h4>
            <p data-popup="#popup" class="services__content-link">@lang('home.services.card-btn-text')</p>
          </div>
        </a>

        <a class="services__imgs-item" href="#">
          @if(App::isLocale('es'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/es/services/2.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/es/mobile/services/2.webp">
            <img src="/img/home/es/services/2.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/ru/services/2.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/ru/mobile/services/2.webp">
            <img src="/img/home/ru/services/2.jpg" alt="">
          </picture>
          @endif

          <div class="services__content">
            <h4 class="services__content-title">@lang('home.services.card-two-text')</h4>
            <p data-popup="#popup" class="services__content-link">@lang('home.services.card-btn-text')</p>
          </div>
        </a>

        <a class="services__imgs-item" href="#">
          @if(App::isLocale('es'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/es/services/3.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/es/mobile/services/3.webp">
            <img src="/img/home/es/services/3.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/ru/services/3.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/ru/mobile/services/3.webp">
            <img src="/img/home/ru/services/3.jpg" alt="">
          </picture>
          @endif

          <div class="services__content">
            <h4 class="services__content-title">@lang('home.services.card-three-text')</h4>
            <p data-popup="#popup" class="services__content-link">@lang('home.services.card-btn-text')</p>
          </div>
        </a>

        <a class="services__imgs-item" href="#">
          @if(App::isLocale('es'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/es/services/4.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/es/mobile/services/4.webp">
            <img src="/img/home/es/services/4.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source type="image/webp" media="(min-width:1920px)" srcset="/img/home/ru/services/4.webp">
            <source type="image/webp" media="(min-width:950px)" srcset="/img/home/ru/mobile/services/4.webp">
            <img src="/img/home/ru/services/4.jpg" alt="">
          </picture>
          @endif

          <div class="services__content">
            <h4 class="services__content-title">@lang('home.services.card-four-text')</h4>
            <p data-popup="#popup" class="services__content-link">@lang('home.services.card-btn-text')</p>
          </div>
        </a>

      </div>

    </div>
    <div class="services__teaching">
      <h2 class="services__teaching-title-h2 section-title">@lang('home.teaching.title')</h2>

      <div class="services__teaching-wrapper">

        <div class="services__teaching-item">
          <a class="services__teaching-img-wrapper" href="#">
            @if(App::isLocale('es'))
            <picture>
              <source type="image/webp" media="(min-width:950px)" srcset="/img/home/es/teaching/1.webp">
              <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/teaching/1.webp">
              <img src="/img/home/es/teaching/1.jpg" alt="">
            </picture>
            @elseif(App::isLocale('ru'))
            <picture>
              <source type="image/webp" media="(min-width:950px)" srcset="\img\home\ru\teaching\1.webp">
              <source type="image/webp" media="(min-width:320px)" srcset="\img\home\ru\mobile\teaching\1.webp">
              <img src="\img\home\ru\teaching\1.jpg" alt="">
            </picture>
            @endif

          </a>
          <div class="services__teaching-content">
            <h4 class="services__teaching-title">@lang('home.teaching.card-one-title')</h4>
            <p class="services__teaching-text">@lang('home.teaching.card-one-text')</p>
            <button class="services__teaching-popup" data-popup="#popup">@lang('home.teaching.card-btn-text')</button>
          </div>
        </div>

        <div class="services__teaching-item">
          <a class="services__teaching-img-wrapper" href="#">
            @if(App::isLocale('es'))
            <picture>
              <source type="image/webp" media="(min-width:950px)" srcset="/img/home/es/teaching/2.webp">
              <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/teaching/2.webp">
              <img src="/img/home/es/teaching/2.jpg" alt="">
            </picture>
            @elseif(App::isLocale('ru'))
            <picture>
              <source media="(min-width:950px)" srcset="\img\home\ru\teaching\2.webp">
              <source media="(min-width:320px)" srcset="\img\home\ru\mobile\teaching\2.webp">
              <img src="\img\home\ru\teaching\2.jpg" alt="">
            </picture>
            @endif
          </a>
          <div class="services__teaching-content">
            <h4 class="services__teaching-title">@lang('home.teaching.card-two-title')</h4>
            <p class="services__teaching-text">@lang('home.teaching.card-two-text')</p>
            <button class="services__teaching-popup" data-popup="#popup">@lang('home.teaching.card-btn-text')</button>
          </div>
        </div>

        <div class="services__teaching-item">
          <a class="services__teaching-img-wrapper" href="#">
            @if(App::isLocale('es'))
            <picture>
              <source type="image/webp" media="(min-width:950px)" srcset="/img/home/es/teaching/3.webp">
              <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/teaching/3.webp">
              <img src="/img/home/es/teaching/3.jpg" alt="">
            </picture>
            @elseif(App::isLocale('ru'))
            <picture>
              <source type="image/webp" media="(min-width:950px)" srcset="\img\home\ru\teaching\3.webp">
              <source type="image/webp" media="(min-width:320px)" srcset="\img\home\ru\mobile\teaching\3.webp">
              <img src="\img\home\ru\teaching\3.jpg" alt="">
            </picture>
            @endif
          </a>
          <div class="services__teaching-content">
            <h4 class="services__teaching-title">@lang('home.teaching.card-three-title')</h4>
            <p class="services__teaching-text">@lang('home.teaching.card-three-text')</p>
            <button class="services__teaching-popup" data-popup="#popup">@lang('home.teaching.card-btn-text')</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="linear-gradient">
  <section class="advantages">
    <p class="advantages__decor-text">ulash</p>
    <div class="advantages__decor-icon icon-curl"></div>
    <div class="advantages__container">
      <div class="advantages__wrapper">
        <div class="advantages__item">
          <div class="advantages__icon">15</div>
          <div class="advantages__text">@lang('home.advantages.text-one')</div>
        </div>

        <div class="advantages__item">
          <div class="advantages__icon icon-handClock"></div>
          <div class="advantages__text">@lang('home.advantages.text-two')</div>
        </div>

        <div class="advantages__item">
          <div class="advantages__icon icon-rockFlower"></div>
          <div class="advantages__text">@lang('home.advantages.text-three')</div>
        </div>

        <div class="advantages__item">
          <div class="advantages__icon icon-diamond"></div>
          <div class="advantages__text">@lang('home.advantages.text-four')</div>
        </div>
      </div>
    </div>
  </section>

  <section class="saloon">
    <div class="saloon__container">
      <div class="saloon__title">
        <h3 class="saloon__title-h3 section-name">@lang('home.saloon.title-h3')</h3>
        <h2 class="saloon__title-h2 section-title">@lang('home.saloon.title-h2')</h2>
      </div>

      <div class="saloon__wrapper">
        <div class="saloon__link">

          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/es/saloon/1.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/1.webp">
            <img src="/img/home/es/saloon/1.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/ru/saloon/1.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/1.webp">
            <img src="/img/home/ru/saloon/1.jpg" alt="">
          </picture>
          @endif

          <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-one-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-one-text')</p>
            </div>
          </div>
        </div>

        <div class="saloon__link">

          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/es/saloon/2.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/2.webp">
            <img src="/img/home/es/saloon/2.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/ru/saloon/2.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/2.webp">
            <img src="/img/home/ru/saloon/2.jpg" alt="">
          </picture>
          @endif

          <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-two-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-two-text')</p>
            </div>
          </div>
        </div>

        <div class="saloon__link">
          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/es/saloon/3.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/3.webp">
            <img src="/img/home/es/saloon/3.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/ru/saloon/3.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/3.webp">
            <img src="/img/home/ru/saloon/3.jpg" alt="">
          </picture>
          @endif

          <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-three-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-three-text')</p>
            </div>
          </div>
        </div>

        <div class="saloon__link">
          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/es/saloon/4.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/4.webp">
            <img src="/img/home/es/saloon/4.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/ru/saloon/4.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/4.webp">
            <img src="/img/home/ru/saloon/4.jpg" alt="">
          </picture>
          @endif

          <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-four-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-four-text')</p>
            </div>
          </div>
        </div>

        <div class="saloon__link">
          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source type="image/webp" type="image/webp" media="(min-width:450px)" srcset="/img/home/es/saloon/5.webp">
            <source type="image/webp" type="image/webp" media="(min-width:320px)"
              srcset="/img/home/es/mobile/saloon/5.webp">
            <img src="/img/home/es/saloon/5.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source type="image/webp" media="(min-width:450px)" srcset="/img/home/ru/saloon/5.webp">
            <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/5.webp">
            <img src="/img/home/ru/saloon/5.jpg" alt="">
          </picture>
          @endif
          <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-five-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-five-text')</p>
            </div>
          </div>
        </div>
      </div>
      <button class="saloon__btn">@lang('home.saloon.btn-text')</button>
    </div>
  </section>

  <section class="reviews-slider">
    <div class="reviews-slider__containerSlider">
      <div class="reviews-slider__text">
        <h3 class="reviews-slider__title-h3 section-name">@lang('home.reviews.title-h3')</h3>
        <h2 class="reviews-slider__title-h2 section-title">@lang('home.reviews.title-h2')</h2>
      </div>

      <div class="reviews-slider-wrapper">
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/1.webp">
                <img src="/img/home/es/reviews/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/1.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/1.webp">
                <img src="/img/home/ru/reviews/1.jpg" alt="">
              </picture>
              @endif

            </div>

            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/2.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/2.webp">
                <img src="/img/home/es/reviews/2.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/2.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/2.webp">
                <img src="/img/home/ru/reviews/2.jpg" alt="">
              </picture>
              @endif

            </div>
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/3.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/2.webp">
                <img src="/img/home/es/reviews/3.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/3.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/1.webp">
                <img src="/img/home/ru/reviews/1.jpg" alt="">
              </picture>
              @endif

            </div>
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/1.webp">
                <img src="/img/home/es/reviews/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/2.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/2.webp">
                <img src="/img/home/ru/reviews/2.jpg" alt="">
              </picture>
              @endif

            </div>
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/1.webp">
                <img src="/img/home/es/reviews/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/2.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/2.webp">
                <img src="/img/home/ru/reviews/2.jpg" alt="">
              </picture>
              @endif

            </div>
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/1.webp">
                <img src="/img/home/es/reviews/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/2.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/2.webp">
                <img src="/img/home/ru/reviews/2.jpg" alt="">
              </picture>
              @endif

            </div>
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/1.webp">
                <img src="/img/home/es/reviews/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/2.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/2.webp">
                <img src="/img/home/ru/reviews/2.jpg" alt="">
              </picture>
              @endif

            </div>
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)"
                  srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)"
                  srcset="/img/home/es/mobile/reviews/1.webp">
                <img src="/img/home/es/reviews/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture class="swiper-slide__img">
                <source type="image/webp" media="(min-width:701px)" srcset="/img/home/ru/reviews/2.webp">
                <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/mobile/reviews/2.webp">
                <img src="/img/home/ru/reviews/2.jpg" alt="">
              </picture>
              @endif

            </div>
          </div>

        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev icon-arrow"></div>
        <div class="swiper-button-next icon-arrow"></div>
      </div>
  </section>
</div>

<section class="spollers">
  @include('inc.spollers')
</section>


<section class="read-more">
  <div class="read-more__container">
    <h2 class="read-more__title-h2">@lang('home.read-more.title')</h2>

    <div class="read-more__wrapper">
      <p class="read-more__text">@lang('home.read-more.text')</p>

      <button class="read-more__btn">@lang('home.read-more.btn-text')</button>
    </div>
  </div>
</section>

@endsection