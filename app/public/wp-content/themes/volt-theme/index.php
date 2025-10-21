<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
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
    position: fixed !important;
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
    z-index: 999;
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
    background-image: url('./assets/b0445bc11c223ec249a004bbb6af456bcc7eec51.png');
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
    opacity: 0.4;
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


.containers {
    margin: 0 auto;
    width: 90%;

}

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

#mbl2 {
    display: none;
}

.nearby-store .nearby-container select {
    color: #916238;
    font-size: 32px;
    font-weight: 500;
    background-color: transparent;
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
    line-height: 125%;
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

.nearby-slider .nearby-slides .slider-overlay .nearbytop button,
.nearby-slider .nearby-slides .slider-overlay .nearbybottom span i {
    display: flex;
    gap: 10px;
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

.mbl-footer {
    display: none;
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

.home-phn {
    display: none;
}

.mbl-copy {
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
        height: 1080px;
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

    .light-icon {
        height: 20px !important;
        width: 20px !important;
    }

    .nearby-slider .nearby-slides .slider-overlay .nearbytop h6 {
        font-size: 16px;
    }

    .nearby-slider .nearby-slides .slider-overlay .nearbytop button,
    .nearby-slider .nearby-slides .slider-overlay .nearbybottom span {
        font-size: 10px;
    }

    .nearby-slider .nearby-slides .slider-overlay .nearbybottom p {
        font-size: 12px;
        line-height: 130%;
    }

    .nearby-slider .nearby-slides .slider-overlay .nearbybottom {
        top: 290px;
    }

    .nearby-store .navi {
        display: none;
    }

    #mbl,
    #mbl2 {
        display: block;
        font-weight: 400;
        font-style: Regular;
        font-size: 15px;
        padding: 0 12px;
        line-height: 130%;
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

    .mbl-footer .first-row h6 {
        font-size: 18px;
        font-weight: 400;
    }

    .mbl-footer .second-row h6 {
        font-size: 18px;
        margin-bottom: 17px;
    }

    .mbl-footer .second-row a {
        margin-bottom: 18px;
    }

    #mbl2 {
        position: absolute;
        bottom: 50px;
        margin: 0;
        transform: translate(-50%, 0);
        left: 50%;
        font-size: 14px;
        color: rgba(64, 54, 13, 1);
    
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
        /* border-bottom: 0.5px solid #e7e7e7; */
    }

    .hero .right-sec .form {
        width: 100%;
        left: 0;
        padding: 0 30px;
    }

    .navbar {
        position: absolute !important;
        flex-direction: row;
    }

    .navbar .nav-container .talk-btn {
        margin-right: -70px;
    }

    .menu-btn {

        background: #f9f9f9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .menu-btn span {
        position: relative;
        display: block;
        width: 18px;
        height: 1px;
        left: -8px;
        border-radius: 1px;
        transition: 0.3s ease;
    }

    .navbar-toggler {
        background: rgba(249, 249, 249, 1);
        border: 0.69px solid rgba(240, 240, 240, 1);
        height: 40px;
        width: 40px;
        border-radius: 10px !important;
        border-width: 0.69px;
        padding-top: 8.31px;
        padding-right: 11.08px;
        padding-bottom: 8.31px;
        padding-left: 11.08px;
        gap: 8.31px;

    }

    .navbar-toggler:focus {
        box-shadow: none !important;
    }

    .menu-btn span::before,
    .menu-btn span::after {
        content: "";
        position: absolute;
        width: 18px;
        height: 2px;
        background: #000;
        border-radius: 2px;
        transition: 0.3s ease;
    }

    .menu-btn span::before {
        top: -6px;
    }

    .menu-btn span::after {
        top: 6px;
    }

    /* When Active (Cross) */
    .menu-btn.active span {
        background: transparent;
    }

    .menu-btn.active span::before {
        transform: rotate(45deg);
        top: 0;
    }

    .menu-btn.active span::after {
        transform: rotate(-45deg);
        top: 0;
    }


    .nav-container {
        padding: 0 10px !important;
    }

    .phn-btn {
        height: 43px !important;
        width: 103px !important;
        font-size: 14px !important;
        font-weight: 500;
        cursor: pointer;
        display: flex !important;
    }

    .home-phn {
        display: block;
        width: 100% !important;

        font-style: Regular;
        font-size: 15px !important;
        color: rgba(102, 102, 102, 1);
        line-height: 100%;
        letter-spacing: 0%;
        text-align: center;

    }

    .desktop-footer {
        display: none;
    }

    .mbl-footer {
        display: block;
    }

    .swiper-slide {
        width: auto !important;
        flex-shrink: 0;
        min-width: 160px;

    }

    .right-para {
        display: none;
    }

    .hero .right-sec .form h2 {
        font-size: 28px;
        text-align: center;
    }

    .navbar {
        height: 100px;
    }

    .hero .right-sec .form .submit-sec p {
        font-size: 12px;
        line-height: 18px;
        font-weight: 400;
    }

    .hero .right-sec .form .submit-sec {
        align-items: center;
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
        margin-top: 41rem;
        right: 0;
        width: 115px;
    }

    .accordion-item {
        border-bottom: 1px solid #ddd;
        background: #fff9e5;
        /* optional soft background like your image */
    }

    .accordion-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        padding: 0px 10px;
    }


    .accordion-header h6 {
        margin: 0;
        font-size: 16px;
        font-weight: 500;
    }

    .accordion-header .icon {
        font-size: 22px;
        transition: transform 0.3s ease;
    }

    .accordion-content {
        display: none;
        padding: 0 10px 10px;
        flex-direction: column;
    }

    .accordion-content a {
        display: block;
        color: #000;
        font-size: 15px;
        text-decoration: none;
        padding: 5px 0;
        transition: 0.2s;
    }

    .accordion-content a:hover {
        color: #bfa227;
        /* gold accent */
    }

    /* When active */
    .accordion-item.active .accordion-content {
        display: block;
    }

    .accordion-item.active .icon {
        transform: rotate(45deg);
    }

    .accordion-item {
        background-color: transparent !important;
        border: none !important;
    }

    .mbl-copy {
        display: block !important;
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

.home-banner {
    position: relative;
    height: 750px;
    width: 100%;
}

.home-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.home-banner::after {
    content: "";
    position: absolute;
    top: 600px;
    left: 0;
    width: 100%;
    backdrop-filter: blur(2px);
    height: 470px;
    background: linear-gradient(181.41deg, rgba(248, 242, 220, 0) 11.59%, #FBF6E0 43.92%);
}

.home-overlayer {
    position: absolute;
    top: 120px;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: 100%;
    text-align: center;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    /* Example overlay color */
}

.home-overlayer img {
    height: 600px;
    width: auto;

}

.home-banner .home-overlayer h6 {
    font-weight: 600;
    font-size: 32px;
    line-height: 39px;
    color: rgba(255, 255, 255, 1);
    margin-bottom: 11px;
}

.home-banner .home-overlayer h1 {
    font-weight: 600;
    font-size: 82px;
    line-height: 69px;
    letter-spacing: -2px;
    color: rgba(255, 255, 255, 1);
    text-align: center;
    margin-bottom: -5rem;

}

.explore-button button {
    background-color: #0D122B;
    color: #fff;
    height: 55px;
    display: flex;
    margin-top: -7rem;
    align-items: center;
    justify-content: center;
    width: auto;
    position: relative;
    z-index: 99;
    border: none;
    border-radius: 15px;
    padding: 18px;
    font-family: 'Onest', sans-serif;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
}


.our-products-slider {
    border-radius: 12px;
    height: 720px;
    background: linear-gradient(159.88deg, #F5EECE 31.91%, #F0E6B7 98.37%);
    width: 90%;
    margin: 0 auto;
}

.our-products-slider .product {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.our-products-slider .product::after {
    content: "";
    position: absolute;
    background: url('./assets/cloud.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    top: 67px;
    right: 0;
    transform: rotateY(185deg);
    width: 34%;
    height: 400px;
    z-index: -1;
}


.our-products-slider .product::before {
    content: "";
    position: absolute;
    background: url('./assets/cloud.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    top: 200px;
    left: 0;
    width: 34%;
    height: 400px;
    z-index: -1;
}

.our-products-slider .product img {
    width: 672px;
    height: 720px;


}

.our-products-slider .product .overlayer {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 45px;
}



.our-products-slider .product .overlayer .top-sec h6 {
    font-weight: 500;
    font-style: Medium;
    font-size: 52px;
    line-height: 130%;
    letter-spacing: -2%;
    width: 40%;
    color: rgba(45, 29, 15, 1);

}

.our-products-slider .product .overlayer .top-sec p {
    font-family: Onest;
    font-weight: 400;
    font-style: Regular;
    font-size: 18px;
    line-height: 100%;
    letter-spacing: 0%;
    color: rgba(102, 102, 102, 1);
}

.our-products-slider .product .overlayer .top-sec h2 {
    color: rgba(73, 42, 12, 1);
    width: 100%;
    font-weight: 600;
    font-size: 28px;
    line-height: 100%;
    letter-spacing: 0%;
    text-align: right;
}

.our-products-slider .product .overlayer .bottom-sec {
    width: 796px;
    height: 140px;
    border-radius: 196px;
    top: 80%;
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    border-width: 6px;
    padding-top: 16px;
    padding-right: 62px;
    padding-bottom: 16px;
    padding-left: 62px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(230, 207, 142, 1);
    border: 6px solid rgba(255, 247, 212, 1)
}


.our-products-slider .product .overlayer .bottom-sec .text-center p {
    font-family: Onest;
    font-weight: 500;
    font-style: Medium;
    font-size: 16px;
    line-height: 140%;
    letter-spacing: -2%;
    text-align: center;
    color: rgba(99, 85, 66, 1);

}

.our-products-slider .product .overlayer .bottom-sec .text-center h3 {
    font-family: Onest;
    font-weight: 600;
    font-style: SemiBold;
    font-size: 32px;
    line-height: 140%;
    letter-spacing: -5%;
    text-align: center;
    text-transform: capitalize;
    color: rgba(64, 40, 8, 1);
    margin: 0;

}

.our-products-slider .product .overlayer .bottom-sec .line {
    width: 150px;
    height: 0px;
    transform: rotate(-90deg);
    opacity: 1;
    border-width: 1.5px;
    border: 1.5px solid rgba(255, 247, 212, 1)
}



.product-arrow {
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    position: absolute;
    right: 250px;
    bottom: 70px;
    border-radius: 3.6px;
    border: 1px solid #947E1E;
    z-index: 99;
    cursor: pointer;

}


.product-arrow-r {
    height: 36px;
    display: flex;
    align-items: center;
    cursor: pointer;
    justify-content: center;
    width: 36px;
    position: absolute;
    right: 180px;
    bottom: 70px;
    border-radius: 3.6px;
    border: 1px solid #947E1E;
    z-index: 99;

}


.product-arrow:hover,
.product-arrow-r:hover {
    background-color: #947E1E;
    scale: 1.1;
}


.product-arrow:hover i,
.product-arrow-r:hover i {
    color: #fff;
}

.aboutus {
    height: 676px;
    display: flex;
    align-items: center;
    width: 90% !important;
    margin: 0 auto;
    justify-content: center;
}

.aboutus .aboutleft {
    width: 625px;
    height: 503px;
    border-radius: 24px;
    overflow: hidden;

}

.aboutus .aboutleft img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.aboutright {
    display: flex;
    height: 100%;
    align-items: start;
    flex-direction: column;
    justify-content: center;
    position: relative;
}

.aboutright::before {
    content: "";
    position: absolute;
    top: -10rem;
    right: 0;
    width: 500px;
    height: 500px;
    background-image: url('./assets/cloud.png');
    background-position: center;
    background-repeat: no-repeat;
}

.aboutright p {
    font-weight: 400;
    font-style: Regular;
    font-size: 18px;
    line-height: 130%;
    letter-spacing: 0%;
    text-transform: uppercase;
    color: rgba(92, 92, 92, 1);
}

.aboutright h6 {

    font-weight: 500;
    font-style: Medium;
    font-size: 52px;
    color: rgba(45, 29, 15, 1);
    line-height: 130%;
    letter-spacing: -2%;


}

.volt-drink h1 {
    font-weight: 500;
    font-style: Medium;
    font-size: 52px;
    line-height: 130%;
    letter-spacing: -2%;
    color: (45, 29, 15, 1);

}

.volt-drink {
    height: 873px;
    background-color: rgba(255, 255, 255, 1);
    padding-top: 72px;
    text-align: center;
}


.volt-marq .box {
    width: 224px;
    height: 200px;
    flex: 0 0 auto;
    overflow: hidden;
    border-radius: 24px;

}

.volt-marq .box img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.volt-marq {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    display: flex;
    align-items: center;
    margin: 2rem 0;
    border-radius: 24px;
    position: relative;
}

.marquee-track {
    display: flex;
    animation: scroll 25s linear infinite;
    width: max-content;
    gap: 32px;

}



@keyframes scroll {
    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-50%);
    }
}

.ready {
    width: 90%;
    margin: 3rem auto;
    height: 316px;
    border-radius: 12px;
    background-image: url('./assets/4a11b3e2172301c07e8c34ff3797a3a90929944c\ \(1\).jpg');
}

.ready-left {
    display: flex;
    align-items: start;
    justify-content: center;
    flex-direction: column;
    gap: 10px;
    height: 100%;
    text-align: start !important;
    padding-left: 2rem;
}

.ready-left h5 {
    font-weight: 500;
    font-style: Medium;
    font-size: 36px;
    line-height: 100%;
    letter-spacing: -2%;
    color: rgba(46, 85, 116, 1);

}

.ready-left p {
    font-weight: 400;
    font-style: Regular;
    font-size: 24px;
    line-height: 100%;
    width: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: rgba(55, 101, 136, 1);
}

.ready-left img {
    height: 50px;
    width: max-content;
}

.ready-left a {
    text-decoration: none;
}

.ready-right {
    height: 100%;
    width: 100%;
}

.ready-right img {
    height: 100%;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
}

.our-recipes {
    height: 748px;
    position: relative;
}



.our-recipes h1 {
    font-weight: 500;
    text-align: center;
    padding-top: 65px;
    font-style: Medium;
    font-size: 52px;
    line-height: 100%;
    letter-spacing: -2%;
    color: rgba(45, 29, 15, 1);
}

.learnmore {
    width: 110px;
    height: 39px;
    border-radius: 10px;
    padding-top: 12px;
    padding-bottom: 14px;
    background-color: rgba(255, 255, 255, 1);
    font-weight: 600;
    font-size: 14px;
    line-height: 100%;
    letter-spacing: -1%;

}

.bottom-div {
    top: 80% !important;
}

.poll {
    height: 782px;
    overflow: hidden;
    width: 100%;
    position: relative;
}

.poll-img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.poll::before {
    content: "";
    position: absolute;
    height: 403px;
    opacity: 1;
    top: -128px;
    left: 0;
    backdrop-filter: blur(1px);
    transform: rotate(-180deg);
    width: 100%;
    background: linear-gradient(185.24deg, rgba(248, 242, 220, 0) 22.68%, #FBF6E0 44.63%);

}

.poll-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;

}

.right-poll {
    width: 100%;
    height: 294px;
    border-radius: 16.8px;
    opacity: 1;
    background: var(--Colors-Neutral-100, rgba(255, 255, 255, 1));
    text-align: center;
    position: relative;
    overflow: hidden;
}

.right-poll h5 {
    font-weight: 500;
    font-style: Medium;
    font-size: 22px;
    line-height: 100%;
    letter-spacing: -1%;
    text-align: center;
    color: rgba(255, 255, 255, 1);
    position: relative;
    z-index: 9;
    padding-top: 30px;
}

.right-poll::before {
    content: "";
    background-color: #000;
    position: absolute;
    height: 100px;
    width: 100%;
    left: 0;
    top: 0;
}

.poll-container h2 {
    font-weight: 500;
    font-style: Medium;
    font-size: 52px;
    line-height: 100%;
    letter-spacing: -2%;
    color: rgba(255, 255, 255, 1);
}

.poll-container p {
    font-weight: 400;
    font-style: Regular;
    font-size: 18px;
    color: rgba(255, 255, 255, 1);
    line-height: 100%;
    letter-spacing: 0%;
    width: 50%;
    padding-top: 20px;
}

.right-poll button {
    width: 270px;
    height: 58px;
    border-radius: 8.4px;
    justify-content: space-between;
    opacity: 1;
    border-width: 1.4px;
    padding: 14px;
    text-align: start;
    font-weight: 500;
    font-style: Medium;
    font-size: 20px;
    color: rgba(20, 20, 20, 1);
    line-height: 100%;
    letter-spacing: -1%;
    background-color: rgba(20, 20, 20, 0.15);
    border: 1.4px solid rgba(0, 0, 0, 0.05)
}

.polloverlayer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20%;
}

.polloverlayer img {
    filter: invert(100%);
}


@media (max-width: 768px) {
    .home-overlayer {
        top: 80px;
        background-color: rgb(0 0 0 / 17%);
    }

    .home-banner .home-overlayer h6 {
        font-size: 26px;
        font-weight: 600;
    }

    .home-banner {
        height: 900px;
    }

    .home-overlayer img {
        height: 510px;
        margin-top: 97px;
        width: 100%;
    }

    .home-banner .home-overlayer h1 {
        font-size: 46px;
    }

    .home-banner .home-overlayer h1 {
        font-size: 45px;
    }

    .home-banner::after {
        height: 400px;
    }

    .explore-button button {
        margin-top: -3rem;
    }

    .our-products,
    .aboutus {
        display: none;
    }

    .volt-drink h1 {
        font-size: 32px;
        font-weight: 700;
    }

    .explore-button button {
        font-size: 12px;
        font-weight: 600;
        height: 36px;

    }

    .volt-drink {
        height: 968px;
    }

    .ready {
        height: 480px;
    }

    .ready-left {
        padding: 0;
        align-items: center;
    }

    .ready-left h5 {
        text-align: center;
        font-size: 28px;
        font-weight: 600;
    }

    .ready-left p {
        font-size: 14px;
        text-align: center;
        line-height: 140%;
        font-weight: 400;
    }




    .poll-container h2 {
        position: relative;
        z-index: 99;
        font-size: 32px;
        font-weight: 500;
        text-align: center;
    }

    .poll-container p {
        width: 100%;
        font-size: 14px;
        font-weight: 400;
        text-align: center;
    }

    .right-poll {
        width: 81%;
        margin: 120px auto;
        height: 291px;
    }

    .polloverlayer {
        top: 180px;
    }

    .poll-over {
        position: absolute;
        top: 0;
        width: 100%;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),
            linear-gradient(180.03deg, rgba(0, 0, 0, 0.4) 9.72%, rgba(0, 0, 0, 0) 99.98%);
        height: 100%;
    }

    .polloverlayer .marques {
        border-width: 1px, 0px, 1px, 0px;

        border-style: solid;

        border-color: rgba(204, 204, 204, 0.2);


    }

    .polloverlayer .marque-content span {
        font-size: 12px;
        font-weight: 500;
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


    <div class="home-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="">
        <div class="home-overlayer">
            <h6>Quality you trust.</h6>
            <h1>Taste You Love.</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-1.png" alt="">
            <div class="explore-button">
                <button>Explore Product</button>
            </div>
        </div>
    </div>
    <div class="marques mt-sm-5 pt-sm-5">
        <div class="marque-content text-black">
            <span class="text-black mx-5">NO ADDITIONAL PRESERVATIVES</span>
            <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
            <span class="text-black mx-5">LOW CALORIE</span>
            <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
            <span class="text-black mx-5">NATURAL INGREDIENTS</span>
            <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">

            <span class="text-black mx-5">NO ADDITIONAL PRESERVATIVES</span>
            <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
            <span class="text-black mx-5">LOW CALORIE</span>
            <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
            <span class="text-black mx-5">NATURAL INGREDIENTS</span>
            <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
        </div>
    </div>


    <div class="our-products position-relative mt-5">
        <div class="swiper our-products-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" alt="" />
                        <div class="overlayer">
                            <div class="top-sec d-flex justify-content-between">
                                <div class="w-100">
                                    <h6>Milk Drink Powder</h6>
                                    <p>
                                        Discover our flagship favorites <br> trusted by generations, loved
                                        by <br> every Fijian home.
                                    </p>
                                    <div class="explore-button">
                                        <button class="m-0">Explore Product</button>
                                    </div>
                                </div>
                                <h2>Our Products</h2>
                            </div>

                            <div class="bottom-sec">
                                <div class="text-center">
                                    <p>Vitamin A <br />up to</p>
                                    <h3>180mcg</h3>
                                </div>
                                <div class="line"></div>
                                <div class="text-center">
                                    <p>Potassium <br />up to</p>
                                    <h3>250mg</h3>
                                </div>
                                <div class="line"></div>
                                <div class="text-center">
                                    <p>Protein<br />up to</p>
                                    <h3>26g</h3>
                                </div>
                                <div class="line"></div>
                                <div class="text-center">
                                    <p>Calcium <br />up to</p>
                                    <h3>912mg</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2nd Slide -->
                <div class="swiper-slide">
                    <div class="product">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" alt="" />
                        <div class="overlayer">
                            <div class="top-sec d-flex justify-content-between">
                                <div class="w-100">
                                    <h6>Milk Drink Powder</h6>
                                    <p>
                                        Discover our flagship favorites trusted by generations, loved
                                        by every Fijian home.
                                    </p>
                                    <div class="explore-button">
                                        <button class="m-0">Explore Product</button>
                                    </div>
                                </div>
                                <h2>Our Products</h2>
                            </div>

                            <div class="bottom-sec">
                                <div class="text-center">
                                    <p>Vitamin A <br />up to</p>
                                    <h3>180mcg</h3>
                                </div>
                                <div class="line"></div>
                                <div class="text-center">
                                    <p>Potassium <br />up to</p>
                                    <h3>250mg</h3>
                                </div>
                                <div class="line"></div>
                                <div class="text-center">
                                    <p>Protein<br />up to</p>
                                    <h3>26g</h3>
                                </div>
                                <div class="line"></div>
                                <div class="text-center">
                                    <p>Calcium <br />up to</p>
                                    <h3>912mg</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ✅ Move arrows OUTSIDE swiper container -->
        <div class="product-arrow">
            <i class="ri-arrow-left-s-line left-arw"></i>
        </div>
        <div class="product-arrow-r">
            <i class="ri-arrow-right-s-line right-arw"></i>
        </div>
    </div>

    <div class="aboutus">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="aboutleft">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">

                    <div class="aboutright">
                        <p>About Us</p>
                        <h6>Driving Fiji’s food industry <br> forward with quality, <br> innovation and trust.</h6>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <div class="d-flex justify-content-end w-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="volt-drink">
        <h1>@voltdrinks</h1>
        <div class="explore-button d-flex align-items-center justify-content-center">
            <button class="m-0">Follow Us</button>
        </div>

        <div class="volt-marq">
            <div class="marquee-track">
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" alt=""></div>

                <!-- duplicate for smooth infinite loop -->
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" alt=""></div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" alt=""></div>
            </div>

        </div>
        <div class="ready">
            <div class=" container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 col-sm-7">
                        <div class="ready-left">
                            <h5>Ready to Join Us?</h5>
                            <p>Where you belong, grows stronger with <br> you. Join our community.</p>
                            <div>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-removebg-preview.png" alt="">
                                </a>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5">
                        <div class="ready-right position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="our-recipes">
        <h1>Our Recipes</h1>
        <div class="swiper mySwiper nearby-slider mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Savory <br>
                                    Morning Delight</h6>
                                <button><i class="ri-history-line"></i>1.2Hrs</button>
                            </div>

                            <div class="nearbybottom bottom-div">
                                <span>Vegan</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        Gluten Free
                                    </span>
                                    <button class="learnmore">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shake.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Herb-Infused <br>
                                    Breakfast Treat</h6>
                                <button><i class="ri-history-line"></i>1.2Hrs</button>
                            </div>

                            <div class="nearbybottom bottom-div">
                                <span>Vegan</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        Gluten Free
                                    </span>
                                    <button class="learnmore">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cake.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Crunchy Bites <br>
                                    Breakfast </h6>
                                <button><i class="ri-history-line"></i>1.2Hrs</button>
                            </div>

                            <div class="nearbybottom bottom-div">
                                <span>Vegan</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        Gluten Free
                                    </span>
                                    <button class="learnmore">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/roll.png" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Vegan <br>
                                    Chocolate Roll</h6>
                                <button><i class="ri-history-line"></i>1.2Hrs</button>
                            </div>

                            <div class="nearbybottom bottom-div">
                                <span>Vegan</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        Gluten Free
                                    </span>
                                    <button class="learnmore">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6>Savory <br>
                                    Morning Delight</h6>
                                <button><i class="ri-history-line"></i>1.2Hrs</button>
                            </div>

                            <div class="nearbybottom bottom-div">
                                <span>Vegan</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        Gluten Free
                                    </span>
                                    <button class="learnmore">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="poll position-relative">
        <img class="poll-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/poll.jpg" alt="">
        <div class="poll-over">
            <div class="poll-container">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <div class="d-flex align-items-sm-start h-100 justify-content-center flex-column">
                                <h2>Poll for Future <br> Volt Flavor</h2>
                                <p>Vote for our next flavour and get <br> 5% off for sharing your pick!</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="right-poll">
                                <h5>Let’s choose <br> between the two</h5>
                                <div class="d-flex align-items-center justify-content-center gap-3  flex-column">
                                    <button class="mt-5">Sweet</button>
                                    <button>Savoury</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="polloverlayer">
                <div class="marques mt-5 ">
                    <div class="marque-content text-white">
                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">

                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="nearby-store pb-5">
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
                // Mobile (up to 640px)
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                // Tablet (641px to 1024px)
                641: {
                    slidesPerView: 2,
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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
