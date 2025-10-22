<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/our-recipe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="marques">
            <div class="marque-content">
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
                <!-- duplicate again -->
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
                <span>20% Off on Punjas Biscuits</span>
            </div>
        </div>



        <div class="container-fluid nav-container mt-sm-2 px-sm-4">
            <a class="navbar-brand" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aa4ec43efe01bdc08f3f6ae94dfcc7996195b2f3.png" alt="">
            </a>
            <a class="talk-btn phn-btn" href="/contact-us">Let's Talk</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedConten" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="menu-btn" id="menu-btn">
                    <span></span>

                </div>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Products </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipie">Recipes </a>
                    </li>

                </ul>

                <a class="talk-btn" href="/contact-us">Let's Talk</a>
            </div>
        </div>
    </nav>

    <div class="our-recipe-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-recipe-banner.jpg" alt="">
        <div class="recipe-overlayer">
            <div class="recipe-bottom">
                <div class="d-flex  align-items-center gap-2">
                    <button>Vegan</button>
                    <button>Gluten Free</button>
                </div>
                <h1>Chip Cookies Brownie </h1>
                <p>Discover our flagship favorites trusted by generations,<br> loved by every Fijian home.</p>
                <button class="learn-morebtn">Learn More</button>
            </div>
        </div>
    </div>

    <div class="our-recipes-mbl px-4 mt-2 position-relative">
        <h2>Our Recipes</h2>
        <p>Make snack time exciting! Discover quick, tasty <br> ways to enjoy from classic tea-time treats to fun, <br> family-friendly desserts.</p>
        <div class="swiper mySwiper our-recipe-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>

    </div>

    <div class="other-recipe-container ">
        <div class="other-recipe">
            <div class="d-lg-flex align-items-center justify-content-between">
                <h2>Other Recipes</h2>
                <div class="d-flex gap-3 top-section">
                    <button class="active">All Recipes</button>
                    <button>Vegan</button>
                    <button>Plant-Based</button>
                    <button>Non Veg</button>
                </div>
            </div>

            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 col-xl-3">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 col-xl-3">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 col-xl-3">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 col-xl-3">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 col-xl-3">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 col-xl-3">
                        <div class="cards">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                            </div>
                            <div class="details">
                                <h3>Vegan Cracker <br> Breakfast</h3>
                                <div class="details-bottom d-flex align-items-center gap-1">
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-history-line"></i> 25 Mins
                                        </span>
                                        <h6>Cooking Time</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <div class="d-flex gap-2 mid">
                                            <span>
                                                V
                                            </span>
                                            <span>
                                                GF
                                            </span>
                                        </div>
                                        <h6>Category</h6>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <span>
                                            <i class="ri-star-line"></i>Easy
                                        </span>
                                        <h6>Difficulty</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        <div class="navi">
            <div class="arrow ">
                <i class="ri-arrow-left-s-line left"></i>
            </div>
            <div class="arrow">
                <i class="ri-arrow-right-s-line right"></i>
            </div>
        </div>
            </div>

        </div>
    </div>

    <div class="nearby-store pb-5 pt-0">
        <div class="containers ">
            <div class="nearby-container">
                <div class="d-sm-flex gap-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 111102.png" alt="">
                    <h6>Grab yours at the <br>
                        Nearby Stores</h6>
                    <h5 class="mbl-sec">Buy Our Products in <br> Supermarket Near You</h5>

                </div>
                <div class="bird-sec">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bird (2).png" alt="">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/birds.png" class="birds" alt="">
                <div class="select">
                    <select name="" id="">
                        <option value="">Fiji</option>
                    </select>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
            </div>
        </div>

        <div class="swiper mySwiper nearby-slider mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Extra <br> Supermarket </h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>

                            <div class="nearbybottom">
                                <span>1.2Km</span>
                                <p>VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="d-flex">
                                        <i class="ri-phone-line"></i>
                                        +679 338 7142
                                    </span>
                                    <p>Mon - Sun <br>
                                        (10:00 AM - 09:00 PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Extra <br> Supermarket </h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>

                            <div class="nearbybottom">
                                <span>1.2Km</span>
                                <p>VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="d-flex">
                                        <i class="ri-phone-line"></i>
                                        +679 338 7142
                                    </span>
                                    <p>Mon - Sun <br>
                                        (10:00 AM - 09:00 PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Extra <br> Supermarket </h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>

                            <div class="nearbybottom">
                                <span>1.2Km</span>
                                <p>VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="d-flex">
                                        <i class="ri-phone-line"></i>
                                        +679 338 7142
                                    </span>
                                    <p>Mon - Sun <br>
                                        (10:00 AM - 09:00 PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Extra <br> Supermarket </h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>

                            <div class="nearbybottom">
                                <span>1.2Km</span>
                                <p>VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="d-flex">
                                        <i class="ri-phone-line"></i>
                                        +679 338 7142
                                    </span>
                                    <p>Mon - Sun <br>
                                        (10:00 AM - 09:00 PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Extra <br> Supermarket </h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>

                            <div class="nearbybottom">
                                <span>1.2Km</span>
                                <p>VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="d-flex">
                                        <i class="ri-phone-line"></i>
                                        +679 338 7142
                                    </span>
                                    <p>Mon - Sun <br>
                                        (10:00 AM - 09:00 PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="navi">
            <div class="arrow ">
                <i class="ri-arrow-left-s-line left"></i>
            </div>
            <div class="arrow">
                <i class="ri-arrow-right-s-line right"></i>
            </div>
        </div>
    </div>

    <div class="footer desktop-footer pt-5 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-5">
                    <div class="first-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 133558.png" alt="">
                        <h6>Driving Fiji’s food industry <br> forward with quality, innovation <br> and trust...</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Product</h6>
                        <a href="">Milk Drink Powder</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Recipes</h6>
                        <a href="">Rustic Bowl with <br> Sunny-Side-Up</a>
                        <a href="">Pomegranate Ice <br> Cream Delight</a>
                        <a href="">Non Vegan Elegant Seafood</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Get In Touch</h6>
                        <a href="">9876543210,<br>
                            Savusavu, Vanua Levu, Fiji</a>
                        <div class="d-flex align-items-center gap-2 position-relative">
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/color/48/facebook-new.png"
                                    alt="facebook-new" />
                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/color/48/instagram-new--v1.png"
                                    alt="instagram-new--v1" />

                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/twitterx--v2.png"
                                    alt="twitterx--v2" />
                            </div>
                            <img class="bird" src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer mbl-footer pt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-5">
                    <div class="first-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 133558.png" alt="">
                        <h6>Driving Fiji’s food industry forward with <br> quality, innovation and trust...</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Get In Touch</h6>
                        <a href="">9876543210,<br>
                            Savusavu, Vanua Levu, Fiji</a>
                        <div class="d-flex align-items-center gap-2 position-relative">
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/color/48/facebook-new.png"
                                    alt="facebook-new" />
                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/color/48/instagram-new--v1.png"
                                    alt="instagram-new--v1" />

                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/twitterx--v2.png"
                                    alt="twitterx--v2" />
                            </div>
                            <img class="bird" src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="accordion mt-4">

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Recipes</h6>
                            <span class="icon">+</span>
                        </div>
                        <div class="accordion-content">
                            <a href="">Rustic Bowl with <br> Sunny-Side-Up</a>
                            <a href="">Pomegranate Ice <br> Cream Delight</a>
                            <a href="">Non Vegan Elegant Seafood</a>
                        </div>
                    </div>
                    <hr>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Product</h6>
                            <span class="icon">+</span>
                        </div>
                        <div class="accordion-content">
                            <a href="">Milk Drink Powder</a>
                        </div>
                    </div>
                    <hr>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Privacy Policy</h6>

                        </div>

                    </div>
                    <hr>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Terms & Conditions</h6>

                        </div>

                    </div>
                    <hr>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>FAQs</h6>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>



    <hr class="desktop-hr">
    <div class="copywrite mt-5 d-none  d-sm-flex align-items-center justify-content-between container">
        <div class="d-sm-flex align-items-center gap-4">
            <a href="">Privacy Policy</a>
            <a href="">Terms & Conditions</a>
            <a href="">FAQs</a>
        </div>
        <hr class="phone-hr">

        <div class="text-center  text-sm-start">
            <a href="#">Carefully Crafted By <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3minds.png" alt=""></a>
        </div>
    </div>

    <div class="copywrite mbl-copy mt-5  align-items-center justify-content-between container">

        <hr class="phone-hr">

        <div class="text-center  text-sm-start">
            <a href="#">Carefully Crafted By <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3minds.png" alt=""></a>
        </div>
    </div>

    <div class="end d-none d-sm-flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 140915.png" alt="">
    </div>

    <div class="end  d-block d-sm-none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mblf.png" alt="">
    </div>

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


        const swiper2 = new Swiper(".our-recipe-slider", {
            slidesPerView: 1,
            effect: "cards",
            loop: true,
            grabCursor: true,
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