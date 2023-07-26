@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))

@section('page', 'home')


@section('content')
<!-- <div id="map"></div> -->
<iframe id="myMap"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.521602676732!2d-85.78990368496162!3d38.271750979690235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8869e0af648051a7%3A0x67c7df546d0e8e8c!2sChurchill%20Downs!5e0!3m2!1sen!2sus!4v1616189963388!5m2!1sen!2sus"
  width="100%" height="660" style="border:0;" allowfullscreen="" loading="lazy" style="filter: grayscale(100%);"
  frameborder="0"></iframe>

<div class="contacts__container contacts">
  <div class="contacts__wrapper">
    <div class="contacts__content">
      <div class="popup__text">
        <h3 class="popup__title-h3 section-name">@lang('contacts.title-h3')</h3>
        <h2 class="popup__title-h2 section-title">@lang('contacts.title-h2')</h2>
        <ul class="footer__menu-list">
          <li class="footer__menu-item">
            <a class="footer__contacts-item" href="#">
              <span class="footer__contacts-icon icon-point"></span>
              <p class="footer__contacts-address">@lang('contacts.adress-link')</p>
            </a>
          </li>
          <li class="footer__menu-item">
            <a class="footer__contacts-item" href="tel:+34617051264">
              <span class="footer__contacts-icon icon-phone"></span>
              <p class="footer__contacts-phone">@lang('contacts.phone-link')</p>
            </a>
          </li>
        </ul>
      </div>
      <form class="popup__form @lang('lang.current') page" action="#" method="post">
        @csrf
        <div class="popup__form-block">
          <div class="popup__form-box">
            <div>
              <input class="popup__name" placeholder="@lang('contacts.name')" tabindex="1" name="name" type="text" />
              <p class="name-error"></p>
            </div>
            <div class="contacts__phon-mail">
              <div>
                <input class="popup__phone" placeholder="@lang('contacts.phone')" tabindex="2" name="phone" />
                <p class="phone-error"></p>
              </div>
              <input class="popup__email" placeholder="@lang('contacts.mail')" tabindex="3" name="email" type="text" />
            </div>
            <div>
              <textarea class="popup__textarea" placeholder="@lang('contacts.textarea')" name="text"
                tabindex="5"></textarea>
            </div>
          </div>
        </div>

        <div class="popup__button-wrapper">
          <button class="popup__button" type="submit">@lang('contacts.btn')</button>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection