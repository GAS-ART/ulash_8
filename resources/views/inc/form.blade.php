<div class="form__container form">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__text">
        <h3 class="popup__title-h3 section-name">@lang('popup.title-h3')</h3>
        <h2 class="popup__title-h2 section-title">@lang('popup.title-h2')</h2>
      </div>
      <form class="popup__form @lang('lang.current') page" action="#" method="post">
        @csrf
        <div class="popup__form-block">
          <div class="popup__form-box">
            <div>
              <input class="popup__name" placeholder="@lang('popup.name')" tabindex="1" name="name" type="text" />
              <p class="name-error"></p>
            </div>
            <div>
              <input class="popup__phone" placeholder="@lang('popup.phone')" tabindex="2" name="phone" />
              <p class="phone-error"></p>
            </div>
            <input class="popup__email" placeholder="@lang('popup.mail')" tabindex="3" name="email" type="text" />
          </div>

          <div class="popup__form-box">
            <select class="popup__select" name="service" tabindex="4">
              <option value=""></option>
              <option value="Масаж">@lang('popup.option-one')</option>
              <option value="Спортзал">@lang('popup.option-two')</option>
            </select>

            <textarea class="popup__textarea" placeholder="@lang('popup.textarea')" name="text" tabindex="5"></textarea>
          </div>
        </div>

        <div class="popup__button-wrapper">
          <button class="popup__button" type="submit">@lang('popup.btn')</button>
        </div>

      </form>
    </div>
  </div>
</div>