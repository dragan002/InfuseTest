<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="header sm-mb-8 md-mb-4 xl-mb-7">
        <div class="wrapper wrapper--narrow">
            <nav class="grid">
                <div class="header__mobile-nav grid">
                    <img src="assets/images/envelope.svg" class="ml-4 col-span-4" alt="">
                    <div class="header__hamburger-menu mr-4 col-start-11">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                
                <div class="header__off-screen-menu">
                    <ul class="grid mt-12 ml-2 sm-mt-2 pt-10 md-pt-5">
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-2 xl-col-start-2"><a href="#">What We Do <img src="assets/logos/Symbol.svg" alt=""></a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1"><a href="#">Our Clients</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-2 xl-col-span-1"><a href="#">Our Audience</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1 "><a href="#">Our Model</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1 xl-col-start-8"><a href="#">Insights</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1 xl-col-start-9"><a href="#">Our Company <img src="assets/logos/Symbol.svg" alt=""></a></li>
                        <button type="submit" class="contact__form-button c-button--secondary p-1 pr-3 pl-3 col-span-7 sm-col-span-12 md-col-span-6 lg-col-span-3 xl-col-start-12"><a href="">Contact Us</a>
                        <svg width="29px" height="25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                            <path fill="#ff0000" stroke="#ff0000" stroke-width="2" d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z" data-name="Right"/>
                        </svg> 
                </div>
            </nav>
        </div>
    </header>

<main>
    <div class="contact grid" >
        <div class="grid lg-col-span-6">
            <div class="contact__info grid" id="image-section">
                <img class="contact__info-image col-span-full" src="assets/images/buildingImage.jpeg" alt="">
                <div class="contact__info-text mt-8 pt-3 pb-3 pl-10 pr-10 text-center background-light col-span-full">
                    <h4>OurCompany Inc.</h4>
                    <p class="color-grey-100">
                        1110 Brickell Avenue,<br>
                        Suite 400<br>
                        Miami, FL 33153
                    </p>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-narrow contact__form grid lg-pr-2 lg-col-start-7 lg-col-end-12">
            <div class="contact__form-title text-center mt-2 mb-1 xxl-pr-9">
                <h2 class="h1">Contact Us</h2>
                <p class="color-grey-100">WE UNDERSTAND THE INTRICACIES OF THE B2B LANDSCAPE AND THE EVER-EVOLVING NATURE OF MARKETING STRATEGIES</p>
            </div>
            <form action="" class="contact__form-fields grid md-pb-0 md-pl-8 md-pr-8 lg-pl-0 lg-pr-0 lg-mb-6 xl-mb-14 xxl-pr-10">
                <!-- Name input -->
                <div class="contact__form-group contact__form-group--modifier grid lg-col-span-6">
                    <label for="name" class="contact__form-label">Name:</label>
                    <input type="text" id="name" name="name" class="contact__form-input lg-m-0" required>
                </div>

                <!-- Email input -->
                <div class="contact__form-group contact__form-group--modifier grid lg-col-span-6">
                    <label for="email" class="contact__form-label lg-m-0">Email:</label>
                    <input type="email" id="email" name="email" class="contact__form-input" required>
                </div>

                <!-- Message textarea -->
                <div class="contact__form-group contact__form-group--modifier grid">
                    <label for="message" class="contact__form-label">Message:</label>
                    <textarea id="message" name="message" class="contact__form-input contact__form-textarea" rows="6" required></textarea>
                </div>

                <!-- Submit button -->
                <div class="contact__form-group col-start-4 sm-col-start-5 col-end-12 lg-col-start-1">
                    <button type="submit" class="contact__form-button c-button--primary color-light p-1 pr-3 pl-3"><a href="">Contact Us</a>
                    <svg width="29px" height="25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                        <path fill="#fff" stroke="#fff" stroke-width="2" d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z" data-name="Right"/>
                    </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="logos mb-10 mt-10">
        <div class="wrapper wrapper--narrow">
                <img src="assets/logos/logosDesktop.png" class="logos__desktop" alt="">
                <img src="assets/logos/logosMobile.png" class="logos__mobile p-3 pt-7" alt="">
        </div>
    </div>

    <div class="about-us">
        <div class="wrapper wrapper--narrow">
            <h1 class="about-us__title">YEARS OF EXPERIENCE & DEEP EXPERTISE</h1>
        </div>
            <div class="about-us__content grid">
                <img src="assets/logos/bg.jpg" alt="" class="about-us__background col-span-full" alt="not available">
                <img src="assets/logos/Group 39627.png" class="about-us__desktop background-light pt-4 pb-4 pr-4 pl-4 col-start-7 col-end-13" alt="">
            </div>
            <img src="assets/logos/Group 39646.png" class="about-us__mobile p-3 sm-p-10" alt="">
    </div>
<!-- ======================= -->
<div class="gtmStrategies pt-8 pb-8 lg-pb-13">
    <div class="wrapper wrapper--narrow">
        <h1>HOW WE TURN CLIENTS’ GTM STRATEGIES INTO SUCCESS</h1>
        <div class="swiper-buttons">
            <div class="swiper-button-prev-container">
                <div class="swiper-button-prev"></div>
                <img src="assets/logos/Group 39596.png" alt="">
            </div>
            <div class="swiper-button-next-container">
                <img src="assets/logos/Rectangle 3743.png" alt="">
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide gtmStrategies__card">
                    <p>The programs have run more efficiently than they promised making it easy for me to hit my targets in advance of my deadlines</p>
                    <span>Marketing and Advertising</span>
                    <p>Demand Content</p>
                </div>

                <div class="swiper-slide gtmStrategies__card">
                    <p>This was a truly full-service experience. All I had to do was provide information about the target audiences and access to our library of content.</p>
                    <span>Software Development</span>
                    <p>Demand Intent</p>
                </div>

                <div class="swiper-slide gtmStrategies__card">
                    <p>Consistency of lead flow month over month. The data and leads we have gotten have been quite solid and sales' initial feedback is positive.</p>
                    <span>Information Technology and Services</span>
                    <p>Demand Convert</p>
                </div>
            </div>
            <img src="assets/logos/quotes.svg" alt="" class="gtmStrategies__quote"
        </div>
    </div>
</div>
<!-- ============================= -->

</main>

<footer>
    <div class="wrapper wrapper--narrow">
        <div class="footer__container grid">
            <p class="col-span-6 lg-col-span-4">TERMS & CONDITIONS</p>
            <p class="col-span-6 lg-col-span-4">COOKIE POLICY(US)</p>
            <p class="col-span-full lg-col-span-4">PRIVACY POLICY</p>
            <p class="color-dark col-span-full lg-pt-3">© 2024 OurCompany | All Rights Reserved</p>
        </div>
    </div>
</footer>





<script>
document.addEventListener('DOMContentLoaded', function () {
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30
    });
});
</script>


    <script>
        const hamburgerMenu = document.querySelector('.header__hamburger-menu');
        const offScreenMenu = document.querySelector('.header__off-screen-menu');

        hamburgerMenu.addEventListener('click', () => {
            hamburgerMenu.classList.toggle('active');
            offScreenMenu.classList.toggle('active');
        });
    </script>
</body>
</html>
