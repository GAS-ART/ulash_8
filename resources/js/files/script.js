const readMoreBtn = document.querySelector('.read-more__btn');
const readMoreText = document.querySelector('.read-more__text');

document.addEventListener('click', e =>{
  const target = e.target;

  if (target == readMoreBtn) {
    readMoreText.classList.toggle('read-more__text-full').slideToggle(300);
  }
});