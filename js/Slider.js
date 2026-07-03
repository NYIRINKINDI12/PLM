document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".hero-slider .slide");
  let current = 0;
  const intervalTime = 5000; // 5 seconds
  let slideInterval;

  // Show a specific slide
  const showSlide = (index) => {
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === index);
    });
  };

  // Move to the next slide
  const nextSlide = () => {
    current = (current + 1) % slides.length;
    showSlide(current);
  };

  // Auto-play
  const startAutoPlay = () => {
    slideInterval = setInterval(nextSlide, intervalTime);
  };

  const stopAutoPlay = () => {
    clearInterval(slideInterval);
  };

  // Initialize slider
  showSlide(current);
  startAutoPlay();

  // Pause on hover
  const heroSlider = document.querySelector(".hero-slider");
  if (heroSlider) {
    heroSlider.addEventListener("mouseenter", stopAutoPlay);
    heroSlider.addEventListener("mouseleave", startAutoPlay);

    // Touch swipe support
    let startX = 0;
    heroSlider.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
    });
    heroSlider.addEventListener("touchend", (e) => {
      const endX = e.changedTouches[0].clientX;
      if (startX - endX > 50) nextSlide(); // swipe left
      if (endX - startX > 50) {           // swipe right
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
      }
    });
  }
});
