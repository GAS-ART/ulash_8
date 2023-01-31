console.log('.test 22');

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
