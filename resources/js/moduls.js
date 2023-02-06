// burger
if (document.querySelector(".icon-menu")) {
  document.addEventListener("click", function (e) {
    if (bodyLockStatus && e.target.closest('.icon-menu')) {
      bodyLockToggle();
      document.documentElement.classList.toggle("menu-open");
    }
  });
};

export function menuOpen() {
  bodyLock();
  document.documentElement.classList.add("menu-open");
}
export function menuClose() {
  bodyUnlock();
  document.documentElement.classList.remove("menu-open");
}

// Вспомогательные модули блокировки прокрутки и скочка ==============================================
export let bodyLockStatus = true;
export let bodyLockToggle = (delay = 500) => {
  if (document.documentElement.classList.contains('lock')) {
    bodyUnlock(delay);
  } else {
    bodyLock(delay);
  }
}
export let bodyUnlock = (delay = 500) => {
  let body = document.querySelector("body");
  if (bodyLockStatus) {
    let lock_padding = document.querySelectorAll("[data-lp]");
    setTimeout(() => {
      for (let index = 0; index < lock_padding.length; index++) {
        const el = lock_padding[index];
        el.style.paddingRight = '0px';
      }
      body.style.paddingRight = '0px';
      document.documentElement.classList.remove("lock");
    }, delay);
    bodyLockStatus = false;
    setTimeout(function () {
      bodyLockStatus = true;
    }, delay);
  }
}
export let bodyLock = (delay = 500) => {
  let body = document.querySelector("body");
  if (bodyLockStatus) {
    let lock_padding = document.querySelectorAll("[data-lp]");
    for (let index = 0; index < lock_padding.length; index++) {
      const el = lock_padding[index];
      el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    }
    body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    document.documentElement.classList.add("lock");

    bodyLockStatus = false;
    setTimeout(function () {
      bodyLockStatus = true;
    }, delay);
  }
}

// swiper =============================================================================================
// import Swiper JS
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper styles
// import 'swiper/css';

// // Инициализация слайдеров
function initSliders() {
  const swiper = new Swiper('.swiper', {
    modules: [Navigation],
    // Optional parameters
    loop: true,
    observer: true,
    observeParents: true,
    slidesPerView: 4,
    spaceBetween: 16,
    speed: 800,
    slidesPerView: 'auto',
    // slideToClickedSlide: true,
    // Кнопки "влево/вправо"
    navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next',
    },
  });
  // const enableSwiper = function () {
  //   mySwiper = new Swiper('.reviews-slider__slider', {
  //     // Подключаем модули слайдера
  //     // для конкретного случая
  //     modules: [Navigation],
  //     observer: true,
  //     observeParents: true,
  //     slidesPerView: 3,
  //     spaceBetween: 0,
  //     autoHeight: true,
  //     speed: 800,
  //     spaceBetween: 60,
  //     slidesPerView: 'auto',
  //     slideToClickedSlide: true,
  //     centeredSlides: true,
  //     watchOverflow: true,
  //     initialSlide: 1,
  //     // Кнопки "влево/вправо"
  //     navigation: {
  //       prevEl: '.swiper-button-prev',
  //       nextEl: '.swiper-button-next',
  //     },

  //     // Брейкпоинты
  //     // breakpoints: {
  //     //   545: {
  //     //     slidesPerView: 1,
  //     //   },
  //     //   1080: {
  //     //     slidesPerView: 2,
  //     //     centeredSlides: false,
  //     //   },
  //     //   1515: {
  //     //     slidesPerView: 3,
  //     //   },
  //     // },
  //   });
  // };
}
// Скролл на базе слайдера (по классу swiper_scroll для оболочки слайдера)
function initSlidersScroll() {
  let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
  if (sliderScrollItems.length > 0) {
    for (let index = 0; index < sliderScrollItems.length; index++) {
      const sliderScrollItem = sliderScrollItems[index];
      const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
      const sliderScroll = new Swiper(sliderScrollItem, {
        observer: true,
        observeParents: true,
        direction: 'vertical',
        slidesPerView: 'auto',
        freeMode: {
          enabled: true,
        },
        scrollbar: {
          el: sliderScrollBar,
          draggable: true,
          snapOnRelease: false
        },
        mousewheel: {
          releaseOnEdges: true,
        },
      });
      sliderScroll.scrollbar.updateSize();
    }
  }
}

window.addEventListener("load", function (e) {
  // Запуск инициализации слайдеров
  initSliders();
  // Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
  // initSlidersScroll();
});
