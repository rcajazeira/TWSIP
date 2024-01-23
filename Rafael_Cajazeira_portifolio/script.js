const carouselItems = document.querySelectorAll('.carousel-item');
const carouselNextButton = document.querySelector('.carousel-next');
const carouselPreviousButton = document.querySelector('.carousel-previous');
let currentItem = 0;
let intervalId;

function showSlide(n) {
  carouselItems[currentItem].classList.remove('active');
  currentItem = (n + carouselItems.length) % carouselItems.length;
  carouselItems[currentItem].classList.add('active');
}

function nextSlide() {
  showSlide(currentItem + 1);
}

function previousSlide() {
  showSlide(currentItem - 1);
}

function startCarousel() {
  intervalId = setInterval(nextSlide, 3000); // Intervalo de 3 segundos
}

function stopCarousel() {
  clearInterval(intervalId);
}

carouselNextButton.addEventListener('click', () => {
  nextSlide();
});

carouselPreviousButton.addEventListener('click', () => {
  previousSlide();
});

carouselItems.forEach((item) => {
  item.addEventListener('click', () => {
    stopCarousel();
  });
});

startCarousel();