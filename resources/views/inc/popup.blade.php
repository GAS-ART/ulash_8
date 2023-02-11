@section('popup')
<div id="popup" aria-hidden="true" class="popup form">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__close" data-close></div>
      <div class="popup__text">
        <h3 class="popup__title-h3 section-name">Оставить заявку</h3>
        <h2 class="popup__title-h2 section-title">ВЫБРАЛИ НУЖНУЮ ВАМ УСЛУГУ?</h2>
      </div>
      <form class="popup__form @lang('lang.current')" action="#" method="post">
      @csrf
        <div class="popup__form-block">
          <div class="popup__form-box">
            <div>
              <input class="popup__name" placeholder="Ваше имя*" tabindex="1" name="name" type="text" />
              <p class="name-error"></p>
            </div>
            <div>
              <input class="popup__phone" placeholder="Номер телефона *" tabindex="2" name="phone"/>
              <p class="phone-error"></p>
            </div>
            <input class="popup__email" placeholder="Email" tabindex="3" name="email" type="text" />
          </div>

          <div class="popup__form-box">
            <select class="popup__select" name="service" tabindex="4">
              <option value=""></option>
              <option value="Масаж">Масаж</option>
              <option value="Спортзал">Спортзал</option>
            </select>

            <textarea class="popup__textarea" placeholder="Комментарий" name="text" tabindex="5"></textarea>
          </div>
        </div>

        <div class="popup__button-wrapper">
          <button class="popup__button" type="submit">Оставить заявку</button>
        </div>

      </form>
    </div>
  </div>
</div>