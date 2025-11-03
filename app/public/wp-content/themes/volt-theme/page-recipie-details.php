<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/our-recipe-details.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

      <?php get_template_part('header', 'volt'); ?>

    <div class="breadcrumb">
        <a href="">Home</a>
        <span>/</span>
        <a href="">Our Recipe</a>
        <span>/</span>
        <a href="" class="active">Recipe Detail</a>
    </div>
    <div class="hero-recipe-mbl">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
        <div class="overlayer">
            <div class="top">
                <div class="arrow">
                    <i class="ri-arrow-left-s-line"></i>
                </div>
            </div>
            <div class="bottom">
                <span><i class="ri-history-line"></i>1.2Hrs</span>
                <span class="mt-3"><i class="ri-star-line"></i>Easy</span>
                <h2>Vegan Cracker Breakfast</h2>
                <div class="mt-3 d-flex gap-1">
                    <span>Vegan</span>
                    <span>Gluten-Free</span>
                    <span>Gluten-Free</span>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-recipe-details pb-5 mb-5 mt-4">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-4 d-none d-sm-block">
                    <div class="left-side">
                        <div class="imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                        </div>
                        <div class="imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3rd.png" alt="">
                        </div>
                        <div class="imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2nd.png " alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    <div class="right-side">
                        <h1 class="d-none d-sm-block">Vegan Cracker Breakfast</h1>
                        <h1 class="d-block d-sm-none">Description</h1>
                        <div class="vegans-btn">
                            <button>Vegan</button>
                            <button>Gluten-Free</button>
                            <button>Gluten-Free</button>
                        </div>
                        <h6>Turn your everyday Volt Biscuits into a delightful, no-fuss dessert. These easy sandwich
                            bites layer fresh cream and strawberries between crisp biscuits perfect for tea parties,
                            kids’ treats, or a quick sweet fix.</h6>
                        <div class="dets-btn d-sm-flex align-item-center gap-1 mt-3">
                            <button><i class="ri-history-line"></i>1.2Hrs (Time)</button>
                            <button><img height="18" width="18" src="<?php echo get_template_directory_uri(); ?>/assets/images/chef-hat.png" alt="">Easy (Cooking
                                Type)</button>
                        </div>

                        <div class="ingredients">
                            <h1>Ingredients</h1>
                            <div class="container-fluid">
                                <div class="row mt-4">
                                    <div class="col-12 col-sm-6 p-0 mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 1618873780.png" alt="">
                                            <p>12–16 Volt Biscuits</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 p-0 mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 1618873781.png" alt="">
                                            <p>2 Eggs</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 p-0 mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 1618873780.png" alt="">
                                            <p>5–6 fresh strawberries, thinly sliced</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 p-0 mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 1618873780.png" alt="">
                                            <p>1 tbsp powdered sugar (optional)</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 p-0 mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 1618873780.png" alt="">
                                            <p>Fresh mint leaves (optional, for garnish)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="recipe">
                            <h2>Recipe</h2>
                            <div class="accordion my-3" id="accordionExample">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Step 1
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Prepare the Filling</strong>
                                            <br>
                                            Whip the cream (if not pre-whipped) until soft peaks form. Add a spoon of
                                            powdered sugar if you want it sweeter.

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            Step 2
                                        </button>
                                    </h6>
                                    <div id="collapsetwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            Step 3
                                        </button>
                                    </h6>
                                    <div id="collapsethree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            Step 4
                                        </button>
                                    </h6>
                                    <div id="collapsefour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="made-with position-relative ">
                            <h2>Made with</h2>
                            <div class="made-with-container mt-4 mt-sm-0">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <div class="left-made">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/biscuit.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <div class="right-made">
                                                <h5>Biscuit Crackers</h5>
                                                <p>Light, flaky and full of flavor, our biscuit crackers bring a
                                                    satisfying crunch to every bite. Perfect for tea-time or gourmet
                                                    pairings.</p>
                                                <button>Learn More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="did-you">
        <img class="d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/did-you.jpg" alt="">
        <img class="d-block d-sm-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">

        <div class="overlayer">
            <div class="container-fluid did-you-container ">
                <div class="row h-100">
                    <div class="col-12 col-sm-6">
                        <div class="leftsec">
                            <h1 class="d-none d-sm-block">Did you give this a try?</h1>
                            <h1 class="d-sm-block d-sm-none">Did You Give <br>
                                it a Try?</h1>
                            <p class="d-none d-sm-block">Tell us about it and get 5% <br> off for sharing your pick!</p>
                            <p class="d-sm-block d-sm-none">Tell us about it and get 5% off for <br>sharing your pick!
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                        <div class="rightsec">
                            <div class="top">
                                <h6>
                                    Let’s choose <br> between the two
                                </h6>

                            </div>
                            <div class="bottom">
                                <button>Too good</button>
                                <button>Tried something more</button>
                            </div>
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/nearby-store'); ?>


    <?php get_template_part('footer', 'volt'); ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
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

        const accordions = document.querySelectorAll(".accordion-header");

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

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>