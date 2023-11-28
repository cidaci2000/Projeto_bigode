let currentSlide = 0;
const slideWidth = document.querySelector('.slider-container').clientWidth;

function nextSlide() {
  currentSlide++;
  if (currentSlide > 2) {
    currentSlide = 0;
  }
  updateSlide();
}

function previousSlide() {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = 2;
  }
  updateSlide();
}

function updateSlide() {
  const slideContainer = document.querySelector('.slider-container');
  slideContainer.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
}

setInterval(nextSlide, 5000);
