let currentSlide = 0;
const slides = document.querySelectorAll('.slider-img');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active');
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

setInterval(nextSlide, 5000); // Change slide every 5 seconds

// home.js
document.addEventListener('DOMContentLoaded', function () {
    const categoriesDropdown = document.querySelector('.categories-dropdown');
    const dropdownContainer = categoriesDropdown.querySelector('.dropdown-container');
    
    categoriesDropdown.addEventListener('click', function () {
        dropdownContainer.classList.toggle('show-dropdown');
    });

    // Optional: Close the dropdown if clicking outside of it
    document.addEventListener('click', function (event) {
        if (!categoriesDropdown.contains(event.target)) {
            dropdownContainer.classList.remove('show-dropdown');
        }
    });
});
