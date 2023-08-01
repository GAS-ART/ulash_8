@section('header')
<header class="header">
  <div class="header__wraper">
    <div class="header__container">
      <div class="header__options">
        <div class="header-top">
          <div class="header-top__contacts">
            <a class="header-top__contacts-item" href="#">
              <span class="header-top__contacts-icon icon-point"></span>
              <p class="header-top__contacts-address">@lang('main.address')</p>
            </a>
            <a class="header-top__contacts-item" href="tel:+34617051264">
              <span class="header-top__contacts-icon icon-phone"></span>
              <p class="header-top__contacts-phone">+34 617-05-12-64</p>
            </a>
          </div>
          <div class="header-top__links">
            <a class="header-top__contacts-icon icon-instagram" target="_blank"
              href="https://www.instagram.com/ulash_bcn"></a>
            <a class="header-top__contacts-icon icon-facebook" href="#"></a>
          </div>
        </div>
        <div class="header__menu-wrapper">
          <a class="header__logo" href="{{ route('home', ['locale' => __('lang.current')]) }}">
            @if(App::isLocale('es'))
            <img src="/img/home/es/header/logo.png" alt="">
            @elseif(App::isLocale('ru'))
            <img src="/img/home/ru/header/logo.png" alt="">
            @endif
          </a>
          <div class="header__menu">
            <nav class="header__menu-nav">
              <ul class="header__menu-list">
                <li class="header__menu-item header__menu-link menu-item">
                  @lang('header.nav.services.title')
                  <ul class="header__sub-menu-list">
                    <li class="header__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="header__sub-menu-link">@lang('header.nav.services.manicure')</a>
                    </li>
                    <li class="header__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="header__sub-menu-link">@lang('header.nav.services.pedicure')</a>
                    </li>
                    <li class="header__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="header__sub-menu-link">@lang('header.nav.services.eyelashes')</a>
                    </li>
                    <li class="header__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="header__sub-menu-link">@lang('header.nav.services.brows')</a>
                    </li>
                  </ul>
                </li>
                <li class="header__menu-item  header__menu-link menu-item">
                  @lang('header.nav.teaching.title')
                  <ul class="header__sub-menu-list">
                    <li class="header__sub-menu-item">
                      <a href="{{ route('teaching', ['locale' => __('lang.current')]) }}"
                        class="header__sub-menu-link">@lang('header.nav.teaching.base')</a>
                    </li>
                    <li class="header__sub-menu-item">
                      <a href="{{ route('teaching', ['locale' => __('lang.current')]) }}"
                        class="header__sub-menu-link">@lang('header.nav.teaching.training')</a>
                    </li>
                  </ul>
                </li>
                <li class="header__menu-item">
                  @if(Route::is('home') || Route::is('index'))
                  <a href="#reviews" class="header__menu-link ancor">@lang('header.nav.reviews')</a>
                  @else
                  <a href="{{ route('home', ['locale' => __('lang.current')]) }}#reviews"
                    class="header__menu-link">@lang('header.nav.reviews')</a>
                  @endif
                </li>
                <li class="header__menu-item"><a href="{{ route('contants', ['locale' => __('lang.current')]) }}"
                    class="header__menu-link">@lang('header.nav.contants')</a></li>
              </ul>
            </nav>
          </div>
          <button class="header__popup" data-popup='#popup'>@lang('header.nav.popup')</button>

          <div class="header__actions">
            <!--Для выпадающего списка языков-->
            <div class="header__language language-btn">
              <div class="language-btn__select">
                <a class="language-btn__link @lang('lang.current')" href="{{ route('locale', __('lang.current')) }}">
                  <div class="language-btn__text">@lang('lang.current')</div>
                  <div class="language-btn__icon @lang('lang.current')"></div>
                </a>
              </div>
              <div class="language-btn__select">
                <a class="language-btn__link" href="{{ route('locale', __('lang.another')) }}">
                  <div class="language-btn__text">@lang('lang.another')</div>
                  <div class="language-btn__icon @lang('lang.another')"></div>
                </a>
              </div>
            </div>
            <!--Для выпадающего списка языков-->
          </div>

          <!--BURGER-->
          <div class="menu__burger menu">
            <button type="button" class="menu__icon icon-menu"><span></span></button>
            <nav class="menu__body">
              <ul class="menu__list">
                <li class="menu__item header__menu-link" data-spoiler-menu>
                  <h3 data-spoiler-btn> @lang('header.nav.services.title')</h3>
                  </h3>
                  <ul class="menu__sub-menu-list spoiler-content">
                    <li class="menu__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="menu__sub-menu-link">@lang('header.nav.services.manicure')</a>
                    </li>
                    <li class="menu__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="menu__sub-menu-link">@lang('header.nav.services.pedicure')</a>
                    </li>
                    <li class="menu__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="menu__sub-menu-link">@lang('header.nav.services.eyelashes')</a>
                    </li>
                    <li class="menu__sub-menu-item">
                      <a href="{{ route('service', ['locale' => __('lang.current')]) }}"
                        class="menu__sub-menu-link">@lang('header.nav.services.brows')</a>
                    </li>
                  </ul>
                </li>
                <li class="menu__item header__menu-link" data-spoiler-menu>
                  <h3 data-spoiler-btn> @lang('header.nav.teaching.title')</h3>
                  <ul class="menu__sub-menu-list spoiler-content">
                    <li class="menu__sub-menu-item">
                      <a href="{{ route('teaching', ['locale' => __('lang.current')]) }}"
                        class="menu__sub-menu-link">@lang('header.nav.teaching.base')</a>
                    </li>
                    <li class="menu__sub-menu-item">
                      <a href="{{ route('teaching', ['locale' => __('lang.current')]) }}"
                        class="menu__sub-menu-link">@lang('header.nav.teaching.training')</a>
                    </li>
                  </ul>
                </li>
                <li class="menu__item header__menu-link">
                  @if(Route::is('home') || Route::is('index'))
                  <a href="#reviews" class="menu__sub-menu-link ancor">@lang('header.nav.reviews')</a>
                  @else
                  <a href="{{ route('home', ['locale' => __('lang.current')]) }}#reviews"
                    class="menu__sub-menu-link">@lang('header.nav.reviews')</a>
                  @endif
                </li>
                <li class="menu__item header__menu-link">
                  <a href="{{ route('contants', ['locale' => __('lang.current')]) }}"
                    class="menu__sub-menu-link">@lang('header.nav.contants')</a>
                </li>
              </ul>
            </nav>
          </div>
          <!--BURGER-->

        </div>

      </div>

    </div>
  </div>
</header>