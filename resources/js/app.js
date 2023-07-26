const popupForm = document.querySelector('.popup__form');

$(".popup__form").submit(function (event) {
   event.preventDefault();
   $.ajax({
      type: 'POST',
      url: 'http://localhost:3000/send',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function () {
         event.target.querySelector('.popup__name').classList.remove("error");
         event.target.querySelector('.name-error').innerText = '';
         event.target.querySelector('.popup__phone').classList.remove("error");
         event.target.querySelector('.phone-error').innerText = '';
         $(event.target)[0].reset();
         event.target.closest('.form').classList.add('send')
      },
      error: function (err) {
         if (event.target.classList.contains('es')) {
            if (err?.responseJSON?.errors?.name) {
               event.target.querySelector('.popup__name').classList.add("error")
               let text = err.responseJSON.errors.name[0]
               if (text == 'Не заполнено поле "ВАШЕ ИМЯ"') {
                  event.target.querySelector('.name-error').innerText = 'El campo Nombre no esta rellenado';
               } else if (text == 'Поле "ИМЯ" не может содержать цифры') {
                  event.target.querySelector('.name-error').innerText = 'Campo "Nombre" no puede contener los números';
               } else if (text == 'Поле "ИМЯ" должно содержать 2 или больше символов') {
                  event.target.querySelector('.name-error').innerText = 'Campo "Nombre" Debe contener 2 o mas simbolos';
               } else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                  event.target.querySelector('.name-error').innerText = 'Campo "Nombre" no puede contener mas de 80 simbolos';
               }
            } else {
               event.target.querySelector('.popup__name').classList.remove("error");
               event.target.querySelector('.name-error').innerText = '';
            }
            if (err?.responseJSON?.errors?.phone) {
               event.target.querySelector('.popup__phone').classList.add("error")
               let text = err.responseJSON.errors.phone[0]
               if (text == 'Не заполнено поле "Номер телефона"') {
                  event.target.querySelector('.phone-error').innerText = 'El campo no esta rellenado telefono';
               } else if (text == 'Не верный формат номера телефона') {
                  $event.target.querySelector('.phone-error').innerText = 'El campo no esta rellenado telefono';
               }
            } else {
               event.target.querySelector('.popup__phone').classList.remove("error");
               event.target.querySelector('.phone-error').innerText = '';
            }
         } else {
            if (err.responseJSON.errors.name) {
               event.target.querySelector('.popup__name').classList.add("error")
               event.target.querySelector('.name-error').innerText = err.responseJSON.errors.name[0]
            } else {
               event.target.querySelector('.popup__name').classList.remove("error");
               event.target.querySelector('.name-error').innerText = '';
            }
            if (err.responseJSON.errors.phone) {
               event.target.querySelector('.popup__phone').classList.add("error")
               event.target.querySelector('.phone-error').innerText = err.responseJSON.errors.phone[0]
            } else {
               event.target.querySelector('.popup__phone').classList.remove("error");
               event.target.querySelector('.phone-error').innerText = '';
            }
         }
      }
   });
});

//Стилизация Select
let placeholderText = 'Выберету услугу';
if (popupForm.classList.contains('es')) {
   placeholderText = 'Elige el servicio';
}
$('.popup__select').select2({
   placeholder: placeholderText,
   minimumResultsForSearch: -1,
});

//Переключение языков (комп и мобилка)
const languageBtn = document.querySelector('.language-btn');
languageBtn.addEventListener('click', function (e) {
   if (window.matchMedia("(pointer: coarse)").matches) { // Устройства со стилусом
      if (!languageBtn.classList.contains('active')) {
         e.preventDefault()
      }
      languageBtn.classList.toggle('active');
   }
});


//Прокрутка header
const headerElement = document.querySelector('.header');

function watchHeader(entries) {
   if (entries[0].isIntersecting) {
      entries[0].target.classList.remove('_scroll')
   } else {
      entries[0].target.classList.add('_scroll')
   }

}

const menuItems = document.querySelectorAll('.menu-item');

document.addEventListener('click', (e) => {
   /* Open/close menu */
   if (!e.target.closest('.menu-item')) {
      menuItems.forEach(item => item.classList.remove('active'));
   } else {
      menuItems.forEach(item => item != e.target.closest('.menu-item') ? item.classList.remove('active') : item.classList.toggle('active'));
   }
});

/* // Open menu in burger
const burgerMenuItems = document.querySelectorAll('[data-spoiler-menu]');
let marginHeight = 0;
burgerMenuItems.forEach(item => {
   const subList = item.querySelector('ul');
   const subListItems = subList.querySelectorAll('li');
   subListItems.forEach(item => marginHeight += 10);
   const subListHeight = subList.offsetHeight + marginHeight - 10;

   marginHeight = 0;
   subList.style.height = `0px`;
   const menuTitle = item.querySelector('[data-spoiler-btn]');
   menuTitle.addEventListener('click', (e) => {
      e.stopPropagation();
      subList.style.height == '0px' ? subList.style.height = `${subListHeight}px` : subList.style.height = `0px`
      burgerMenuItems.forEach(item => {
         console.log(e.target.closest('[data-spoiler-menu]') != item);
         if (e.target.closest('[data-spoiler-menu]') != item) {
            item.classList.remove('active');
            const currentSubList = item.querySelector('ul');
            currentSubList.style.height = `0px`;
         }
      });
      item.classList.toggle('active');
   });
}); */

$(document).ready(function () {
   $('[data-spoiler-btn]').click(function () {
      $(this).siblings('.spoiler-content').slideToggle();
   });
});

//==========================================================================================================
const headerObserver = new IntersectionObserver(watchHeader);
headerObserver.observe(headerElement);

// Включить/выключить FLS (Full Logging System) (в работе)
window['FLS'] = true;

// Подключение основного файла стилей
import "../scss/style.scss";
import * as flsFunctions from "./files/functions.js";

flsFunctions.menuInit();

/* Учет плавающей панели на мобильных устройствах при 100vh */
flsFunctions.fullVHfix();

// Модуль работы со спойлерами
flsFunctions.spollers();

import './libs/popup.js'
import "./files/sliders.js";
import "./files/script.js";
