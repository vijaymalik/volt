const cards_new = document.querySelectorAll('.card_desk');

// Assign left/right & keep rotation untouched
cards_new.forEach((card, index) => {
    // Store original rotation angle
    const style = getComputedStyle(card);
    const matrix = new WebKitCSSMatrix(style.transform);
    const angle = Math.round(Math.atan2(matrix.b, matrix.a) * (180 / Math.PI));

    card.style.setProperty('--rot', angle + "deg");

    if (index % 2 === 0) {
        card.classList.add("left-effect");
    } else {
        card.classList.add("right-effect");
    }
});

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show");
        }
    });
}, { threshold: 0.2 });

cards_new.forEach(card => observer.observe(card));


const cards = document.querySelectorAll('.card-mobile');
let currentIndex = 1; // Start from second card (0 = first card - always visible)
let lastScroll = 0;
let scrollCooldown = false;

// First card always shown
cards[0].classList.add("show");

window.addEventListener("scroll", () => {
    if (scrollCooldown) return;

    let newScroll = window.scrollY;

    // Scrolling DOWN → Show next cards (but not hide first)
    if (newScroll > lastScroll) {
        if (currentIndex < cards.length) {
            cards[currentIndex].classList.add("show");
            currentIndex++;
        }
    }

    // Scrolling UP → Hide cards except first one
    else {
        if (currentIndex > 1) { // must be >1 so card[0] NEVER hides
            currentIndex--;
            cards[currentIndex].classList.remove("show");
        }
    }

    scrollCooldown = true;
    setTimeout(() => scrollCooldown = false, 500);

    lastScroll = newScroll;
});