// СЛАЙДЕР
const sliders = document.querySelectorAll('.slider');
sliders.forEach((slider) => {
  const slides = slider.querySelectorAll('.slide');
  const leftArrow = slider.querySelector('.arrow.left');
  const rightArrow = slider.querySelector('.arrow.right');
  let currentSlide = 0;
  leftArrow.addEventListener('click', () => {
    currentSlide--;
    if (currentSlide < 0) {
      currentSlide = slides.length - 1;
    }
    updateSlide(slider);
  });
  rightArrow.addEventListener('click', () => {
    currentSlide++;
    if (currentSlide >= slides.length) {
      currentSlide = 0;
    }
    updateSlide(slider);
  });
  function updateSlide(slider) {
    const slides = slider.querySelectorAll('.slide');
    slides.forEach((slide) => {
      slide.classList.remove('active');
    });
    slides[currentSlide].classList.add('active');
  }
  updateSlide(slider);
});