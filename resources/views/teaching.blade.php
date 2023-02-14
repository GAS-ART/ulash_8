@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')


@section('content')
<section class="teaching-home-page">

  <div class="teaching-home-page__img-wrapper">
    @if(App::isLocale('es'))
    <picture class="teaching-home-page__img">
      <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/teaching-page/1.webp">
      <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/teaching-page/mobile/1.webp">
      <img src="/img/home/es/teaching-page/1.jpg" alt="">
    </picture>

    @elseif(App::isLocale('ru'))
    <picture class="teaching-home-page__img">
      <source type="image/webp" media="(min-width:650px)" srcset="/img/home/ru/teaching-page/1.webp">
      <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/teaching-page/mobile/1.webp">
      <img src="/img/home/ru/teaching-page/1.jpg" alt="">
    </picture>
    @endif
  </div>

  <div class="teaching-home-page__container">
    <div class="teaching-home-page__wrapper">

      <div class="teaching-home-page__box">
        <h3 class="teaching-home-page__title-h3 section-name">курс</h3>
        <h2 class="teaching-home-page__title-h2 section-title">Получи повышение квалификации лешмейкера</h2>
        <div class="teaching-home-page__text-wrapper">
          <p class="teaching-home-page__text">
            за 1 день в международной академии красоты Glory Lash
          </p>
        </div>
        <bitton class="teaching-home-page__popup" data-popup="#popup">Забронировать место</bitton>
      </div>

    </div>
  </div>

</section>

<section class="teaching-about">

  <p class="services-price__decor">About</p>

  <div class="teaching-about__container">

    <div class="teaching-about__box">

      @if(App::isLocale('es'))
      <picture class="teaching-about__img">
        <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/teaching-page/2.webp">
        <source type="image/webp" media="(min-width:320px)" srcset="/img/home/es/teaching-page/mobile/2.webp">
        <img src="/img/home/es/teaching-page/2.jpg" alt="">
      </picture>

      @elseif(App::isLocale('ru'))
      <picture class="teaching-about__img">
        <source type="image/webp" media="(min-width:650px)" srcset="/img/home/ru/teaching-page/2.webp">
        <source type="image/webp" media="(min-width:320px)" srcset="/img/home/ru/teaching-page/mobile/2.webp">
        <img src="/img/home/ru/teaching-page/2.jpg" alt="">
      </picture>
      @endif


      <div class="teaching-about__content">
        <div class="teaching-about__title">
          <h3 class="teaching-about__title-h3 section-name">Курс "Повышение квалификации по</h3>
          <h3 class="teaching-about__title-h3 section-name">наращиванию ресниц"</h3>
        </div>

        <div class="teaching-about__title-mobile">
          <h3 class="teaching-about__title-h3 section-name">Курс "Повышение</h3>
          <h3 class="teaching-about__title-h3 section-name">квалификации по</h3>
          <h3 class="teaching-about__title-h3 section-name">наращиванию ресниц"</h3>
        </div>

        <h2 class="teaching-about__title-h2 section-title">Подробней о курсе</h2>
        <ul class="teaching-about__items">

          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text"><span>Старт:</span> Курс длится 1 день с 10.00 - 20.00</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text"><span>Максимальное количество:</span> 3 человека</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text"><span>Место:</span> студия красоты Ulash в отдельном оборудованном для обучения кабинете со всеми необходимыми материалами</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text"><span>Цена:</span> 100 €</p>
          </li>

        </ul>
        <bitton class="teaching-about__popup">Получить консультацию</bitton>
      </div>

    </div>

  </div>
</section>

<section class="teaching-advantages">
  <div class="teaching-advantages__container">

    <div class="teaching-advantages__title">
      <h3 class="teaching-advantages__title-h3 section-name">Преимущества</h3>
      <h2 class="teaching-advantages__title-h2 section-title">Что ты получишь за 2 дня</h2>
    </div>

    <div class="teaching-advantages__wrapper">

      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-handClock"></div>
        <div class="teaching-advantages__text">Мощную теоретическую базу по нашим учебным пособиям</div>
      </div>
      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-rockFlower"></div>
        <div class="teaching-advantages__text">Почти индивидуальное обучение (группа до 3 человек)</div>
      </div>
      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-diamond"></div>
        <div class="teaching-advantages__text">3 сертификата международного образца от академии Glory lash</div>
      </div>
    </div>
  </div>
</section>

<section class="teaching-program">
  <p class="teaching-program__decor-text">program</p>
  <div class="teaching-program__container">
    <div class="teaching-advantages__title">
      <h3 class="teaching-advantages__title-h3 section-name">Программа курса</h3>
      <h2 class="teaching-advantages__title-h2 section-title">Что входит в курс:</h2>
    </div>

    <div class="teaching-program__wrapper">
      <ul class="teaching-program__items">

        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">Теория наращивания нижних ресниц + правильная постановка руки</p>
        </li>

      </ul>
    </div>

  </div>
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