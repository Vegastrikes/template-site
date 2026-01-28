document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.getElementById('home_hero_carousel');
  const prevBtn = document.getElementById('home_hero_prev');
  const nextBtn = document.getElementById('home_hero_next');
  
  let slides = Array.from(carousel.children);

  let isTransitioning = false;

  const firstClone = slides[0].cloneNode(true);
  const lastClone = slides[slides.length - 1].cloneNode(true);

  carousel.appendChild(firstClone);
  carousel.insertBefore(lastClone, slides[0]);

  slides = Array.from(carousel.children);

  let currentTranslate = 0
  let currentIndex = 1;

  setPositionByIndex();

  let intervalTime = 3000;
  let resetIntervalTime = 15000;
  let autoSlide = setInterval(() => {
    currentIndex++;
    updateCarousel();
  }, intervalTime);

  function resetInterval() {
    clearInterval(autoSlide);
    autoSlide = setInterval(() => {
      currentIndex++;
      updateCarousel();
    }, resetIntervalTime);
  }

  function setSliderPosition(instant = false) {
    if (!instant) {
      carousel.style.transition = 'transform 0.3s ease-out';
    }
    carousel.style.transform = `translateX(${currentTranslate}px)`;
    // carousel.style.transform = `translateX(${0}px)`;
  }

  function setPositionByIndex(instant = false) {
    currentTranslate = currentIndex * -carousel.offsetWidth;
    setSliderPosition(instant);
  }

  nextBtn.addEventListener('click', () => {
    if (isTransitioning) return;
    currentIndex = currentIndex + 1;
    updateCarousel();
    resetInterval();
  });

  prevBtn.addEventListener('click', () => {
    if (isTransitioning) return;
    currentIndex = currentIndex - 1;
    updateCarousel();
    resetInterval();
  });

  function updateCarousel() {
    if (isTransitioning) return;
    isTransitioning = true;
    setPositionByIndex();

    carousel.addEventListener('transitionend', () => {
      isTransitioning = false;
      carousel.style.transition = 'none';

      const totalSlides = slides.length;
      if (currentIndex === totalSlides - 1) {
        carousel.classList.remove('transition-transform', 'duration-300', 'ease-out');
        currentIndex = 1;
        setPositionByIndex(true)
        carousel.classList.add('transition-transform', 'duration-300', 'ease-out');
      } else if (currentIndex === 0) {
        carousel.classList.remove('transition-transform', 'duration-300', 'ease-out');
        currentIndex = totalSlides - 2;
        setPositionByIndex(true)
        carousel.classList.add('transition-transform', 'duration-300', 'ease-out');
      }
    }, { once: true });
  }

  window.addEventListener('resize', setPositionByIndex);
});
