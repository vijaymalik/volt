<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/faq.css">
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
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aa4ec43efe01bdc08f3f6ae94dfcc7996195b2f3.png" alt="">
            </a>
            <button class="talk-btn phn-btn">Let's Talk</button>

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
                        <a class="nav-link" href="#">Recipes </a>
                    </li>

                </ul>

                <button class="talk-btn">Let's Talk</button>
            </div>
        </div>
    </nav>

    <div class="faq">
        <h1>FAQs</h1>
        <div class="container px-4 px-lg-5">
            <h2>Hi, how can we help?</h2>
            <div class="d-flex align-items-center gap-3 top-btns mt-4">
                <button class="active">Delivery</button>
                <button>Lorem Ipsum</button>
                <button>Lorem Ipsum</button>
                <button>Lorem Ipsum</button>

            </div>
            <div class="accordion my-5" id="accordionExample">
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            01 &nbsp; How will my order arrive?
                        </button>
                    </h6>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Your order will be delivered directly to your doorstep by our trusted courier service. You
                            will receive a tracking link via email once your order has shipped, allowing you to monitor
                            its progress until it arrives.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapseOne">
                            02 &nbsp; What can I expect regarding the delivery of my Milk Drink Powder?
                        </button>
                    </h6>
                    <div id="collapsetwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Your order will be delivered directly to your doorstep by our trusted courier service. You
                            will receive a tracking link via email once your order has shipped, allowing you to monitor
                            its progress until it arrives.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapseOne">
                            03 &nbsp; How will my Milk Drink Powder be delivered to me?
                        </button>
                    </h6>
                    <div id="collapsethree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Your order will be delivered directly to your doorstep by our trusted courier service. You
                            will receive a tracking link via email once your order has shipped, allowing you to monitor
                            its progress until it arrives.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseOne">
                            04 &nbsp; What is the delivery process for my Milk Drink Powder order?
                        </button>
                    </h6>
                    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Your order will be delivered directly to your doorstep by our trusted courier service. You
                            will receive a tracking link via email once your order has shipped, allowing you to monitor
                            its progress until it arrives.
                        </div>
                    </div>
                </div>
                <hr>
        
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseOne">
                            05 &nbsp; How will my Milk Drink Powder order reach me?
                        </button>
                    </h6>
                    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Your order will be delivered directly to your doorstep by our trusted courier service. You
                            will receive a tracking link via email once your order has shipped, allowing you to monitor
                            its progress until it arrives.
                        </div>
                    </div>
                </div>
                <hr>
            </div>


        </div>
    </div>

    <div class="footer desktop-footer pt-5 ">
        <div class="container">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>