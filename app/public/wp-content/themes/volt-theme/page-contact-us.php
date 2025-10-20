<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Onest', sans-serif;

        }

        html,
        body {

            width: 100%;
            background-color: #fbf5e0 !important;

        }

        .navbar {
            position: absolute !important;
            top: 32px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            height: 112px;
            padding: 0 !important;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            margin: 0 !important;
            z-index: 99;
            border-radius: 24px;
        }

        .navbar-nav a {
            font-weight: 400;
            font-family: 'Onest', sans-serif;
            font-size: 16px;
            line-height: 27px;
        }

        .navbar .marques {
            height: 32px;
            width: 100%;
            display: flex;
            align-items: center;
            gap: 15px;
            background: linear-gradient(89.72deg, #E2CA74 -20.96%, #A5843E 201.13%);

        }

        .navbar .marques span {
            font-family: 'Onest', sans-serif;
            font-weight: 500;
            font-style: medium !important;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 10%;
            color: #FCFBF2;
            text-transform: uppercase;
        }

        .marques {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            background: #fce4ec;
            /* optional background */
            padding: 10px 0;
        }

        .marque-content {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
        }

        .marque-content span {
            display: inline-block;
            margin-right: 50px;
            /* spacing between texts */
            color: #d81b60;
            font-size: 20px;
            font-weight: 600;
        }

        /* Animation */
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .navbar .nav-container img {
            width: 70px;
            height: 52px;

        }

        .navbar .nav-container .talk-btn {
            background-color: #0D122B;
            color: #fff;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 152px;
            border: none;
            border-radius: 15px;
            padding: 18px;
            font-family: 'Onest', sans-serif;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
        }


        .hero {
            width: 100%;
            height: 100%;
            display: flex;
        }

        .hero .left-sec {
            width: 50%;
            height: 996px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            overflow: hidden;
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/b0445bc11c223ec249a004bbb6af456bcc7eec51.png');
        }

        .hero .left-sec .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 20.66%, #000000 124.46%);
            top: 0;
            left: 0;
        }

        .hero .left-sec .overlay .overlay-container {
            position: absolute;
            top: 789px;
            left: 76px;
            color: #FFFFFF;
            width: 100%;
        }



        .hero .left-sec .overlay .overlay-container h4 {
            font-family: 'Onest';
            font-weight: 500;
            font-style: Medium;
            font-size: 38px;
            line-height: 100%;
            letter-spacing: -2%;
        }

        .hero .left-sec .overlay .overlay-container p {
            font-family: 'Onest';
            font-weight: 400;
            font-style: regular;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0;
            margin-bottom: 0;
            margin-top: 20px;
        }

        .hero .right-sec {
            width: 50%;
            height: 996px;
            position: relative;
        }


        .hero .right-sec .form {
            width: 80%;
            height: 744px;
            left: 50px;
            position: absolute;
            top: 203px;
        }

        .hero .right-sec .form h2 {
            font-family: 'Onest', sans-serif;
            color: #2D1D0F;
            font-weight: 500;
            font-style: medium !important;
            font-size: 52px;
            line-height: 100%;
            letter-spacing: -2% !important;

        }

        .hero .right-sec .form p {
            font-family: 'Onest', sans-serif;
            color: #666666;
            width: 95%;
            font-weight: 400;
            font-size: 16px;
            font-style: regular !important;
            line-height: 20px;
            letter-spacing: 0;
            margin-bottom: 0 !important;
            margin-top: 11px !important;
        }

        .hero .right-sec .form .input {
            margin-top: 40px;
        }

        .hero .right-sec .form .input label,
        .hero .right-sec .form .input2 label {
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            display: block;
            color: #40360D;
            letter-spacing: 0;
            font-family: 'Onest', sans-serif;
        }

        .hero .right-sec .form .input input {
            width: 100%;
            height: 52px;
            border-radius: 4px;
            border: 1px solid #40360D33;
            padding: 16px;
            margin-top: 8px;
            background-color: transparent;
            outline: none;
            font-family: 'Onest', sans-serif;
        }


        .hero .right-sec .form .input2 {
            display: flex;
            gap: 16px;
            width: 100%;
            margin-top: 16px;
        }

        .hero .right-sec .form .input2 .left,
        .hero .right-sec .form .input2 .right {
            width: 50%;
        }

        .hero .right-sec .form .input2 input,
        .hero .right-sec .form .input2 select {
            position: relative;
            width: 100%;
            /* height: 52px; */
            border-radius: 4px;
            border: 1px solid #40360D33;
            padding: 16px;
            margin-top: 8px;
            /* appearance: none; */
            background-color: transparent;
            font-family: 'Onest', sans-serif;

        }


        .hero .right-sec .form .input2 select {
            color: #808080;
        }

        .hero .right-sec .form .textarea {
            margin-top: 16px;
        }

        .hero .right-sec .form textarea {
            width: 100%;
            height: 121px;
            background-color: transparent;
            border: 4px;
            outline: none;
            border: 1px solid #40360D33;
            padding: 16px;
            margin-top: 8px !important;
        }

        .hero .right-sec .form .submit-sec {
            display: flex;
            margin-top: 16px;
            gap: 8px;

        }

        .hero .right-sec .form .submit-sec input {
            height: 24px;
            width: 24px;
            border-radius: 4px;
            border: 1px solid #D2D5DA;
        }

        .hero .right-sec .form .submit-sec p {
            font-family: 'Onest', sans-serif;
            font-weight: 500;
            font-style: medium !important;
            font-size: 18px;
            line-height: 27px;
            color: #40360D;
            letter-spacing: 0;
            margin: 0 !important;
        }

        .hero .right-sec .form .submit-sec p span {
            font-weight: 700;
        }


        .hero .right-sec .form .submit-button button {
            margin-top: 32px;
            width: 100%;
            height: 48px;
            border-radius: 10px;
            padding: 12px;
            gap: 10px;
            background-color: #0D122B;
            color: #fff;
            font-size: 14px;
            line-height: 21px;
            font-weight: 400;
            letter-spacing: 0;
        }


        .hero .left-sec .icons {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 24px;
        }


        .hero .left-sec .icons .icon {
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #FFFFFF;
            border-radius: 50px;
        }

        .hero .left-sec .icons .icon i {
            font-size: 20px;
        }


        .map-sec {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding-top: 95px;
        }


        .map-sec span {
            color: #5C5C5C;
            font-size: 18px;
            font-weight: 400;
            line-height: 130%;
        }

        .map-sec h6 {
            margin: 21px 0;
            font-weight: 500;
            font-size: 38px;
            text-align: center;
            width: 45%;
            line-height: 130%;
            letter-spacing: -2%;
        }

        .map-sec .map {
            height: 495px;
            width: 100%;
            margin-top: 45px;
            overflow: hidden;
        }

        .map-sec .map iframe {
            width: 100%;
            height: 100%;
        }

        /* nearby store */


        .nearby-store {
            background-color: #fff;
            padding-top: 80px;
        }

        .nearby-store .nearby-container img {
            height: 80px;
            width: 80px;
        }

        .nearby-store .nearby-container h6 {
            width: 100%;
            font-weight: 500;
            font-size: 52px;
            line-height: 130%;
            letter-spacing: -2%;
        }


        .nearby-store .nearby-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nearby-store .nearby-container .birds {
            width: 250px;
            height: 100px;
            margin-top: -5%;
        }

        .nearby-store .nearby-container select {
            color: #916238;
            font-size: 32px;
            font-weight: 500;
            border: none;
            outline: none;
            appearance: none;
        }

        .nearby-store .select {
            width: 100px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nearby-store .select i {
            font-size: 30px;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }






        .nearby-slider .nearby-slides {
            height: 459px;
            border-radius: 16px;
            overflow: hidden;
            transform: translateX(20%);
            position: relative;
        }


        .nearby-slider .nearby-slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .nearby-slider .nearby-slides .slider-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(180deg, rgba(0, 0, 0, 0.64) 5.61%, rgba(0, 0, 0, 0) 29.44%, rgba(0, 0, 0, 0.8) 88.8%);

            top: 0;
            left: 0;
        }


        .nearby-slider .nearby-slides .slider-overlay .nearbytop {
            padding-top: 15px;
            padding-left: 17px;
            padding-right: 17px;
            display: flex;
            justify-content: space-between;
            color: #FFFFFF;

        }


        .nearby-slider .nearby-slides .slider-overlay .nearbytop h6 {

            font-weight: 500;
            font-style: Medium;
            font-size: 22px;
            line-height: 130%;
            letter-spacing: 3%;
            vertical-align: middle;

        }


        .nearby-slider .nearby-slides .slider-overlay .nearbytop button,
        .nearby-slider .nearby-slides .slider-overlay .nearbybottom span {
            border-radius: 70px;
            border: 1.4px solid #0000000D;
            padding: 4px 12px;
            display: flex;
            gap: 8.4px;
            background: #1414144D;
            backdrop-filter: blur(5.599999904632568px);
            height: 32px;
            color: #fff;
            font-family: Onest;
            font-weight: 500;
            font-style: Medium;
            font-size: 14px;
            display: inline-block;
            line-height: 150%;
            letter-spacing: 3%;
            vertical-align: middle;

        }

        .nearby-slider .nearby-slides .slider-overlay .nearbybottom {
            width: 90%;
            height: auto;
            position: absolute;
            top: 270px;
            left: 12px;
            gap: 16.8px;

        }

        .nearby-slider .nearby-slides .slider-overlay .nearbybottom p {

            font-weight: 500;
            font-style: Medium;
            font-size: 14px;
            line-height: 150%;
            margin: 16px 0;
            letter-spacing: 3%;
            vertical-align: middle;
            color: #F1F1F1;
        }

        .nearby-store .navi {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 3rem;
            width: 100%;
            gap: 20px;
        }

        .nearby-store .navi .arrow {
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            border-radius: 3.6px;
            border: 1px solid #947E1E;
        }

        .nearby-store .navi .arrow i {
            font-size: 1.5rem;
        }

        .nearby-store .navi .arrow:hover {
            transition: all 0.5s ease-in-out;
            background-color: #947E1E;
            color: #fff;
            scale: 1.1;
            cursor: pointer;
        }


        .footer .first-row img {
            width: 336px;
            height: 190px;

        }

        .desktop-hr {
            color: transparent !important;
            border: 0;
            margin-top: 5rem !important;
            /* default border hatao */
            height: 2px;
            /* thickness */
            width: 100%;
            background: linear-gradient(90deg, #FBF5E0 1.71%, #BFA227 45.72%, #FBF5E0 101.78%);
            border-radius: 5px;
            /* optional – smooth edges */
        }



        .footer .first-row h6 {
            font-weight: 400;
            font-size: 24px;
            line-height: 100%;
            margin-top: 16px;
            color: #0A0A0A;
        }

        .footer .second-row h6 {
            font-weight: 600;
            padding-top: 30px;
            font-size: 24px;
            line-height: 31px;
            margin-bottom: 34px;
            color: #0A0A0A;
        }

        .footer .second-row a {
            color: #404040;
            text-decoration: none;
            font-weight: 400;
            margin-bottom: 22px;
            display: block;
            font-size: 18px;
        }

        .footer .second-row .icon {
            width: 48px;
            height: 48px;
            border-radius: 33px;
            border-width: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: 2px solid #F5EDCA;

        }


        .copywrite a {
            font-weight: 500;
            font-style: Medium;
            font-size: 20px;
            color: #0A0A0A;
            line-height: 130%;
            letter-spacing: -2%;
            text-decoration: none;

        }

        .copywrite img {
            width: 70px;
            height: 20px;

        }

        .bird {
            margin-top: 17rem;
            position: absolute;
            right: 0;
        }

        .end img {
            margin-top: 20px;
            width: 100%;
        }

        .phn-btn {
            display: none !important;
        }

        #mbl {
            display: none;
        }

        .mbl-sec {
            display: none;
            font-family: Onest;
            font-weight: 500;
            font-style: Medium;
            font-size: 28px;
            line-height: 120%;
            margin-top: 15px;
            letter-spacing: 0%;
            text-transform: capitalize;

        }

        .bird-sec {
            display: none;
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column-reverse;
            }

            .hero .right-sec .form .input2 {
                flex-direction: column;
            }

            .hero .right-sec .form .input2 .left,
            .hero .right-sec .form .input2 .right {
                width: 100%;
            }

            .hero .left-sec {
                width: 100%;
            }

            .hero .right-sec {
                width: 100%;
                height: 1228px;
            }

            .hero .left-sec .overlay .overlay-container {
                top: 0px;
                left: 0;
            }

            .bird-sec {
                position: absolute;
                right: 0;
                display: block;

            }

            .bird-sec img {
                width: 120px !important;
            }

            .nearby-store .nearby-container select {
                font-family: Onest;
                font-weight: 500;
                font-style: Medium;
                font-size: 18px;

                line-height: 130%;
                letter-spacing: 0%;
                text-transform: capitalize;


            }

            .nearby-store .select {
                width: 65px;
            }


            .hero .left-sec .overlay .overlay-container {
                text-align: center;
            }

            .hero .left-sec {
                height: 709px;
                background-size: contain;
                margin-top: 7rem;
            }

            .hero .left-sec .icons {
                justify-content: center;
            }

            .hero .left-sec .overlay .overlay-container h4,
            .hero .left-sec .overlay .overlay-container p {
                color: #000;
                font-size: 28px;
            }

            #dek {
                display: none;
            }

            .mbl-sec {
                display: block;
            }

            #mbl,
            #mbl2 {
                display: block;
                font-weight: 400;
                font-style: Regular;
                font-size: 15px;
                padding: 0 12px;
                line-height: 100%;
                letter-spacing: 0%;
                z-index: 99;
                text-align: center;
                color: rgba(102, 102, 102, 1);
            }

            .map-sec span {
                font-size: 12px;
                font-weight: 500;
            }

            .map-sec h6 {

                font-family: Onest;
                font-weight: 500;
                font-style: Medium;
                font-size: 30px;
                padding: 0 20px;
                line-height: 130%;
                letter-spacing: 0%;
                text-align: center;

            }

            .hero .left-sec .overlay::after {
                content: "";
                position: absolute;
                bottom: 0;
                height: 100px;
                width: 100%;
                background: linear-gradient(179.39deg, #FBF5E0 20.45%, #FFFFFF 67.46%);

            }

            #mbl2 {
                position: absolute;
                bottom: 50px;
                margin: 0;

                font-size: 14px;
                color: rgba(64, 54, 13, 1);
                transform: translateX(50%);
            }

            .hero .left-sec .icons .icon {
                border: 0.5px solid rgba(64, 54, 13, 1);
                height: 32px;
                width: 32px;
            }

            .hero .left-sec .icons .icon i {
                color: rgba(64, 54, 13, 1);
                font-size: 15px;
            }

            .hero .left-sec .overlay {
                background: none;
            }

            .map-sec h6 {
                font-size: 30px;
                width: 100%;
            }

            .map-sec .map {
                height: 400px;
            }

            .nearby-store .nearby-container {
                flex-direction: column;
                align-items: start;
                padding-left: 15px;
                position: relative;
            }

            .birds {
                display: none;
            }

            .nearby-store .nearby-container h6 {
                display: none;
            }

            .nearby-slider .nearby-slides {

                transform: translateX(5%);

            }

            .copywrite a {
                display: block;
                padding: 10px 0;
                border-bottom: 0.5px solid #e7e7e7;
            }

            .hero .right-sec .form {
                width: 100%;
                left: 0;
                padding: 0 30px;
            }

            .navbar {
                flex-direction: row;
            }

            .phn-btn {
                height: 46px !important;
                width: 109px !important;
                font-size: 14px !important;
                font-weight: 500;
                cursor: pointer;
                display: flex !important;


            }

            .desktop-hr {
                display: none !important;
            }

            .phone-hr {
                color: transparent !important;
                border: 0;
                margin-top: 5rem !important;
                /* default border hatao */
                height: 2px;
                /* thickness */
                width: 100%;
                background: linear-gradient(90deg, #FBF5E0 1.71%, #BFA227 45.72%, #FBF5E0 101.78%);
                border-radius: 5px;
                /* optional – smooth edges */
            }

            .bird {
                margin-top: 32rem;
                right: 0;
            }



        }

        @media (max-width:992px) {
            .bird {
                display: none;
            }
        }

        @media (max-width:575px) {
            .bird {
                display: block;
            }
        }
    </style>
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



        <div class="container-fluid nav-container mt-2 px-4">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aa4ec43efe01bdc08f3f6ae94dfcc7996195b2f3.png"
                    alt="">
            </a>
            <button class="talk-btn phn-btn">Let's Talk</button>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedConten" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
    <div class="hero">
        <div class="left-sec">
            <div class="overlay">
                <div class="overlay-container">
                    <h4>Customer Support</h4>
                    <p id="dek"> Have some doubt? Let’s clear it up together!</p>
                    <p id="mbl">Our friendly team is ready to assist you with any VOLT Milk Drink Powder queries.
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
                <p>We’re ready to answer your questions and assist you promptly. Our friendly team is ready to assist
                    you with any VOLT Milk Drink Powder queries.</p>

                <div class="input">
                    <label for="">Name</label>
                    <input type="text" name="" id="" placeholder="Eg: Jacob jones">
                </div>

                <div class="input2">
                    <div class="left">
                        <label for="">Email</label>
                        <input type="email" placeholder="Eg: jjacob123@gmail.com">
                    </div>

                    <div class="right">
                        <label for="">Phone Number</label>
                        <input type="phone" placeholder="+679 | Eg: 9876543210">
                    </div>
                </div>

                <div class="input2">
                    <div class="left">
                        <label for="">Your Location</label>
                        <select name="cars" id="cars">
                            <option value="volvo">Eg: Savusavu, Vanua Levu, Fiji</option>

                        </select>

                    </div>

                    <div class="right">
                        <label for="">Query Type</label>
                        <select name="cars" id="cars">
                            <option value="volvo">Problem with the Product</option>

                        </select>
                    </div>
                </div>

                <div class="input textarea">
                    <label for="">Query</label>
                    <textarea name="" id="" placeholder="Eg: Your Query"></textarea>

                </div>

                <div class="submit-sec">
                    <input type="checkbox">
                    <p>By submitting the above form, you consent to our <span>terms and conditions.</span></p>
                </div>

                <div class="submit-button">
                    <button>Submit</button>
                </div>

            </div>
        </div>
    </div>

    <div class="map-sec">
        <span>OUR LOCATION</span>
        <h6>Carpenters Fiji Pte Ltd / Morris Hedstrom Head Office, 34 Rodwell Road, Suva, Fiji</h6>
        <div class="d-flex  align-items-center justify-content-center">
            <img height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/assets/images/light.png" alt="">
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps?q=Carpenters+Fiji+Pte+Ltd+Morris+Hedstrom+Head+Office,+34+Rodwell+Road,+Suva,+Fiji&output=embed"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>


    <div class="nearby-store pb-5">
        <div class="container ">
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
                <?php
        $stores = new WP_Query(array(
            'post_type' => 'store',
            'posts_per_page' => -1
        ));

        // Default values
        $default_image = get_template_directory_uri() . '/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png';
        $default_name = 'Extra Supermarket';
        $default_distance = '1.2Km';
        $default_address = 'VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji';
        $default_phone = '+679 338 7142';
        $default_hours = 'Mon - Sun <br> (10:00 AM - 09:00 PM)';

        if ($stores->have_posts()):
            while ($stores->have_posts()): $stores->the_post();
                // Get ACF image field as array
                $image_field = get_field('image');
                $store_image = $image_field && isset($image_field['url']) ? $image_field['url'] : $default_image;

                $store_name = get_the_title() ?: $default_name;
                $store_distance = get_field('distance') ?: $default_distance;
                $store_address = get_field('address') ?: $default_address;
                $store_phone = get_field('phone') ?: $default_phone;
                $store_hours = get_field('hours') ?: $default_hours;
        ?>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo esc_url($store_image); ?>" alt="<?php echo esc_attr($store_name); ?>">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6><?php echo wp_kses_post($store_name); ?></h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>
                            <div class="nearbybottom">
                                <span><?php echo esc_html($store_distance); ?></span>
                                <p><?php echo esc_html($store_address); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <i class="ri-phone-line"></i>
                                        <?php echo esc_html($store_phone); ?>
                                    </span>
                                    <p><?php echo wp_kses_post($store_hours); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
        ?>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo esc_url($default_image); ?>" alt="Default Store">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6><?php echo $default_name; ?></h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>
                            <div class="nearbybottom">
                                <span><?php echo $default_distance; ?></span>
                                <p><?php echo $default_address; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <i class="ri-phone-line"></i>
                                        <?php echo $default_phone; ?>
                                    </span>
                                    <p><?php echo wp_kses_post($default_hours); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
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


    <div class="footer pt-5 ">
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
                                <img width="30" height="30"
                                    src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new" />
                            </div>
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/color/48/instagram-new--v1.png"
                                    alt="instagram-new--v1" />

                            </div>
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/ios-glyphs/30/twitterx--v2.png" alt="twitterx--v2" />
                            </div>
                            <img class="bird" src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="desktop-hr">
    <div class="copywrite mt-5 d-sm-flex align-items-center justify-content-between container">
        <div class="d-sm-flex align-items-center gap-4">
            <a href="">Privacy Policy</a>
            <a href="">Terms & Conditions</a>
            <a href="">FAQs</a>
        </div>
        <hr class="phone-hr">

        <div class="text-center  text-sm-start">
            <a href="#">Carefully Crafted By <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3minds.png"
                    alt=""></a>
        </div>
    </div>

    <div class="end">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 140915.png" alt="">
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true, // <-- enables infinite loop
            navigation: {
                nextEl: ".right",
                prevEl: ".left",
            },
            watchOverflow: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
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
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
