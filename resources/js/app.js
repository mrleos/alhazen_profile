import './bootstrap';


// tutor section
document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.querySelector('.tutor-carousel');
  const cards = document.querySelectorAll('.tutor-card');
  const prevButton = document.getElementById('prevTutor');
  const nextButton = document.getElementById('nextTutor');
  let currentIndex = 0;
  const totalCards = cards.length;

  // Initialize first card position
  updateCarousel();

  function updateCarousel() {
      const offset = currentIndex * -100;
      carousel.style.transform = `translateX(${offset}%)`;
  }

  function nextSlide() {
      if (currentIndex < totalCards - 1) {
          currentIndex++;
          updateCarousel();
      }
  }

  function prevSlide() {
      if (currentIndex > 0) {
          currentIndex--;
          updateCarousel();
      }
  }

  // Update button states
  function updateButtons() {
      prevButton.disabled = currentIndex === 0;
      nextButton.disabled = currentIndex === totalCards - 1;
      
      // Optional: Update button opacity to show disabled state
      prevButton.style.opacity = currentIndex === 0 ? '0.5' : '1';
      nextButton.style.opacity = currentIndex === totalCards - 1 ? '0.5' : '1';
  }

  // Event listeners
  prevButton.addEventListener('click', () => {
      prevSlide();
      updateButtons();
  });

  nextButton.addEventListener('click', () => {
      nextSlide();
      updateButtons();
  });

  // Initialize button states
  updateButtons();
});