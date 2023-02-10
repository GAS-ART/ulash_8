// read more
const readMoreText = document.querySelector('.read-more__text');
const readMoreBtn = document.querySelector('.read-more__btn');

document.addEventListener('click', e =>{
  const target = e.target;

  if (target == readMoreBtn) {
    readMoreText.classList.toggle('read-more__text-full');
  }
});