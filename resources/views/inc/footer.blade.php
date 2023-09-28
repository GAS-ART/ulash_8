@section('footer')
<footer class="footer">
  <div class="footer-top__container">
    <div class="footer__top">
      <a class="footer__logo" href="{{ route('home', ['locale' => __('lang.current')]) }}">
        @if(App::isLocale('es'))
        <img src="/img/home/es/header/logo.png" alt="">
        @elseif(App::isLocale('ru'))
        <img src="/img/home/ru/header/logo.png" alt="">
        @endif
      </a>

      <button class="footer__popup" data-popup="#popup">@lang('footer.popup')</button>

      <div class="footer__icons">
        <a href="https://www.instagram.com/ulash_bcn" target="_blank" class="footer__icon icon-instagram"></a>
        <a href="https://www.facebook.com/ulash_bcn" target="_blank" class="footer__icon icon-facebook"></a>
      </div>
    </div>
  </div>
  <div class="footer__decor-line"></div>
  <div class="footer__container">
    <div class="footer__content">
      <div class="footer__box">
        <h2 class="footer__menu-title">@lang('footer.services.title')</h2>

        <ul class="footer__menu-list">
          {{-- <li class="footer__menu-item"><a href="{{ route('service', ['locale' => __('lang.current')]) }}"
              class="footer__menu-link">@lang('footer.services.li-one')</a></li>
          <li class="footer__menu-item"><a href="{{ route('teaching', ['locale' => __('lang.current')]) }}"
              class="footer__menu-link">@lang('footer.services.li-two')</a></li> --}}
          <li class="footer__menu-item"><a href="{{-- {{ route('eyelash', ['locale' => __('lang.current')]) }} --}}"
              class="footer__menu-link">@lang('footer.services.li-three')</a></li>
          <li class="footer__menu-item"><a href="{{-- {{ route('brows', ['locale' => __('lang.current')]) }} --}}"
              class="footer__menu-link">@lang('header.nav.services.brows')</a></li>
        </ul>

      </div>

      <div class="footer__box">
        <h2 class="footer__menu-title">@lang('footer.teaching.title')</h2>

        <ul class="footer__menu-list">
          <li class="footer__menu-item"><a href="{{ route('course', ['locale' => __('lang.current')]) }}"
              class="footer__menu-link">@lang('footer.teaching.li-one')</a></li>
          <li class="footer__menu-item"><a href="{{ route('training', ['locale' => __('lang.current')]) }}"
              class="footer__menu-link">@lang('footer.teaching.li-two')</a></li>
        </ul>

      </div>

      <div class="footer__box">
        <h2 class="footer__menu-title">@lang('footer.contacts.title')</h2>
        <ul class="footer__menu-list">
          <li class="footer__menu-item">
            <a class="footer__contacts-item" href="#">
              <span class="footer__contacts-icon icon-point"></span>
              <p class="footer__contacts-address">@lang('main.address')</p>
            </a>
          </li>
          <li class="footer__menu-item">
            <a class="footer__contacts-item" href="tel:+34617051264">
              <span class="footer__contacts-icon icon-phone"></span>
              <p class="footer__contacts-phone">@lang('footer.contacts.phone')</p>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</footer>