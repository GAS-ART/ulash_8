@extends('layout')
@section('title', __('titles.brows.title'))
@section('description', __('titles.brows.description'))
@section('ogTitle', __('titles.brows.ogTitle'))
@section('ogDescription', __('titles.brows.ogDescription'))

@section('page', 'brows')

@section('content')
<section class="services-home-page">

  <div class="services-home-page__img-wrapper">
    <div class="services-home-page__img">
      <img src="/img/brows/1.webp" alt="">
    </div>
  </div>

  <div class="services-home-page__container">
    <div class="services-home-page__wrapper">

      <div class="services-home-page__box">
        <h3 class="services-home-page__title-h3 section-name">@lang('brows.head-screen.title-h3')</h3>
        <h2 class="services-home-page__title-h2 section-title">@lang('brows.head-screen.title-h2')</h2>
        <div class="services-home-page__text-wrapper">
          <p class="services-home-page__text">@lang('brows.head-screen.text')</p>
        </div>
        <bitton class="services-home-page__popup">@lang('brows.head-screen.btn-text')</bitton>
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
          <h4 class="services-price__title">@lang('brows.price.sect-one.title')</h4>

          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-one.li-one')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-one.li-two')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-one.li-three')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-one.li-four')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-one.li-five')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-one.li-six')</p>
            <span class="services-price__price">10 €</span>
          </li>

        </ul>

       {{--  <ul class="services-price__list">
          <h4 class="services-price__title">@lang('brows.price.sect-two.title')</h4>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-two.li-one')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-two.li-two')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-two.li-three')</p>
            <span class="services-price__price">10 €</span>
          </li>
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-two.li-four')</p>
            <span class="services-price__price">10 €</span>
          </li>

        </ul> --}}


      </div>

      <div class="services-price__box">

        <ul class="services-price__list">
          <h4 class="services-price__title">@lang('brows.price.sect-three.title')</h4>
          {{-- <p class="services-price__description">@lang('brows.price.sect-three.description')</p> --}}
          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-three.li-one')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-three.li-two')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-three.li-three')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-three.li-four')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-three.li-five')</p>
            <span class="services-price__price">10 €</span>
          </li>

          <li class="services-price__item">
            <p class="services-price__text">@lang('brows.price.sect-three.li-six')</p>
            <span class="services-price__price">10 €</span>
          </li>
        </ul>
      </div>

    </div>

    {{-- <button class="services-price__btn">@lang('brows.price.btn-text')</button> --}}
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
          <h3 class="services-types__title-h3 section-name">@lang('brows.types.sect-one.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('brows.types.sect-one.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('brows.types.sect-one.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('brows.types.sect-one.btn-text')</bitton>
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
          <h3 class="services-types__title-h3 section-name">@lang('brows.types.sect-two.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('brows.types.sect-two.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('brows.types.sect-two.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('brows.types.sect-two.btn-text')</bitton>
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
          <h3 class="services-types__title-h3 section-name">@lang('brows.types.sect-three.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('brows.types.sect-three.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('brows.types.sect-three.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('brows.types.sect-three.btn-text')</bitton>
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
          <h3 class="services-types__title-h3 section-name">@lang('brows.types.sect-four.title-h3')</h3>
          <h2 class="services-types__title-h2 section-title">@lang('brows.types.sect-four.title-h2')</h2>
          <div class="services-types__text-wrapper">
            <p class="services-types__text">@lang('brows.types.sect-four.text')</p>
          </div>
          <bitton class="services-home-page__popup">@lang('brows.types.sect-four.btn-text')</bitton>
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
    <p class="spollers__decor-text">FAQ</p>
<div class="spollers__container">
  <h2 class="spollers__title-h2 section-title">@lang('brows.spollers.title')</h2>

  <div class="spollers__wrapper">

    <div class="spollers__box">

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-one')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-one')</div>
      </div>

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-two')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-two')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-three')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-three')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-four')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-four')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-nine')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">
          @lang('brows.spollers.content-nine')
        </div>
      </div>

    </div>

    <div class="spollers__box">

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-five')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-five')</div>
      </div>

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-six')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-six')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-seven')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-seven')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-eight')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-eight')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-ten')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">
          @lang('brows.spollers.content-ten')
        </div>
      </div>
    </div>

  </div>
</div>
  </section>
</div>

<section class="services-spollers-mobile">
  <p class="spollers__decor-text">FAQ</p>
<div class="spollers__container">
  <h2 class="spollers__title-h2 section-title">@lang('brows.spollers.title')</h2>

  <div class="spollers__wrapper">

    <div class="spollers__box">

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-one')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-one')</div>
      </div>

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-two')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-two')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-three')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-three')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-four')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-four')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-nine')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">
          @lang('brows.spollers.content-nine')
        </div>
      </div>

    </div>

    <div class="spollers__box">

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-five')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-five')</div>
      </div>

      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-six')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-six')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-seven')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-seven')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-eight')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">@lang('brows.spollers.content-eight')</div>
      </div>
      <div class="spollers__item" data-spollers>
        <button type="button" data-spoller class="spollers__title">
          <p class="spollers__text">@lang('brows.spollers.spoller-ten')</p>
          <span class="spollers__icon icon-plusSpoiler"></span>
        </button>
        <div class="spollers__body">
          @lang('brows.spollers.content-ten')
        </div>
      </div>
    </div>

  </div>
</div>
</section>

<section class="services-form">
  @include('inc.form')
</section>

@endsection