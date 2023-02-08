@section('popup')
<div id="popup" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__close" data-close></div>
      <div class="popup__text">
        <h3 class="popup__title-h3 section-name">Оставить заявку</h3>
        <h2 class="popup__title-h2 section-title">ВЫБРАЛИ НУЖНУЮ ВАМ УСЛУГУ?</h2>
      </div>
      <form class="popup__form" action="#" method="post" enctype="multipart/form-data">

        <div class="popup__form-block">
          <div class="popup__form-box">
            <input class="popup__name" placeholder="Ваше имя*" tabindex="1" name="username" type="text" />
            <input class="popup__phone" placeholder="Номер телефона *" tabindex="2" name="userphone" type="tel:+34617051264" />
            <input class="popup__email" placeholder="Email" tabindex="3" name="email" type="text" />
          </div>

          <div class="popup__form-box">
            <select class="popup__select" placeholder="Ваше имя*" name="services" tabindex="4">
              <option value="от 18 до 25" selected>Выберете услугу</option>
              <option value="от 25 до 45">Масаж</option>
              <option value="от 45">Спортзал</option>
            </select>

            <textarea class="popup__textarea" placeholder="Комментарий" name="message" tabindex="5"></textarea>
          </div>
        </div>

        <div class="popup__button-wrapper">
          <button class="popup__button" type="submit">Оставить заявку</button>
        </div>

      </form>
    </div>
  </div>
</div>