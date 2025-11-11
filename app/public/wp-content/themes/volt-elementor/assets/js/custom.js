// Updated Swiper initialization
document.addEventListener('DOMContentLoaded', function() {
    const swiperWrapper = document.querySelector('.nearby-slider-recipie .swiper-wrapper');
    const slideCount = swiperWrapper ? swiperWrapper.querySelectorAll('.swiper-slide').length : 0;

    // Maximum slides per view (desktop)
    const maxSlidesPerView = 4;

    // Enable loop only if there are more slides than slidesPerView
    const enableLoop = slideCount > maxSlidesPerView;

    var swiper = new Swiper(".nearby-slider-recipie", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true, // Always loop
        loopAdditionalSlides: 4, // Helps fill white space
        watchOverflow: false,
        centeredSlides: false,
        grabCursor: true,
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 10,
            },
            641: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1025: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
        on: {
            init: function() {
                console.log(`Swiper initialized with ${this.slides.length} total slides (including duplicates).`);
            }
        }
    });

});


var swiper = new Swiper(".recipie-slider", {
    slidesPerView: 'auto',
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".right-arrows",
        prevEl: ".left-arrows",
    },
    breakpoints: {
        0: {
            slidesPerView: 'auto',
            spaceBetween: 10,
        },
        641: {
            slidesPerView: 'auto',
            spaceBetween: 20,
        },
        1025: {
            slidesPerView: 'auto',
            spaceBetween: 30,
        },
    },
});

const accordions = document.querySelectorAll(".accordion-header");


// const swiper2 = new Swiper(".our-recipe-slider", {
//     slidesPerView: 1,
//     effect: "coverflow",
//     loop: true,
//     grabCursor: true,
// });

var swiper2 = new Swiper(".our-recipe-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 2,
        slideShadows: false,
    },
});


accordions.forEach(header => {
    header.addEventListener("click", () => {
        const parent = header.parentElement;

        // Close all other accordions (optional)
        document.querySelectorAll(".accordion-item").forEach(item => {
            if (item !== parent) item.classList.remove("active");
        });

        // Toggle current accordion
        parent.classList.toggle("active");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var swiper = new Swiper(".our-products-slider", {
        slidesPerView: 1,

        loop: true,
        navigation: {
            nextEl: ".right-arw",
            prevEl: ".left-arw",
        },
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const pollWrap = document.querySelector('.right-poll');
    if (!pollWrap) return;

    const questionEl = pollWrap.querySelector('h5');
    const optionsWrap = pollWrap.querySelector('div.d-flex.flex-column');
    const progressBar = pollWrap.querySelector('.progress-bar');

    // Step state: 0 = step1, 1 = step2, 2 = finished
    let step = 0;
    const answers = {}; // store choices

    // Utility: clear and create buttons inside optionsWrap
    function setButtons(labels) {
        optionsWrap.innerHTML = '';
        labels.forEach(label => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.textContent = label;

            // ✅ Apply margin classes to all EXCEPT "Vanilla"
            if (label.toLowerCase() !== 'vanilla') {
                btn.className = 'mt-6 mt-sm-5';
            }

            btn.addEventListener('click', onOptionClick);
            optionsWrap.appendChild(btn);
        });
    }

    // initial buttons already exist in markup — to ensure consistent listeners,
    // attach listeners to existing buttons if present, else recreate.
    const existingBtns = Array.from(optionsWrap.querySelectorAll('button'));
    if (existingBtns.length) {
        existingBtns.forEach(b => b.addEventListener('click', onOptionClick));
    }

    // Handler for option clicks
    function onOptionClick(e) {
        const chosen = e.currentTarget.textContent.trim();

        if (step === 0) {
            // Step 1 chosen
            answers.q1 = chosen;

            // move to step 2: change question and options
            questionEl.innerHTML = 'Which flavor base <br> do you prefer?';
            // add class to animate progress from 50% -> 100%
            // we use a small timeout so the CSS transition is visible
            setTimeout(() => progressBar.classList.add('step-2'), 30);

            // set second step options
            setButtons(['Chocolate', 'Vanilla']);
            step = 1;
            return;
        }

        if (step === 1) {
            // Step 2 chosen
            answers.q2 = chosen;

            // finish: show thank you and summary
            finishPoll();
            return;
        }

        // if step >= 2, do nothing (already finished)
    }

    function finishPoll() {
        // lock UI: remove buttons and show summary
        optionsWrap.innerHTML = `
                                    <p class="mt-6 mt-sm-5"></p>
                                    <p style="text-align:center;margin:6px 0 0 0;font-size:.95rem;color:#333;">
                                        You chose: <strong>${answers.q1}</strong> &amp; <strong>${answers.q2}</strong>
                                    </p>
                                    `;

        // ensure progress shows full and mark complete
        progressBar.classList.add('complete');
        progressBar.classList.add('step-2'); // safe-guard: ensure 100%

        // optional: visually dim the poll to prevent further interaction
        pollWrap.style.pointerEvents = 'none';
        pollWrap.style.opacity = '0.98';

        step = 2;
    }

    // If you want to ensure initial buttons get proper spacing / event listeners if markup used,
    // you can re-render initial buttons using setButtons(['Sweet', 'Savoury']) here instead of relying on markup.
    // But to keep markup untouched, we used existing buttons above.

});
document.addEventListener('DOMContentLoaded', function() {
    var swiper2 = new Swiper(".our-recipe-slider", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 200,
            modifier: 2,
            slideShadows: false,
        },
    });

    // const accordions = document.querySelectorAll(".accordion-header");
    // accordions.forEach(header => {
    //     header.addEventListener("click", () => {
    //         const parent = header.parentElement;
    //         document.querySelectorAll(".accordion-item").forEach(item => {
    //             if (item !== parent) item.classList.remove("active");
    //         });
    //         parent.classList.toggle("active");
    //     });
    // });

    const categoryButtons = document.querySelectorAll('.top-section button[data-filter]');
    const recipeCols = document.querySelectorAll('.recipe-col');

    function setActiveButton(clickedBtn) {
        categoryButtons.forEach(b => b.classList.remove('active'));
        clickedBtn.classList.add('active');
    }

    function filterRecipes(filter) {
        recipeCols.forEach(col => {
            const cats = (col.getAttribute('data-categories') || '').split(',').map(s => s.trim()).filter(Boolean);
            if (filter === 'all') {
                col.style.display = '';
            } else {
                if (cats.indexOf(filter) !== -1) {
                    col.style.display = '';
                } else {
                    col.style.display = 'none';
                }
            }
        });
    }

    categoryButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const filter = btn.getAttribute('data-filter');
            setActiveButton(btn);
            filterRecipes(filter);
        });
    });

    const activeBtn = document.querySelector('.top-section button.active');
    if (activeBtn) {
        filterRecipes(activeBtn.getAttribute('data-filter') || 'all');
    } else {
        filterRecipes('all');
    }
});

//faq
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.top-btns button');
    const items = Array.from(document.querySelectorAll('.faq-item'));
    const accordionId = '<?php echo esc_js($accordion_id); ?>';

    // Prevent accidental anchor navigation & prevent default for any header anchors
    document.querySelectorAll('.accordion-header a, .accordion-header [href="#"]').forEach(a => {
        a.addEventListener('click', function(ev) {
            ev.preventDefault();
        });
    });

    // Ensure accordion buttons are type="button" (defensive)
    document.querySelectorAll('.accordion-button').forEach(b => {
        if (!b.getAttribute('type')) b.setAttribute('type', 'button');
    });

    function renumberVisible() {
        const visible = items.filter(i => i.offsetParent !== null);
        visible.forEach((el, idx) => {
            const serialEl = el.querySelector('.faq-serial');
            if (serialEl) {
                const num = (idx + 1).toString().padStart(2, '0');
                serialEl.textContent = num;
            }
        });
    }

    // Prevent Bootstrap collapse from forcing visible scroll by saving/restoring scroll position
    function safeToggleCollapse(targetCollapseEl) {
        const scrollTop = window.scrollY || window.pageYOffset;
        // toggle using Bootstrap's Collapse API if available (keeps behaviour consistent)
        try {
            let bs = bootstrap.Collapse.getInstance(targetCollapseEl);
            if (!bs) bs = new bootstrap.Collapse(targetCollapseEl, { toggle: false });
            // toggle manually
            if (targetCollapseEl.classList.contains('show')) bs.hide();
            else bs.show();
        } catch (e) {
            // fallback: toggle class
            targetCollapseEl.classList.toggle('show');
        }
        // restore scroll after a tick (Bootstrap animation may change layout)
        setTimeout(() => window.scrollTo({ top: scrollTop }), 10);
    }

    // Intercept click on accordion buttons to use safeToggleCollapse (prevents unexpected jumps)
    document.querySelectorAll('.accordion-button').forEach(btn => {
        btn.addEventListener('click', function(ev) {
            // If button is inside a real <button type="button">, let bootstrap handle it — but still guard scroll
            const targetSelector = btn.getAttribute('data-bs-target') || btn.getAttribute('data-target');
            if (targetSelector) {
                ev.preventDefault();
                const collapseEl = document.querySelector(targetSelector);
                if (collapseEl) safeToggleCollapse(collapseEl);
            }
        });
    });

    // Existing category button filtering logic
    renumberVisible();
    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            if (filter === 'all') {
                items.forEach(i => i.style.display = '');
            } else if (filter === 'uncategorized') {
                items.forEach(i => {
                    i.style.display = i.classList.contains('uncategorized') ? '' : 'none';
                });
            } else {
                const termId = filter.replace('cat-', '');
                items.forEach(i => {
                    if (i.classList.contains('cat-' + termId)) i.style.display = '';
                    else i.style.display = 'none';
                });
            }

            // close any open collapse (use bootstrap API if available)
            document.querySelectorAll('.accordion-collapse.show').forEach(c => {
                try {
                    const bsCol = bootstrap.Collapse.getInstance(c);
                    if (bsCol) bsCol.hide();
                    else c.classList.remove('show');
                } catch (e) {
                    c.classList.remove('show');
                }
            });

            renumberVisible();

            // Scroll to accordion top (optional) — keep this if you want the page to jump to accordion
            const acc = document.getElementById(care);
            if (acc) acc.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
//contact us



// Arrow fade function
function updateArrows(swiper) {
    const prevArrow = document.querySelector(".left");
    const nextArrow = document.querySelector(".right");

    if (swiper.isBeginning) {
        prevArrow.classList.add("disabled");
    } else {
        prevArrow.classList.remove("disabled");
    }

    if (swiper.isEnd) {
        nextArrow.classList.add("disabled");
    } else {
        nextArrow.classList.remove("disabled");
    }
}



// const accordions = document.querySelectorAll(".accordion-header");

// accordions.forEach(header => {
//     header.addEventListener("click", () => {
//         const parent = header.parentElement;
//         parent.classList.toggle("active");

//         // Close others
//         document.querySelectorAll(".accordion-item").forEach(item => {
//             if (item !== parent) item.classList.remove("active");
//         });
//     });
// });


document.querySelector('.arrow-select').addEventListener('click', function() {
    const select = document.querySelector('.fiji-select');
    select.focus();
    const e = new KeyboardEvent('keydown', { key: 'ArrowDown', bubbles: true });
    select.dispatchEvent(e);
});


jQuery(function($) {

    $('#phone').on('keypress', function(e) {
        const char = String.fromCharCode(e.which);
        if (!/[0-9+\-\s()]/.test(char)) {
            e.preventDefault();
        }
    });
    // init intl-tel-input on the phone input
    const phoneInput = document.querySelector("#phone");
    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "auto", // auto tries to detect; change to "in" if you prefer fixed default
        geoIpLookup: function(callback) { // optional: auto detect via ip (uses free ipinfo)
            fetch('https://ipinfo.io/json?token=<YOUR_TOKEN_IF_NEEDED>')
                .then(resp => resp.json())
                .then(data => callback(data.country))
                .catch(() => callback('us'));
        },
        preferredCountries: ["in", "us", "fj", "gb", "au"],
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
    });

    // helper: show error under input element
    function showError($field, msg) {
        $field.addClass('invalid');
        $field.closest('div').find('.error').text(msg);
    }

    function clearError($field) {
        $field.removeClass('invalid');
        $field.closest('div').find('.error').text('');
    }

    // validation function returns boolean
    function validateForm() {
        let valid = true;

        // fields as jQuery objects
        const $name = $('input[name="name"]');
        const $email = $('input[name="email"]');
        const $location = $('input[name="location"]');
        const $queryType = $('input[name="query_type"]');
        const $message = $('textarea[name="message"]');
        const $phone = $('#phone');

        // clear all previous errors
        $('.error').text('');
        $('input, textarea').removeClass('invalid');

        const name = $name.val().trim();
        const email = $email.val().trim();
        const location = $location.val().trim();
        const queryType = $queryType.val().trim();
        const message = $message.val().trim();
        const phoneVal = $phone.val().trim();

        // Name: letters and spaces, min 2 chars
        if (!/^[a-zA-Z\s]{2,50}$/.test(name)) {
            showError($name, "Enter a valid name (letters only, min 2 chars)");
            valid = false;
        }

        // Email: basic RFC style validation
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showError($email, "Enter a valid email address");
            valid = false;
        }

        // Phone: use intl-tel-input validation
        if (!phoneVal) {
            showError($phone, "Phone number is required");
            valid = false;
        } else if (!iti.isValidNumber()) {
            showError($phone, "Enter a valid phone number for the selected country");
            valid = false;
        }

        // Location (optional but if present, min 3 chars)
        if (location && location.length < 3) {
            showError($location, "Location should be at least 3 characters");
            valid = false;
        }

        // Query type optional
        if (queryType && queryType.length < 3) {
            showError($queryType, "Query type should be at least 3 characters");
            valid = false;
        }

        // Message required, min 10 chars
        if (!message || message.length < 10) {
            showError($message, "Please enter at least 10 characters in the query");
            valid = false;
        }

        return valid;
    }

    // AJAX submit
    $('#enquiryForm').on('submit', function(e) {
        e.preventDefault();

        // validate
        if (!validateForm()) {
            return;
        }

        // prepare data
        const fullPhone = iti.getNumber(); // E.164 format e.g. +679XXXXXXXXX
        // optionally get country iso: iti.getSelectedCountryData().iso2

        const data = {
            action: 'submit_enquiry',
            name: $('input[name="name"]').val().trim(),
            email: $('input[name="email"]').val().trim(),
            phone: fullPhone,
            location: $('input[name="location"]').val().trim(),
            query_type: $('input[name="query_type"]').val().trim(),
            message: $('textarea[name="message"]').val().trim()
        };

        // disable submit while request in progress
        const $btn = $(this).find('button[type="submit"]');
        $btn.prop('disabled', true).text('Sending...');

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(res) {
                // expected JSON { success: true, message: "..." } or adjust per backend
                if (res && res.success) {
                    alert(res.message || 'Form submitted successfully!');
                    $('#enquiryForm')[0].reset();
                    iti.setCountry('us'); // reset to default country if you like
                } else {
                    alert((res && res.message) ? res.message : 'Submission failed. Try again.');
                }
            },
            error: function(err) {
                console.error('Error:', err);
                alert('Something went wrong. Try again later.');
            },
            complete: function() {
                $btn.prop('disabled', false).text('Submit');
            }
        });
    });

    // clear error on input
    $('input, textarea').on('input', function() {
        clearError($(this));
    });

});
//receipe details
var swiper = new Swiper(".nearby-slider", {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: ".right",
        prevEl: ".left",
    },
    breakpoints: {
        // Extra small phones (up to 480px)
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // Small phones to tablets (481px to 768px)
        481: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        // Tablets (769px to 1024px)
        769: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        // Desktop (above 1024px)
        1025: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

// const accordions = document.querySelectorAll(".accordion-header");

// accordions.forEach(header => {
//     header.addEventListener("click", () => {
//         const parent = header.parentElement;

//         // Close all other accordions (optional)
//         document.querySelectorAll(".accordion-item").forEach(item => {
//             if (item !== parent) item.classList.remove("active");
//         });

//         // Toggle current accordion
//         parent.classList.toggle("active");
//     });
// });


const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const segments = document.querySelectorAll('.progress-segment');

let index = 0;
let autoSlide;

function showSlide(n) {
    index = (n + slides.length) % slides.length;
    slider.style.transform = `translateX(-${index * 100}%)`;

    // Update progress bar colors
    segments.forEach((seg, i) => {
        seg.classList.toggle('active', i === index);
    });
}

function startAutoSlide() {
    autoSlide = setInterval(() => {
        showSlide(index + 1);
    }, 4000);
}

function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
}

// Click on progress segment to jump to that slide
segments.forEach((seg, i) => {
    seg.addEventListener('click', () => {
        showSlide(i);
        resetAutoSlide();
    });
});

// Initialize
showSlide(0);
startAutoSlide();