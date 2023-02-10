@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')

@section('content')
<section class="home-page">
  <div class="home-page__wrapper">
    <div class="home-page__container">
      <div class="home-page__content">
        <div class="home-page__icon icon-curl"></div>
        <h1 class="home-page__titel">ULASH</h1>
        <p class="home-page__accent">Салон красоты в Барселоне</p>
        <p class="home-page__text">Премиум качество от лучших мастеров красоты и эстетики</p>
        <button class="home-page__popup" data-popup='#popup'>Консультация</button>
      </div>
      <div class="home-page__mobile">
        <div class="home-page__mobile-icon icon-curl"></div>
        <p class="home-page__text-mobile">Премиум качество от лучших мастеров красоты и эстетики</p>
        <button class="home-page__popup-mobile" data-popup='#popup'>Консультация</button>
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
          <h3 class="about__title-h3 section-name">О нашем салоне</h3>
          <h2 class="about__title-h2 section-title">Салон красоты
            Ulash</h2>
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
              <p class="about__author-name">Прокопенко
                Валентина Викторовна</p>
              <p class="about__author-profession">Владелица студии красоты</p>
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
        <p class="about__text">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
        </p>
        <p class="about__text">"Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є
        </p>
        <p class="about__text">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів
        </p>
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
        <h3 class="services__title-h3 section-name">услуги</h3>
        <h2 class="services__title-h2 section-title">Что мы можем предложить</h2>
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
            <h4 class="services__content-title">Ногтевой сервис</h4>
            <p class="services__content-link">Записаться</p>
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
            <h4 class="services__content-title">Ногтевой сервис</h4>
            <p class="services__content-link">Записаться</p>
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
            <h4 class="services__content-title">Ногтевой сервис</h4>
            <p class="services__content-link">Записаться</p>
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
            <h4 class="services__content-title">Ногтевой сервис</h4>
            <p class="services__content-link">Записаться</p>
          </div>
        </a>

      </div>

    </div>
    <div class="services__teaching">
      <h2 class="services__teaching-title-h2 section-title">Обучение</h2>

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
            <h4 class="services__teaching-title">Курс по наращиванию нижних ресниц и декорирования</h4>
            <p class="services__teaching-text">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично</p>
            <button class="services__teaching-popup">Записаться</button>
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
            <h4 class="services__teaching-title">Курс по наращиванию нижних ресниц и декорирования</h4>
            <p class="services__teaching-text">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично</p>
            <button class="services__teaching-popup">Записаться</button>
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
            <h4 class="services__teaching-title">Курс по наращиванию нижних ресниц и декорирования</h4>
            <p class="services__teaching-text">Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично</p>
            <button class="services__teaching-popup">Записаться</button>
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
          <div class="advantages__icon">10</div>
          <div class="advantages__text">10 лет делаем людей красивыми</div>
        </div>
        <span></span>
        <div class="advantages__item">
          <div class="advantages__icon icon-handClock"></div>
          <div class="advantages__text">Экономим ваше время с услугами в 4-6 рук</div>
        </div>
        <span></span>
        <div class="advantages__item">
          <div class="advantages__icon icon-rockFlower"></div>
          <div class="advantages__text">Экономим ваше время с услугами в 4-6 рук</div>
        </div>
        <span></span>
        <div class="advantages__item">
          <div class="advantages__icon icon-diamond"></div>
          <div class="advantages__text">Экономим ваше время с услугами в 4-6 рук</div>
        </div>
      </div>
    </div>
  </section>

  <section class="saloon">
    <div class="saloon__container">
      <div class="saloon__title">
        <h3 class="saloon__title-h3 section-name">салон красоты</h3>
        <h2 class="saloon__title-h2 section-title">Наши последние работы</h2>
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
              <h4 class="saloon__content-title">ресницы</h4>
              <p class="saloon__text">Lorem Ipsum - це текст-"риба", що використовується</p>
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
              <h4 class="saloon__content-title">ресницы</h4>
              <p class="saloon__text">Lorem Ipsum - це текст-"риба", що використовується</p>
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
              <h4 class="saloon__content-title">ресницы</h4>
              <p class="saloon__text">Lorem Ipsum - це текст-"риба", що використовується</p>
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
              <h4 class="saloon__content-title">ресницы</h4>
              <p class="saloon__text">Lorem Ipsum - це текст-"риба", що використовується</p>
            </div>
          </div>
        </div>

        <div class="saloon__link">
          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source type="image/webp" type="image/webp" media="(min-width:450px)" srcset="/img/home/es/saloon/5.webp">
            <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/5.webp">
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
              <h4 class="saloon__content-title">ресницы</h4>
              <p class="saloon__text">Lorem Ipsum - це текст-"риба", що використовується</p>
            </div>
          </div>
        </div>
      </div>
      <button class="saloon__btn">Посмотреть больше работ</button>
    </div>
  </section>

  <section class="reviews-slider">
    <div class="reviews-slider__containerSlider">
      <div class="reviews-slider__text">
        <h3 class="reviews-slider__title-h3 section-name">Отзывы</h3>
        <h2 class="reviews-slider__title-h2 section-title">клиенты о нас</h2>
      </div>

      <div class="reviews-slider-wrapper">
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">

              @if(App::isLocale('es'))
              <picture class="swiper-slide__img">
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/1.webp">
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
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/2.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/2.webp">
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
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/3.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/2.webp">
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
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/1.webp">
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
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/1.webp">
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
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/1.webp">
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
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/1.webp">
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
                <source type="image/webp" type="image/webp" media="(min-width:701px)" srcset="/img/home/es/reviews/1.webp">
                <source type="image/webp" type="image/webp" media="(min-width:320px)" srcset="/img/home/es/mobile/reviews/1.webp">
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
  <p class="spollers__decor-text">FAQ</p>
  <div class="spollers__container">
    <h2 class="spollers__title-h2 section-title">Вопрос ответ</h2>

    <div class="spollers__wrapper">

      <div class="spollers__box">

        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>

        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>
        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>
        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>

      </div>

      <div class="spollers__box">

        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>

        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>
        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>
        <div class="spollers__item" data-spollers>
          <button type="button" data-spoller class="spollers__title">
            <p class="spollers__text">Сколько будет длиться процедура наращивания ресниц?</p>
            <span class="spollers__icon icon-plusSpoiler"></span>
          </button>
          <div class="spollers__body">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="read-more">
  <div class="read-more__container">
    <h2 class="read-more__title-h2">Студия красоты Ulash – сделаем красотку на миллион!</h2>

    <div class="read-more__wrapper">
      <p class="read-more__text">Каждая девушка периодически желает ощутить удовольствие от посещения салона красоты. И в самом деле, это чрезвычайно полезно. Студия красоты Ulash собрала лучших специалистов в своей нише. Они трудятся над каждой дамой, чтобы она вышла из дверей салона с безупречным внешним видом.
        Зачем посещать студию красоты?
        Профессиональный уход, который предлагается в салоне, не только улучшает имидж, но и дарит положительные эмоции и уникальные возможности. В лице мастеров вы можете найти хороших друзей, а среди других клиентов – полезные связи. В этом месте вы можете выговориться, спросить совета, как поступить в конкретной ситуации.
        Каждая девушка периодически желает ощутить удовольствие от посещения салона красоты. И в самом деле, это чрезвычайно полезно. Студия красоты Ulash собрала лучших специалистов в своей нише. Они трудятся над каждой дамой, чтобы она вышла из дверей салона с безупречным внешним видом.
        Зачем посещать студию красоты.
        Профессиональный уход, который предлагается в салоне, не только улучшает имидж, но и дарит положительные эмоции и уникальные возможности. В лице мастеров вы можете найти хороших друзей, а среди других клиентов – полезные связи. В этом месте вы можете выговориться, спросить совета, как поступить в конкретной ситуации.
        Каждая девушка периодически желает ощутить удовольствие от посещения салона красоты. И в самом деле, это чрезвычайно полезно. Студия красоты Ulash собрала лучших специалистов в своей нише. Они трудятся над каждой дамой, чтобы она вышла из дверей салона с безупречным внешним видом.
        Зачем посещать студию красоты.</p>

      <button class="read-more__btn">Читать дальше</button>
    </div>
  </div>
</section>

@endsection