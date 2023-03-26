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
          <h4 class="saloon__content-title">@lang('home.saloon.card-five-title')</h4>
          <p class="saloon__text">@lang('home.saloon.card-five-text')</p>
        </div>
      </div>
    </div>
  </div>
  <button class="saloon__btn">@lang('home.saloon.btn-text')</button>
</div>