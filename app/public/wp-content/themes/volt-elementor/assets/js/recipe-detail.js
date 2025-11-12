(function ($) {
    //mobile
    let currentSlide = 0;
    const slide_mobile = document.querySelectorAll('.slide_mobile');

    function showSlide(index) {
        slide_mobile.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slide_mobile.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slide_mobile.length) % slide_mobile.length;
        showSlide(currentSlide);
    }

    document.addEventListener('DOMContentLoaded', function () {
        // document.getElementById('nextSlide').addEventListener('click', function() {
        // currentSlide = (currentSlide + 1) % slide_mobile.length;
        // showSlide(currentSlide);
        // });

        document.getElementById('prevSlide').addEventListener('click', function () {
            currentSlide = (currentSlide - 1 + slide_mobile.length) % slide_mobile.length;
            showSlide(currentSlide);
        });
    });

    // Optional: Auto-slide
    setInterval(nextSlide, 5000);

    let cardCurrentIndex = 0;
    const cardSlides = document.querySelectorAll('.slide_card');
    const cardDots = document.querySelectorAll('.dot_card');
    let cardInterval;

    // Show specific slide
    function showCardSlide(index) {
        cardSlides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
            cardDots[i].classList.toggle('active', i === index);
        });
    }

    // Go to next slide
    function nextCardSlide() {
        cardCurrentIndex = (cardCurrentIndex + 1) % cardSlides.length;
        showCardSlide(cardCurrentIndex);
    }

    // Go to previous slide
    function prevCardSlide() {
        cardCurrentIndex = (cardCurrentIndex - 1 + cardSlides.length) % cardSlides.length;
        showCardSlide(cardCurrentIndex);
    }

    // Auto-slide every 4 seconds
    function startCardAutoSlide() {
        cardInterval = setInterval(nextCardSlide, 4000);
    }
    startCardAutoSlide();

    // Allow clicking on dots to change slides
    cardDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            clearInterval(cardInterval); // stop auto when user clicks
            cardCurrentIndex = index;
            showCardSlide(cardCurrentIndex);
            startCardAutoSlide(); // restart auto-slide
        });
    });

})(jQuery);
