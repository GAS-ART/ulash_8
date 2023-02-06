import { menuOpen, menuClose, bodyLockStatus, bodyLockToggle, bodyUnloc, bodyLock } from "./moduls.js";
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

// burger
if (document.querySelector(".icon-menu")) {
  document.addEventListener("click", function (e) {
    if (bodyLockStatus && e.target.closest('.icon-menu')) {
      bodyLockToggle();
      document.documentElement.classList.toggle("menu-open");
    }
  });
};