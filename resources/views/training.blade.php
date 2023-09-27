@extends('layout')
@section('title', __('titles.course.title'))
@section('description', __('titles.training.description'))
@section('ogTitle', __('titles.training.ogTitle'))
@section('ogDescription', __('titles.training.ogDescription'))

@section('page', 'training')


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
        <h3 class="teaching-home-page__title-h3 section-name">@lang('training.head-screen.title-h3')</h3>
        <h2 class="teaching-home-page__title-h2 section-title">@lang('training.head-screen.title-h2')</h2>
        <div class="teaching-home-page__text-wrapper">
          <p class="teaching-home-page__text">@lang('training.head-screen.text')</p>
        </div>
        <bitton class="teaching-home-page__popup" data-popup="#popup">@lang('training.head-screen.btn-text')</bitton>
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
          <h3 class="teaching-about__title-h3 section-name">@lang('training.about.title-h3')</h3>
          <h3 class="teaching-about__title-h3 section-name">@lang('training.about.title-h3-two')</h3>
        </div>

        <div class="teaching-about__title-mobile">
          <h3 class="teaching-about__title-h3 section-name">@lang('training.about.title-h3-mobile')</h3>
          <h3 class="teaching-about__title-h3 section-name">@lang('training.about.title-h3-two-mobile')</h3>
          <h3 class="teaching-about__title-h3 section-name">@lang('training.about.title-h3-three-mobile')</h3>
        </div>

        <h2 class="teaching-about__title-h2 section-title">@lang('training.about.title-h2')</h2>
        <ul class="teaching-about__items">

          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('training.about.li-one')</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('training.about.li-two')</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('training.about.li-three')</p>
          </li>
          <li class="teaching-about__item">
            <span class="teaching-about__icon icon-point"></span>
            <p class="teaching-about__text">@lang('training.about.li-four')</p>
          </li>

        </ul>
        <bitton class="teaching-about__popup">@lang('training.about.btn-text')</bitton>
      </div>

    </div>

  </div>
</section>

<section class="teaching-advantages">
  <div class="teaching-advantages__container">

    <div class="teaching-advantages__title">
      <h3 class="teaching-advantages__title-h3 section-name">@lang('training.advantages.title-h3')</h3>
      <h2 class="teaching-advantages__title-h2 section-title">@lang('training.advantages.title-h2')</h2>
    </div>

    <div class="teaching-advantages__wrapper">

      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-handClock"></div>
        <div class="teaching-advantages__text">@lang('training.advantages.li-one')</div>
      </div>
      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-rockFlower"></div>
        <div class="teaching-advantages__text">@lang('training.advantages.li-two')</div>
      </div>
      <div class="teaching-advantages__item">
        <div class="teaching-advantages__icon icon-diamond"></div>
        <div class="teaching-advantages__text">@lang('training.advantages.li-three')</div>
      </div>
    </div>
  </div>
</section>

<section class="teaching-program">
  <p class="teaching-program__decor-text">program</p>
  <div class="teaching-program__container">
    <div class="teaching-advantages__title">
      <h3 class="teaching-advantages__title-h3 section-name">@lang('training.program.title-h3')</h3>
      <h2 class="teaching-advantages__title-h2 section-title">@lang('training.program.title-h2')</h2>
    </div>

    <div class="teaching-program__wrapper">
      <ul class="teaching-program__items">

        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-one')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-two')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-three')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-four')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-five')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-six')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-seven')</p>
        </li>
        <li class="teaching-program__item">
          <span class="teaching-program__icon icon-curl"></span>
          <p class="teaching-program__text">@lang('training.program.li-eight')</p>
        </li>

      </ul>
    </div>

  </div>
</section>

<div class="linear-gradient">
  <section class="training-saloon">
    <div class="saloon__container">
      <div class="saloon__title">
        <h3 class="saloon__title-h3 section-name">@lang('home.saloon.title-h3')</h3>
        <h2 class="saloon__title-h2 section-title">@lang('home.saloon.title-h2')</h2>
      </div>
    
      <div class="saloon__wrapper">
        <div class="saloon__link">

          <div class="saloon__img">
            <img class="saloon__img" src="{{asset('img/home/ru/saloon/1.webp')}}" alt="">
          </div>
    
          {{-- <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-one-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-one-text')</p>
            </div>
          </div> --}}
        </div>
    
        <div class="saloon__link">

          <div class="saloon__img">
            <img class="saloon__img" src="{{asset('img/home/ru/saloon/2.webp')}}" alt="">
          </div>
    
          {{-- <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-two-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-two-text')</p>
            </div>
          </div> --}}
        </div>
    
        <div class="saloon__link">
          <div class="saloon__img">
            <img class="saloon__img" src="{{asset('img/training/1.webp')}}" alt="">
          </div>
    
          {{-- <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-three-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-three-text')</p>
            </div>
          </div> --}}
        </div>
    
        <div class="saloon__link">
          <div class="saloon__img">
            <img class="saloon__img" src="{{asset('img/training/2.webp')}}" alt="">
          </div>
    
          {{-- <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-four-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-four-text')</p>
            </div>
          </div> --}}
        </div>
    
        <div class="saloon__link">
          <div class="saloon__img">
            <img class="saloon__img" src="{{asset('img/training/3.webp')}}" alt="">
          </div>
          {{-- <div class="saloon__content-wrapper">
            <div class="saloon__icon icon-plusImage"></div>
            <div class="saloon__text-wrapper">
              <h4 class="saloon__content-title">@lang('home.saloon.card-five-title')</h4>
              <p class="saloon__text">@lang('home.saloon.card-five-text')</p>
            </div>
          </div> --}}
        </div>
      </div>
      <button class="saloon__btn">@lang('home.saloon.btn-text')</button>
    </div>
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