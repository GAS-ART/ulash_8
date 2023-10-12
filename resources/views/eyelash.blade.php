@extends('layout')
@section('title', __('titles.eyelash.title'))
@section('description', __('titles.eyelash.description'))
@section('ogTitle', __('titles.eyelash.ogTitle'))
@section('ogDescription', __('titles.eyelash.ogDescription'))

@section('page', 'eyelash')

@section('content')
<section class="services-home-page">

  <div class="services-home-page__img-wrapper">
    <div class="services-home-page__img">
      <img src="/img/eyelash/1.webp" alt="">
    </div>
  </div>

  <div class="services-home-page__container">
    <div class="services-home-page__wrapper">

      <div class="services-home-page__box">
        <h3 class="services-home-page__title-h3 section-name">@lang('eyelash.head-screen.title-h3')</h3>
        <h2 class="services-home-page__title-h2 section-title">@lang('eyelash.head-screen.title-h2')</h2>
        <div class="services-home-page__text-wrapper">
          <p class="services-home-page__text">@lang('eyelash.head-screen.text')</p>
        </div>
        <button class="services-home-page__popup" data-popup="#popup">@lang('eyelash.head-screen.btn-text')</button>
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
          <h4 class="services-price__title">@lang('eyelash.price.sect-one.title')</h4>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-one.li-one')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-one.li-two')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-one.li-three')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-one.li-four')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-one.li-five')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-one.li-six')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-one.li-seven')</p>
            <span class="services-price__price">10 €</span>
          </li>

        </ul>

        <ul class="services-price__list">
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-two.li-one')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-two.li-two')</p>
            <span class="services-price__price">10 €</span>
          </li>
        </ul>


      </div>

      <div class="services-price__box">

        <ul class="services-price__list">
          <h4 class="services-price__title">@lang('eyelash.price.sect-three.title')</h4>
          {{-- <p class="services-price__description">@lang('eyelash.price.sect-three.description')</p> --}}
          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-one')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-two')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-three')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-four')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-five')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-six')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-seven')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-eight')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('eyelash.price.sect-three.li-nine')</p>
            <span class="services-price__price">10 €</span>
          </li>
        </ul>
      </div>

    </div>

    {{-- <button class="services-price__btn">@lang('eyelash.price.btn-text')</button> --}}
  </div>
</section>


{{-- <section class="services-types">
  <p class="services-types__decor-text">types</p>
  <div class="services-types__container">
    <div class="services-types__wrapper">

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">@lang('eyelash.types.sect-one.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('eyelash.types.sect-one.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('eyelash.types.sect-one.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('eyelash.types.sect-one.btn-text')</bitton>
        </div>

      </div>

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">@lang('eyelash.types.sect-two.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('eyelash.types.sect-two.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('eyelash.types.sect-two.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('eyelash.types.sect-two.btn-text')</bitton>
        </div>

      </div>

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">@lang('eyelash.types.sect-three.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('eyelash.types.sect-three.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('eyelash.types.sect-three.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('eyelash.types.sect-three.btn-text')</bitton>
        </div>

      </div>

      <div class="services-types__box">

        @if(App::isLocale('es'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>

        @elseif(App::isLocale('ru'))
        <picture class="services-types__img">
          <source type="image/webp" media="(min-width:650px)" srcset="/img/home/es/services-page/services-types/1.webp">
          <source type="image/webp" media="(min-width:320px)"
            srcset="/img/home/es/services-page/mobile/services-types/1.webp">
          <img src="/img/home/es/services-page/services-types/1.jpg" alt="">
        </picture>
        @endif


        <div class="services-types__content">
          <h3 class="services-types__title-h3 section-name">@lang('eyelash.types.sect-four.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('eyelash.types.sect-four.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('eyelash.types.sect-four.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('eyelash.types.sect-four.btn-text')</bitton>
        </div>
      </div>
    </div>
  </div>
</section> --}}

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