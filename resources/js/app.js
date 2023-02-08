
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

const headerObserver = new IntersectionObserver(watchHeader);
headerObserver.observe(headerElement);

// Включить/выключить FLS (Full Logging System) (в работе)
window['FLS'] = true;

// Подключение основного файла стилей
import "../scss/style.scss";


import * as flsFunctions from "./files/functions.js";

flsFunctions.menuInit();
/* Учет плавающей панели на мобильных устройствах при 100vh */
// flsFunctions.fullVHfix();

// Модуль работы со спойлерами
flsFunctions.spollers();

import './libs/popup.js'

import * as flsForms from "./files/forms/forms.js";

/* Работа с полями формы */
/* Документация: https://template.fls.guru/template-docs/rabota-s-formami.html */
/*
flsForms.formFieldsInit({
   viewPass: false,
   autoHeight: false
});
*/

import "./files/sliders.js";


// Функции работы скроллом
import * as flsScroll from "./files/scroll/scroll.js";

import "./files/script.js";
