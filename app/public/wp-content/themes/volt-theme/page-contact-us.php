<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- intl-tel-input CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" />

    <!-- jQuery (if not already loaded) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- intl-tel-input JS (place before your init script) -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <!-- utils script (for validation & formatting) -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"></script>
    <style>
        /* intl-tel width */
        .iti {
            width: 100%;
        }

        #phone {
            width: 100%;
        }

        /* form inputs */
        input,
        textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #d3d3d3;
            border-radius: 6px;
            box-sizing: border-box;
        }

        /* error text */
        .error {
            display: block;
            color: #d9534f;
            font-size: 12px;
            margin-top: 6px;
        }

        /* highlight invalid fields */
        .input input.invalid,
        .input textarea.invalid,
        .input2 input.invalid {
            border-color: #d9534f !important;
            box-shadow: 0 0 0 2px rgba(217, 83, 79, 0.06);
        }

        /* submit button */
        .submit-button button {
            background: #bfa227;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .submit-button button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

      <?php get_template_part('header', 'volt'); ?>


    <div class="hero">
        <div class="left-sec">
            <div class="overlay">
                <div class="overlay-container">
                    <h4>Customer Support</h4>
                    <p id="dek"> Have some doubt? Let’s clear it up together!</p>
                    <p id="mbl">Our friendly team is ready to assist you with <br> any VOLT Milk Drink Powder
                        queries.
                    </p>
                    <div class="icons">
                        <div class="icon">
                            <i class="ri-facebook-fill"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-instagram-line"></i>
                        </div>

                        <div class="icon">
                            <i class="ri-linkedin-line"></i>
                        </div>
                    </div>


                </div>
                <p id="mbl2">Have some doubt? <br>
                    Let’s clear it up together!</p>
            </div>
        </div>
        <div class="right-sec">
            <div class="form">
                <h2>Get in Touch</h2>
                <p class="right-para">We’re ready to answer your questions and assist you promptly. Our friendly 
                    team is ready to
                    assist
                    you with any VOLT Milk Drink Powder queries.</p>
                <form id="enquiryForm" novalidate>
                    <div class="input">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Eg: Jacob Jones" required>
                        <small class="error"></small>
                    </div>

                    <div class="input2">
                        <div class="left">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Eg: jjacob123@gmail.com" required>
                            <small class="error"></small>
                        </div>

                        <div class="right">
                            <label>Phone Number</label>
                            <!-- intl-tel-input friendly input -->
                            <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
                            <small class="error"></small>
                        </div>
                    </div>

                    <div class="input2">
                        <div class="left">
                            <label>Your Location</label>
                            <input type="text" name="location" placeholder="Eg: Savusavu, Vanua Levu, Fiji">
                            <small class="error"></small>
                        </div>

                        <div class="right">
                            <label>Query Type</label>
                            <input type="text" name="query_type" placeholder="Problem with the Product">
                            <small class="error"></small>
                        </div>
                    </div>

                    <div class="input textarea">
                        <label>Query</label>
                        <textarea name="message" placeholder="Eg: Your Query" required></textarea>
                        <small class="error"></small>
                    </div>
                    <div class="submit-sec">
                        <input type="checkbox">
                        <p>By submitting the above form, you consent to our <span><a class="text-black" href="">terms
                                    and
                                    conditions.</a></span></p>
                    </div>

                    <div class="submit-button">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <div class="map-sec">
        <span>OUR LOCATION</span>
        <h6 class="d-none d-sm-block">Carpenters Fiji Pte Ltd / Morris <br> Hedstrom Head Office, 34 Rodwell <br>Road,
            Suva, Fiji</h6>

        <h6 class="d-block d-sm-none">Carpenters Fiji Pte Ltd / <br> Morris Hedstrom Head <br> Office, 34 Rodwell
            <br>Road, Suva, Fiji
        </h6>
        <div class="d-flex  align-items-center justify-content-center">
            <img class="light-icon" height="32" width="32"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/light.png" alt="">
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps?q=Carpenters+Fiji+Pte+Ltd+Morris+Hedstrom+Head+Office,+34+Rodwell+Road,+Suva,+Fiji&output=embed"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>


    <?php get_template_part('template-parts/nearby-store'); ?>


        <?php get_template_part('footer', 'volt'); ?>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>



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



        const accordions = document.querySelectorAll(".accordion-header");

        accordions.forEach(header => {
            header.addEventListener("click", () => {
                const parent = header.parentElement;
                parent.classList.toggle("active");

                // Close others
                document.querySelectorAll(".accordion-item").forEach(item => {
                    if (item !== parent) item.classList.remove("active");
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

document.querySelector('.arrow-select').addEventListener('click', function() {
    const select = document.querySelector('.fiji-select');
    select.focus();
    const e = new KeyboardEvent('keydown', { key: 'ArrowDown', bubbles: true });
    select.dispatchEvent(e);
});


        jQuery(function ($) {

            $('#phone').on('keypress', function (e) {
                const char = String.fromCharCode(e.which);
                if (!/[0-9+\-\s()]/.test(char)) {
                    e.preventDefault();
                }
            });
            // init intl-tel-input on the phone input
            const phoneInput = document.querySelector("#phone");
            const iti = window.intlTelInput(phoneInput, {
                initialCountry: "auto",              // auto tries to detect; change to "in" if you prefer fixed default
                geoIpLookup: function (callback) {    // optional: auto detect via ip (uses free ipinfo)
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
            $('#enquiryForm').on('submit', function (e) {
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
                    success: function (res) {
                        // expected JSON { success: true, message: "..." } or adjust per backend
                        if (res && res.success) {
                            alert(res.message || 'Form submitted successfully!');
                            $('#enquiryForm')[0].reset();
                            iti.setCountry('us'); // reset to default country if you like
                        } else {
                            alert((res && res.message) ? res.message : 'Submission failed. Try again.');
                        }
                    },
                    error: function (err) {
                        console.error('Error:', err);
                        alert('Something went wrong. Try again later.');
                    },
                    complete: function () {
                        $btn.prop('disabled', false).text('Submit');
                    }
                });
            });

            // clear error on input
            $('input, textarea').on('input', function () {
                clearError($(this));
            });

        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>