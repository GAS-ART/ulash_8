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
      <div class="home-page__content icon-curl">
        <h1 class="home-page__titel">ULASH</h1>
        <p class="home-page__accent">Салон красоты в Барселоне</p>
        <p class="home-page__text">Премиум качество от лучших мастеров красоты и эстетики</p>
        <a href="#" class="home-page__popup">Консультация</a>
      </div>
      <div class="home-page__mobile icon-curl">
        <p class="home-page__text-mobile">Премиум качество от лучших мастеров красоты и эстетики</p>
        <a href="#" class="home-page__popup-mobile">Консультация</a>
      </div>
    </div>

    @if(App::isLocale('es'))
    <picture class="home-page__bg">
      <source media="(min-width:950px)" srcset="/img/home/es/header/1.webp">
      <source media="(min-width:320px)" srcset="/img/home/es/mobile/header/1.webp">
      <img src="/img/home/es/header/1.png" alt="">
    </picture>
    @elseif(App::isLocale('ru'))
    <picture class="home-page__bg">
      <source media="(min-width:950px)" srcset="/img/home/ru/header/1.webp">
      <source media="(min-width:320px)" srcset="/img/home/ru/mobile/header/1.webp">
      <img src="/img/home/ru/header/1.png" alt="">
    </picture>
    @endif
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
                <source media="(min-width:320px)" srcset="/img/home/es/about/1.webp">
                <img src="/img/home/es/about/1.jpg" alt="">
              </picture>
              @elseif(App::isLocale('ru'))
              <picture>
                <source media="(min-width:320px)" srcset="/img/home/ru/about/1.webp">
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
              <source media="(min-width:320px)" srcset="/img/home/es/about/2.webp">
              <img src="/img/home/es/about/2.jpg" alt="">
            </picture>
            @elseif(App::isLocale('ru'))
            <picture>
              <source media="(min-width:320px)" srcset="/img/home/ru/about/2.webp">
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
          <source media="(min-width:400px)" srcset="/img/home/es/about/3.webp">
          <source media="(min-width:320px)" srcset="/img/home/es/mobile/about/1.webp">
          <img src="/img/home/es/about/3.jpg" alt="">
        </picture>
        @elseif(App::isLocale('ru'))
        <picture>
          <source media="(min-width:400px)" srcset="/img/home/ru/about/3.webp">
          <source media="(min-width:320px)" srcset="/img/home/ru/mobile/about/1.webp">
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
            <source media="(min-width:1920px)" srcset="/img/home/es/services/1.webp">
            <source media="(min-width:950px)" srcset="/img/home/es/mobile/services/1.webp">
            <img src="/img/home/es/services/1.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source media="(min-width:1920px)" srcset="/img/home/ru/services/1.webp">
            <source media="(min-width:950px)" srcset="/img/home/ru/mobile/services/1.webp">
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
            <source media="(min-width:1920px)" srcset="/img/home/es/services/2.webp">
            <source media="(min-width:950px)" srcset="/img/home/es/mobile/services/2.webp">
            <img src="/img/home/es/services/2.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source media="(min-width:1920px)" srcset="/img/home/ru/services/2.webp">
            <source media="(min-width:950px)" srcset="/img/home/ru/mobile/services/2.webp">
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
            <source media="(min-width:1920px)" srcset="/img/home/es/services/3.webp">
            <source media="(min-width:950px)" srcset="/img/home/es/mobile/services/3.webp">
            <img src="/img/home/es/services/3.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source media="(min-width:1920px)" srcset="/img/home/ru/services/3.webp">
            <source media="(min-width:950px)" srcset="/img/home/ru/mobile/services/3.webp">
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
            <source media="(min-width:1920px)" srcset="/img/home/es/services/4.webp">
            <source media="(min-width:950px)" srcset="/img/home/es/mobile/services/4.webp">
            <img src="/img/home/es/services/4.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture>
            <source media="(min-width:1920px)" srcset="/img/home/ru/services/4.webp">
            <source media="(min-width:950px)" srcset="/img/home/ru/mobile/services/4.webp">
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
              <source media="(min-width:950px)" srcset="/img/home/es/teaching/1.webp">
              <source media="(min-width:320px)" srcset="/img/home/es/mobile/teaching/1.webp">
              <img src="/img/home/es/teaching/1.jpg" alt="">
            </picture>
            @elseif(App::isLocale('ru'))
            <picture>
              <source media="(min-width:950px)" srcset="\img\home\ru\teaching\1.webp">
              <source media="(min-width:320px)" srcset="\img\home\ru\mobile\teaching\1.webp">
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
              <source media="(min-width:950px)" srcset="/img/home/es/teaching/2.webp">
              <source media="(min-width:320px)" srcset="/img/home/es/mobile/teaching/2.webp">
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
              <source media="(min-width:950px)" srcset="/img/home/es/teaching/3.webp">
              <source media="(min-width:320px)" srcset="/img/home/es/mobile/teaching/3.webp">
              <img src="/img/home/es/teaching/3.jpg" alt="">
            </picture>
            @elseif(App::isLocale('ru'))
            <picture>
              <source media="(min-width:950px)" srcset="\img\home\ru\teaching\3.webp">
              <source media="(min-width:320px)" srcset="\img\home\ru\mobile\teaching\3.webp">
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
        <a href="#" class="saloon__link">

          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/es/saloon/1.webp">
            <source media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/1.webp">
            <img src="/img/home/es/saloon/1.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/ru/saloon/1.webp">
            <source media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/1.webp">
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
        </a>

        <a href="#" class="saloon__link">

          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/es/saloon/2.webp">
            <source media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/2.webp">
            <img src="/img/home/es/saloon/2.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/ru/saloon/2.webp">
            <source media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/2.webp">
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
        </a>

        <a href="#" class="saloon__link">
          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/es/saloon/3.webp">
            <source media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/3.webp">
            <img src="/img/home/es/saloon/3.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/ru/saloon/3.webp">
            <source media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/3.webp">
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
        </a>

        <a href="#" class="saloon__link">
          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/es/saloon/4.webp">
            <source media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/4.webp">
            <img src="/img/home/es/saloon/4.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/ru/saloon/4.webp">
            <source media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/4.webp">
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
        </a>

        <a href="#" class="saloon__link">
          @if(App::isLocale('es'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/es/saloon/5.webp">
            <source media="(min-width:320px)" srcset="/img/home/es/mobile/saloon/5.webp">
            <img src="/img/home/es/saloon/5.jpg" alt="">
          </picture>
          @elseif(App::isLocale('ru'))
          <picture class="saloon__img">
            <source media="(min-width:450px)" srcset="/img/home/ru/saloon/5.webp">
            <source media="(min-width:320px)" srcset="/img/home/ru/mobile/saloon/5.webp">
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
        </a>
      </div>
      <button class="saloon__btn">Посмотреть больше работ</button>
    </div>
  </section>

  <section class="reviews">
    <div class="reviews__container">
      <h3 class="reviews__title-h3 section-name">Отзывы</h3>
      <h2 class="reviews__title-h2 section-title">клиенты о нас</h2>
      

    <!-- Оболочка слайдера -->
    <div class="reviews__slider swiper">
      <!-- Двигающееся часть слайдера -->
      <div class="reviews__wrapper swiper-wrapper">
        <!-- Слайд -->
        <div class="reviews__slide swiper-slide"></div>
      </div>
      <!-- Если нужна пагинация -->
      <div class="swiper-pagination"></div>
      <!-- Если нужна навигация (влево/вправо) -->
      <button type="button" class="swiper-button-prev"></button>
      <button type="button" class="swiper-button-next"></button>
      <!-- Если нужен скролбар -->
      <div class="swiper-scrollbar"></div>
    </div>
    
  </section>
</div>
@endsection