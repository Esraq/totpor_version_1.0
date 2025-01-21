const slides = document.querySelector(".slides");
const slide = document.querySelectorAll(".slide");

let currentIndex = 0;
const slideWidth = slide[0].clientWidth; // Width of a single slide
const totalSlides = slide.length;

// Automatically move to the next slide
function autoSlide() {
  currentIndex = (currentIndex + 1) % totalSlides; // Loop back to the first slide after the last one
  slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

// Start the auto-slider
const autoSlideInterval = 3000; // Time in milliseconds (3 seconds)
setInterval(autoSlide, autoSlideInterval);

// Initialize the slider
slides.style.transition = "transform 1s ease-in-out"; // Smooth transition


const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  navMenu.classList.toggle('active');
});

