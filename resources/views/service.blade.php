@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')


@section('content')
<section class="services-home-page">

  <div class="services-home-page__img-wrapper">
    @if(App::isLocale('es'))
    <picture class="services-home-page__img">
      <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/servisces-home-page/1.webp">
      <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/servisces-home-page/1.webp">
      <img src="/img/home/es/services-page/servisces-home-page/1.jpg" alt="">
    </picture>

    @elseif(App::isLocale('ru'))
    <picture class="services-home-page__img">
      <source type="image/webp" media="(min-width:650px)" srcset="/img/home/ru/services-page/servisces-home-page/1.webp">
      <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/services-page/mobile/servisces-home-page/1.webp">
      <img src="/img/home/ru/services-page/servisces-home-page/1.jpg" alt="">
    </picture>
    @endif
  </div>

  <div class="services-home-page__container">
    <div class="services-home-page__wrapper">

      <div class="services-home-page__box">
        <h3 class="services-home-page__title-h3 section-name">о процедуре</h3>
        <h2 class="services-home-page__title-h2 section-title">Ногтевой сервис</h2>
        <div class="services-home-page__text-wrapper">
          <p class="services-home-page__text">
            Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
            "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є
          </p>
        </div>
        <bitton class="services-home-page__popup">Записаться на маникюр</bitton>
      </div>

    </div>
  </div>


</section>

<section class="services-price">
  <p class="services-price__decor">price</p>
  <div class="services-price__container">
    <div class="services-price__wrapper">

      <div class="services-price__box">

        <ul class="services-price__list">
          <h4 class="services-price__title">Маникюр</h4>

          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
        </ul>

        <ul class="services-price__list">
          <h4 class="services-price__title">Маникюр</h4>

          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
        </ul>


      </div>

      <div class="services-price__box">

        <ul class="services-price__list">
          <h4 class="services-price__title">Маникюр</h4>

          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
        </ul>

        <ul class="services-price__list">
          <h4 class="services-price__title">Маникюр</h4>

          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">Детский маникюр (придание формы+покрытие лаком, до 8 лет)</p>
            <span class="services-price__price">10 €</span>
          </li>
        </ul>


      </div>

    </div>

    <button class="services-price__btn">Посмотреть все цены</button>
  </div>
</section>


<section class="services-types">
  <p class="services-types__decor-text">types</p>
  <div class="services-types__container">
    <div class="services-types__wrapper">

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">маникюр</h3>
          <h2 class="services-types__title-h2 section-title">комбинированный</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">
              Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
              "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum
            </p>
          </div>
          <bitton class="services-home-page__popup">Записаться на маникюр</bitton>
        </div>

      </div>

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">маникюр</h3>
          <h2 class="services-types__title-h2 section-title">комбинированный</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">
              Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
              "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum
            </p>
          </div>
          <bitton class="services-home-page__popup">Записаться на маникюр</bitton>
        </div>

      </div>

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">маникюр</h3>
          <h2 class="services-types__title-h2 section-title">комбинированный</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">
              Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
              "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum
            </p>
          </div>
          <bitton class="services-home-page__popup">Записаться на маникюр</bitton>
        </div>

      </div>

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">маникюр</h3>
          <h2 class="services-types__title-h2 section-title">комбинированный</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">
              Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
              "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum
            </p>
          </div>
          <bitton class="services-home-page__popup">Записаться на маникюр</bitton>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="services-advantages">
  @include('inc.advantages')
</section>

<div class="linear-gradient">
  <section class="services-saloon">
    @include('inc.saloon')
  </section>

  <section class="services-spollers">
    @include('inc.spollers')
  </section>
</div>

<section class="services-spollers-mobile">
  @include('inc.spollers')
</section>

<section class="services-form">
  @include('inc.form')
</section>

@endsection