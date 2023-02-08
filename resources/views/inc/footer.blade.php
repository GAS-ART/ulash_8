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

      <button class="footer__popup">Готовы довериться профессионалам? <span>Оставьте заявку</span></button>

      <div class="footer__icons">
        <div class="footer__icon icon-instagram"></div>
        <div class="footer__icon icon-facebook"></div>
      </div>
    </div>
  </div>
  <div class="footer__decor-line"></div>
  <div class="footer__container">
    <div class="footer__content">
      <div class="footer__box">
        <a href="{{ route('service', ['locale' => __('lang.current')]) }}" class="footer__menu-title">Услуги</a>

        <ul class="footer__menu-list">
          <li class="footer__menu-item"><a href="{{ route('service', ['locale' => __('lang.current')]) }}" class="footer__menu-link">Ногтевой сервис</a></li>
          <li class="footer__menu-item"><a href="{{ route('teaching', ['locale' => __('lang.current')]) }}" class="footer__menu-link">Ресницы</a></li>
          <li class="footer__menu-item"><a href="{{ route('reviews', ['locale' => __('lang.current')]) }}" class="footer__menu-link">Брови</a></li>
          <li class="footer__menu-item"><a href="{{ route('contants', ['locale' => __('lang.current')]) }}" class="footer__menu-link">Депиляция и шугаринг</a></li>
        </ul>

      </div>

      <div class="footer__box">
        <a href="{{ route('teaching', ['locale' => __('lang.current')]) }}" class="footer__menu-title">Обучение</a>

        <ul class="footer__menu-list">
          <li class="footer__menu-item"><a href="{{ route('service', ['locale' => __('lang.current')]) }}" class="footer__menu-link">Базовый курс ресницы</a></li>
          <li class="footer__menu-item"><a href="{{ route('teaching', ['locale' => __('lang.current')]) }}" class="footer__menu-link">Повышение квалификации по наращиванию</a></li>
          <li class="footer__menu-item"><a href="{{ route('reviews', ['locale' => __('lang.current')]) }}" class="footer__menu-link">Курс по наращиванию нижних ресниц и декорирования</a></li>
        </ul>

      </div>

      <div class="footer__box">
        <a href="{{ route('service', ['locale' => __('lang.current')]) }}" class="footer__menu-title">Контакты</a>

        <ul class="footer__menu-list">
          <li class="footer__menu-item">
            <a class="footer__contacts-item" href="#">
              <span class="footer__contacts-icon icon-point"></span>
              <p class="footer__contacts-address">Barselona, adress adress</p>
            </a>
          </li>
          <li class="footer__menu-item">
            <a class="footer__contacts-item" href="tel:+34617051264">
              <span class="footer__contacts-icon icon-phone"></span>
              <p class="footer__contacts-phone">+34 617-05-12-64</p>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</footer>