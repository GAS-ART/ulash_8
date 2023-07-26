@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))

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
        <h3 class="teaching-home-page__title-h3 section-name">@lang('teaching.head-screen.title-h3')</h3>
        <h2 class="teaching-home-page__title-h2 section-title">@lang('teaching.head-screen.title-h2')</h2>
        <div class="teaching-home-page__text-wrapper">
          <p class="teaching-home-page__text">@lang('teaching.head-screen.text')</p>
        </div>
        <bitton class="teaching-home-page__popup" data-popup="#popup">@lang('teaching.head-screen.btn-text')</bitton>
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
          <h3 class="teaching-about__title-h3 section-name">@lang('teaching.about.title-h3')</h3>
          <h3 class="teaching-about__title-h3 section-name">@lang('teaching.about.title-h3-two')</h3>
        </div>

        <div class="teaching-about__title-mobile">
          <h3 class="teaching-about__title-h3 section-name">@lang('teaching.about.title-h3-mobile')</h3>
          <h3 class="teaching-about__title-h3 section-name">@lang('teaching.about.title-h3-two-mobile')</h3>
          <h3 class="teaching-about__title-h3 section-name">@lang('teaching.about.title-h3-three-mobile')</h3>
        </div>

        <h2 class="teaching-about__title-h2 section-title">@lang('teaching.about.title-h2')</h2>
        <ul class="teaching-about__items">

          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('teaching.about.li-one')</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('teaching.about.li-two')</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('teaching.about.li-three')</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('teaching.about.li-four')</p>
          </li>

        </ul>
        <bitton class="teaching-about__popup">@lang('teaching.about.btn-text')</bitton>
      </div>

    </div>

  </div>
</section>

<section class="teaching-advantages">
  <div class="teaching-advantages__container">

    <div class="teaching-advantages__title">
      <h3 class="teaching-advantages__title-h3 section-name">@lang('teaching.advantages.title-h3')</h3>
      <h2 class="teaching-advantages__title-h2 section-title">@lang('teaching.advantages.title-h2')</h2>
    </div>

    <div class="teaching-advantages__wrapper">

      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-handClock"></div>
        <div class="teaching-advantages__text">@lang('teaching.advantages.li-one')</div>
      </div>
      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-rockFlower"></div>
        <div class="teaching-advantages__text">@lang('teaching.advantages.li-two')</div>
      </div>
      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-diamond"></div>
        <div class="teaching-advantages__text">@lang('teaching.advantages.li-three')</div>
      </div>
    </div>
  </div>
</section>

<section class="teaching-program">
  <p class="teaching-program__decor-text">program</p>
  <div class="teaching-program__container">
    <div class="teaching-advantages__title">
      <h3 class="teaching-advantages__title-h3 section-name">@lang('teaching.program.title-h3')</h3>
      <h2 class="teaching-advantages__title-h2 section-title">@lang('teaching.program.title-h2')</h2>
    </div>

    <div class="teaching-program__wrapper">
      <ul class="teaching-program__items">

        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-one')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-two')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-three')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-four')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-five')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-six')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-seven')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('teaching.program.li-eight')</p>
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