<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <header class="header sm-mb-3">
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
                    <ul class="grid mt-12 ml-2 sm-mt-2">
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-2"><a href="#">What we do</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1"><a href="#">Our Clients</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-2"><a href="#">Our Audience</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1"><a href="#">Our Model</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1"><a href="#">Insights</a></li>
                        <li class="sm-col-span-4 md-col-span-3 lg-col-span-1"><a href="#">Our Company</a></li>
                        <button type="submit" class="contact__form-button c-button--secondary p-1 pr-3 pl-3 col-span-7 sm-col-span-12 md-col-span-6 lg-col-span-3"><a href="">Contact Us</a>
                        <svg width="29px" height="25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                            <path fill="#ff0000" stroke="#ff0000" stroke-width="2" d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z" data-name="Right"/>
                        </svg> 
                </div>
            </nav>
    </header>

<main>
    <div class="contact">
        <div class="contact__info grid">
            <img class="contact__info-image col-span-full" src="assets/images/buildingImage.jpeg" alt="">
            <div class="contact__info-text mt-4 pt-3 pb-3 pl-10 pr-10 text-center background-light col-span-full">
                <h4>OurCompany Inc.</h4>
                <p class="color-grey-100">
                    1110 Brickell Avenue,<br>
                    Suite 400<br>
                    Miami, FL 33153
                </p>
            </div>
        </div>
        <div class="contact__form">
            <div class="wrapper">
                <div class="contact__form-title text-center mt-2 mb-1">
                    <h2 class="h1">Contact Us</h2>
                    <p class="color-grey-100">We understand the intricacies of the B2B landscape and the ever-evolving nature of marketing strategies</p>
                </div>
                <form action="" class="contact__form-fields grid pb-10">
                    <!-- Name input -->
                    <div class="contact__form-group contact__form-group--modifier grid">
                        <label for="name" class="contact__form-label">Name:</label>
                        <input type="text" id="name" name="name" class="contact__form-input" required>
                    </div>
    
                    <!-- Email input -->
                    <div class="contact__form-group contact__form-group--modifier grid">
                        <label for="email" class="contact__form-label">Email:</label>
                        <input type="email" id="email" name="email" class="contact__form-input" required>
                    </div>
    
                    <!-- Message textarea -->
                    <div class="contact__form-group contact__form-group--modifier grid">
                        <label for="message" class="contact__form-label">Message:</label>
                        <textarea id="message" name="message" class="contact__form-input contact__form-textarea" rows="6" required></textarea>
                    </div>
    
                    <!-- Submit button -->
                    <div class="contact__form-group col-start-4 col-end-12">
                        <button type="submit" class="contact__form-button c-button--primary color-light p-1 pr-3 pl-3"><a href="">Contact Us</a>
                        <svg width="29px" height="25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                            <path fill="#fff" stroke="#fff" stroke-width="2" d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z" data-name="Right"/>
                        </svg>
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="logos mb-10">
        <div class="wrapper">
            <div class="logos__container grid">
                <img src="assets/logos/Adobe_Corporate_new 1.png" class="col-span-4" alt="">
                <img src="assets/logos/Cisco_logo_blue_2016 1.png" class="col-span-4"  alt="">
                <img src="assets/logos/IBM_logo 1.png" class="col-span-4"  alt="">
                <img src="assets/logos/FORR_BIG 1.png" class="col-span-6"  alt="">
                <img src="assets/logos/Red_Hat_Logo_2019 1.png" id="red-hat"class="col-span-6"  alt="">
                <img src="assets/logos/Group 39644.png" class="col-start-2 col-end-11"  alt="">
                <img src="assets/logos/Group 39639.png" class="col-span-4"  alt="">
                <img src="assets/logos/g3401.png" class="col-start-5 col-end-9"  alt="">
                <img src="assets/logos/Group 39643.png" id="aws" class="col-span-4"  alt="">
                <img src="assets/logos/HP_logo_2012 1(1).png" id="hp" class="col-span-4"  alt="">
                <img src="assets/logos/Slack_Technologies_Logo 1.png" class="col-span-4"  alt="">
                <img src="assets/logos/Salesforce.com_logo 1.png" class="col-span-4"  alt="">

            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="wrapper">
            <h1>Years of Experience & Deep Expertise</h1>
            <div class="about-us__content">
                <img src="assets/logos/bg.png" alt="" class="about-us__background-image">
                <div class="about-us__cards">
                    <div class="about-us__card grid">
                            <img src="assets/logos/Group.png" alt="" class="about-us__card-image">

                            <p class="about-us__card-text">When you partner with OurCompany, you gain access to a team of professionals who are dedicated to your success and have the know-how to drive impactful results.</p>
                    </div>
                    <div class="about-us__card mt-7 mb-7 pt-5 pb-5 grid">
                        <img src="assets/logos/Group(1).png" alt="" class="about-us__card-image">
                        <p class="about-us__card-text">With years of experience in supporting leading B2B organizations in challenging markets, OurCompany brings a wealth of knowledge and expertise to the table.</p>
                    </div>
                    <div class="about-us__card grid">
                        <img src="assets/logos/Layer 1.png" alt="" class="about-us__card-image">
                        <p class="about-us__card-text">Our clients rely on us to increase their brand awareness, accelerate engagement, and generate leads that ultimately help them achieve their goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gtmStrategies pt-8 pb-8">
        <div class="wrapper">
            <h1>How We Turn Clients’ GTM Strategies Into Success</h1>

            <div class="gtmStrategies__cards">
                <div class="gtmStrategies__card">
                    <p>The programs have run more efficiently than they promised making it easy for me to hit my targets in advance of my deadlines</p>
                    <span>Marketing and Advertising</span>
                    <p>Demand Content</p>
                </div>

                <div class="gtmStrategies__card">
                    <p>This was a truly full-service experience. All I had to do was provide information about the target audiences and access to our library of content.</p>
                    <span>Software Development</span>
                    <p>Demand Intent</p>
                </div>

                <div class="gtmStrategies__card">
                    <p>Consistency of lead flow month over month. The data and leads we have gotten have been  quite solid and sales' initial feedback is positive.</p>
                    <span>Information Technology  and Services</span>
                    <p>Demand Convert</p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="wrapper">
        <div class="footer__container grid">
            <p class="col-span-6">TERMS & CONDITIONS</p>
            <p class="col-span-6">COOKIE POLICY(US)</p>
            <p class="col-span-full">PRIVACY POLICY</p>
            <p class="color-dark col-span-full">© 2024 OurCompany | All Rights Reserved</p>
        </div>
    </div>
</footer>

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
