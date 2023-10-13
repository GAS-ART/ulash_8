const currentLang = document.documentElement.lang;
const popupForm = document.querySelector('.popup__form');

document.addEventListener('click', documentActions);

function documentActions(e) {
   const target = e.target;
   //stopScrolling
   if (!target.classList.contains('.ancor') && scrol == true) {
      body.addEventListener('click', stopAnimation);
   }
}

function clouseBurger() {
   document.documentElement.classList.remove('menu-open');
   document.body.classList.remove('lock');
}

window.onresize = () => {
   clouseBurger();
};


$(".popup__form").submit(function (event) {
   event.preventDefault();
   $.ajax({
      type: 'POST',
      url: `${window.location.protocol}//${window.location.host}/send`,
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
         event.target.closest('.popup').classList.add('send')
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
/* const headerElement = document.querySelector('.header');

function watchHeader(entries) {
   if (entries[0].isIntersecting) {
      entries[0].target.classList.remove('_scroll')
   } else {
      entries[0].target.classList.add('_scroll')
   }

} 
const headerObserver = new IntersectionObserver(watchHeader);
headerObserver.observe(headerElement);
*/

/* const menuItems = document.querySelectorAll('.menu-item');

document.addEventListener('click', (e) => {
   // Open/close menu 
   if (!e.target.closest('.menu-item')) {
      menuItems.forEach(item => item.classList.remove('active'));
   } else {
      menuItems.forEach(item => item != e.target.closest('.menu-item') ? item.classList.remove('active') : item.classList.toggle('active'));
   }
}); */

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

//Portfolio - show more
const portfolioBody = document.querySelector('.saloon__wrapper');
if (portfolioBody) {
   const portfolioShowMoreBtn = document.querySelector('.saloon__btn');
   const portfolioData = [
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/6.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/7.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/8.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/9.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/10.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/11.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/12.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/13.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/14.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/15.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/16.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/17.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/18.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/19.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/20.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/21.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/22.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/23.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/24.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/25.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/26.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
      { src: `${window.location.protocol}//${window.location.host}/img/home/es/saloon/27.webp`, es: { title: '', text: '', }, ru: { title: '', text: '', }, },
   ];
   let portfolioDataIndex = 0;


   portfolioShowMoreBtn.addEventListener('click', portfolioSowMore);

   async function portfolioSowMore() {
      if (portfolioDataIndex < portfolioData.length) {
         const imgSrcArr = [];
         const stopCoutPortfolioData = portfolioData.length - portfolioDataIndex >= 3 ? 3 : portfolioData.length - portfolioDataIndex;
         for (let i = 0; i < stopCoutPortfolioData; i++) {
            const imgSrc = await new Promise((resolve, reject) => {
               const img = new Image();
               img.onload = () => resolve(img.src);
               img.onerror = () => portfolioShowMoreBtn.style.display = 'none';
               img.src = portfolioData[portfolioDataIndex + i].src;
            });
            imgSrcArr.push(imgSrc);
         }

         const html = imgSrcArr.map((imgSrc, index) => `
                  <div class="saloon__link">
                     <picture class="saloon__img">
                        <img src="${imgSrc}" alt="">
                     </picture>
                     <div class="saloon__content-wrapper">
                        <div class="saloon__icon icon-plusImage"></div>
                        <div class="saloon__text-wrapper">
                        <h4 class="saloon__content-title">${portfolioData[portfolioDataIndex + index][currentLang].title}</h4>
                        <p class="saloon__text">${portfolioData[portfolioDataIndex + index][currentLang].text}</p>
                        </div>
                     </div>
                  </div>
                  `).join('');
         portfolioBody.insertAdjacentHTML('beforeend', html);
         portfolioDataIndex += 3;
         if (portfolioDataIndex >= portfolioData.length) portfolioShowMoreBtn.style.display = 'none';
      }
   }
}

//scroll
let stop = false;
let scrol = false;
function stopAnimation() { stop = true; }
const scrolling = (selectorBtn) => {
   //const btnUp = document.querySelector(selectorBtn);

   const links = document.querySelectorAll(".ancor");
   let speed = 0.2;
   //const headerHeight = document.querySelector('.header__top').offsetHeight;

   /*window.addEventListener("scroll", () => {
     if (document.documentElement.scrollTop > 1600) {
       btnUp.style.opacity = "1";
     } else {
       btnUp.style.opacity = "0";
     }
   });*/

   for (let i = 0; i < links.length; i++) {
      links[i].addEventListener("click", function (event) {
         event.preventDefault();
         clouseBurger();
         //clouseBurger();
         let widthTop = Math.round(
            document.documentElement.scrollTop || document.body.scrollTop
         ),
            hash = this.hash;
         let toBlock = document.querySelector(hash).getBoundingClientRect().top /* - headerHeight */;
         let start = null;

         requestAnimationFrame(step);

         scrol = true;

         function step(time) {


            if (start === null) {
               start = time;
            }
            let progress = time - start,
               r =
                  toBlock < 0
                     ? Math.max(widthTop - progress / speed, widthTop + toBlock)
                     : Math.min(widthTop + progress / speed, widthTop + toBlock);

            let element = document.documentElement || document.body;
            element.scrollTo(0, r);

            if (r != widthTop + toBlock && !stop) {
               requestAnimationFrame(step);
            } else {
               body.removeEventListener('click', stopAnimation);
               stop = false;
               scrol = false
               // location.hash = hash;
            }
         }
      });
   }
};

scrolling(/*".pageup"*/);

//==========================================================================================================

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
