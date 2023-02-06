/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _moduls_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./moduls.js */ "./resources/js/moduls.js");

//Переключение языков (комп и мобилка)
var languageBtn = document.querySelector('.language-btn');
languageBtn.addEventListener('click', function (e) {
  if (window.matchMedia("(pointer: coarse)").matches) {
    // Устройства со стилусом
    if (!languageBtn.classList.contains('active')) {
      e.preventDefault();
    }
    languageBtn.classList.toggle('active');
  }
});

//Прокрутка header
var headerElement = document.querySelector('.header');
function watchHeader(entries) {
  if (entries[0].isIntersecting) {
    entries[0].target.classList.remove('_scroll');
  } else {
    entries[0].target.classList.add('_scroll');
  }
}
var headerObserver = new IntersectionObserver(watchHeader);
headerObserver.observe(headerElement);

// burger
if (document.querySelector(".icon-menu")) {
  document.addEventListener("click", function (e) {
    if (_moduls_js__WEBPACK_IMPORTED_MODULE_0__.bodyLockStatus && e.target.closest('.icon-menu')) {
      (0,_moduls_js__WEBPACK_IMPORTED_MODULE_0__.bodyLockToggle)();
      document.documentElement.classList.toggle("menu-open");
    }
  });
}
;

/***/ }),

/***/ "./resources/js/moduls.js":
/*!********************************!*\
  !*** ./resources/js/moduls.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "bodyLock": () => (/* binding */ bodyLock),
/* harmony export */   "bodyLockStatus": () => (/* binding */ bodyLockStatus),
/* harmony export */   "bodyLockToggle": () => (/* binding */ bodyLockToggle),
/* harmony export */   "bodyUnlock": () => (/* binding */ bodyUnlock),
/* harmony export */   "menuClose": () => (/* binding */ menuClose),
/* harmony export */   "menuOpen": () => (/* binding */ menuOpen)
/* harmony export */ });
// бургер  ==============================================
function menuOpen() {
  bodyLock();
  document.documentElement.classList.add("menu-open");
}
function menuClose() {
  bodyUnlock();
  document.documentElement.classList.remove("menu-open");
}

// Вспомогательные модули блокировки прокрутки и скочка ==============================================
var bodyLockStatus = true;
var bodyLockToggle = function bodyLockToggle() {
  var delay = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 500;
  if (document.documentElement.classList.contains('lock')) {
    bodyUnlock(delay);
  } else {
    bodyLock(delay);
  }
};
var bodyUnlock = function bodyUnlock() {
  var delay = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 500;
  var body = document.querySelector("body");
  if (bodyLockStatus) {
    var lock_padding = document.querySelectorAll("[data-lp]");
    setTimeout(function () {
      for (var index = 0; index < lock_padding.length; index++) {
        var el = lock_padding[index];
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
};
var bodyLock = function bodyLock() {
  var delay = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 500;
  var body = document.querySelector("body");
  if (bodyLockStatus) {
    var lock_padding = document.querySelectorAll("[data-lp]");
    for (var index = 0; index < lock_padding.length; index++) {
      var el = lock_padding[index];
      el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    }
    body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    document.documentElement.classList.add("lock");
    bodyLockStatus = false;
    setTimeout(function () {
      bodyLockStatus = true;
    }, delay);
  }
};

// slider =============================================================================================
// Подключаем слайдер Swiper из node_modules
// import Swiper, { Navigation, Pagination, Autoplay, EffectFade } from 'swiper';

// import "../../scss/base/swiper.scss";

// // Инициализация слайдеров
// function initSliders() {
//   if (document.querySelector('.reviews__slider')) { // Указываем скласс нужного слайдера

//     // точка останова, где свипер будет уничтожен
//     // и переключается на двухколоночный макет
//   const breakpoint = window.matchMedia('(max-width:545px)');
//   // отслеживать экземпляры свиперов, чтобы уничтожить их позже
//   let mySwiper;
//   //===========================================================
//   const breakpointChecker = function () {
//     // при необходимости увеличения области просмотра и многорядной компоновки
//     if (breakpoint.matches === true) {
//       // очищать старые экземпляры и встраивать стили, когда это возможно
//       if (mySwiper !== undefined) {
//         mySwiper.destroy(true, true);
//       }
//       // или/и ничего не делать
//       return;
//       // else, если требуется небольшая область просмотра и одноколоночный макет
//     } else if (breakpoint.matches === false) {
//       // запуск небольшой версии свипера в режиме просмотра
//       return enableSwiper();
//     }
//   };
//   //=============================================================
//   const enableSwiper = function () {
//     mySwiper = new Swiper('.reviews__slider', {
//       // Подключаем модули слайдера
//       // для конкретного случая
//       modules: [Navigation],
//       observer: true,
//       observeParents: true,
//       slidesPerView: 3,
//       spaceBetween: 0,
//       autoHeight: true,
//       speed: 800,
//       spaceBetween: 60,
//       slidesPerView: 'auto',
//       slideToClickedSlide: true,
//       centeredSlides: true,
//       watchOverflow: true,
//       initialSlide: 1,
//       // Кнопки "влево/вправо"
//       navigation: {
//         prevEl: '.swiper-button-prev',
//         nextEl: '.swiper-button-next',
//       },

//       // Брейкпоинты
//       breakpoints: {
//         545: {
//           slidesPerView: 1,
//         },
//         1080: {
//           slidesPerView: 2,
//           centeredSlides: false,
//         },
//         1515: {
//           slidesPerView: 3,
//         },
//       },
//     });
//   };
// }
//   //==============================================================

//   // следите за изменениями размера области просмотра
//   breakpoint.addEventListener('change', breakpointChecker);
//   // kickstart
//   breakpointChecker();
// }
// // Скролл на базе слайдера (по классу swiper_scroll для оболочки слайдера)
// function initSlidersScroll() {
//   let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
//   if (sliderScrollItems.length > 0) {
//     for (let index = 0; index < sliderScrollItems.length; index++) {
//       const sliderScrollItem = sliderScrollItems[index];
//       const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
//       const sliderScroll = new Swiper(sliderScrollItem, {
//         observer: true,
//         observeParents: true,
//         direction: 'vertical',
//         slidesPerView: 'auto',
//         freeMode: {
//           enabled: true,
//         },
//         scrollbar: {
//           el: sliderScrollBar,
//           draggable: true,
//           snapOnRelease: false
//         },
//         mousewheel: {
//           releaseOnEdges: true,
//         },
//       });
//       sliderScroll.scrollbar.updateSize();
//     }
//   }
// }

// window.addEventListener("load", function (e) {
//   // Запуск инициализации слайдеров
//   initSliders();
//   // Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
//   // initSlidersScroll();
// });

/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;