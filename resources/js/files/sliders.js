
import Swiper, { Navigation } from 'swiper';

const swiper = new Swiper('.swiper', {
  speed: 400,
  spaceBetween: 100,
});

new Swiper('.swiper', {
  modules: [Navigation],
  //observer: true,
  //observeParents: true,
  loop: true,
  slidesPerView: 4,
  slidesPerGroup: 1,
  spaceBetween: 16,
  lazyPreloadPrevNext: 1,
  simulateTouch: true,
  speed: 800,
  slidesPerView: 'auto',
  //watchOverflow: true,
  //slideToClickedSlide: true,
  centeredSlides: false,
  //lazy: {
  //      loadOnTransitionStart: true,
  //      loadPrevNext: true,
  //},

  navigation: {
    prevEl: '.swiper-button-prev',
    nextEl: '.swiper-button-next',
  },

  breakpoints: {
    320: {
      slidesPerView: 2.6,
      centeredSlides: true,
    },
    340: {
      spaceBetween: 16,
      slidesPerView: 2.6,
      centeredSlides: true,
    },
    420: {
      slidesPerView: 3,
      centeredSlides: true,
    },
    620: {
      slidesPerView: 3,
      centeredSlides: true,
    },
    680: {
      slidesPerView: 2.6,
      centeredSlides: true,
    },
    1000: {
      slidesPerView: 3,
      centeredSlides: true,
    },
    1200: {
      slidesPerView: 4,
      centeredSlides: false,
    },
  },
});

/* function initSliders() {


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
  initSliders();
}); */
