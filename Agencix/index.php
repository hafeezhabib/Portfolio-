<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Agencix</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/css/intlTelInput.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header id="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="top-bar">
                        <div class="top-left">
                            <a href="#"><i class="fa fa-facebook"></i> facebook</a>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                        </div>
                        <div class="top-right">
                            <a href="tel:+10000000000"><i class="fa fa-phone"></i> <span>Phone</span> +1
                                (000)-000-0000</a>
                            <a href="mailto:info@company.com"><i class="fa fa-envelope"></i> <span>Email</span>
                                info@company.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-bar" id="navbar">
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./">
                            <img src="./assets/images/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#we-do">We are</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Portfolio </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#choose">Choose Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#news">News</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <button class="btn btn-primary" type="submit">Start a Project</button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="banner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="banner-column">
                        <h1 class="text-white">Your Projects is in the Right Hands</h1>
                        <p class="text-white">Streamlined Marketing Strategies For Big & Small Businesses</p>
                        <a href="#" class="common-red-btn">Explore Services</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="form-wrapper aos-init aos-animate" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="lead-form">
                            <form method="POST" id="contact-form">
                                <div class="row">
                                    <div class="style">
                                        <div class="section-header">
                                            <h2 class="section_title">Connect With Us</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row input-contact">
                                    <div class="col-lg-12 col-md-12 col-12 mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 mb-3">
                                        <input type="hidden" id="CountryCode" name="CountryCode" value="">
                                        <input type="hidden" id="Phonecode" name="Phonecode" value="">
                                        <input type="hidden" id="CountryIsoCode" name="CountryIsoCode" value="">
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            pattern="^[0-9\-\+\s\(\)]*$" minlength="7" maxlength="22"
                                            placeholder="Enter your phone number" data-default-region="us" required=""
                                            autocomplete="on">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <textarea class="form-control" name="message" cols="10" rows="4" placeholder="Message" required=""></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <button type="submit" name="submit" id="submit" class="common-red-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="auto-response">
                                <p>Thank you for getting in touch. Our team will get back to you as soon as possible!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="we-do" id="we-do">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center ml-0">
                        <div class="section-icon"></div>
                        <h5 class="section-small-heading">What we Do?</h5>
                        <h2 class="section-heading">We are specialists.</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="accordian-height">
                        <div class="tab-wrapper">
                            <div class="accordion" id="lg-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Web/Interactive
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#lg-accordion">
                                        <div class="accordion-body">
                                            <p>We dig deeper so you can outpace the competition with an integrated approach that connects goals.</p>
                                            <img class="img-fluid" src="./assets/images/we-do-card.JPG" alt="we-do-card">
                                            <ul class="we-can-card-ul">
                                                <li><i class="fa fa-chevron-right"></i> Digital Transformation</li>
                                                <li><i class="fa fa-chevron-right"></i> Experience Strategy</li>
                                                <li><i class="fa fa-chevron-right"></i> Service Design</li>
                                                <li><i class="fa fa-chevron-right"></i> Content & Marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Business Creations
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#lg-accordion">
                                        <div class="accordion-body">
                                            <p>We dig deeper so you can outpace the competition with an integrated approach that connects goals.</p>
                                            <img class="img-fluid" src="./assets/images/we-do-card.JPG" alt="we-do-card">
                                            <ul class="we-can-card-ul">
                                                <li><i class="fa fa-chevron-right"></i> Digital Transformation</li>
                                                <li><i class="fa fa-chevron-right"></i> Experience Strategy</li>
                                                <li><i class="fa fa-chevron-right"></i> Service Design</li>
                                                <li><i class="fa fa-chevron-right"></i> Content & Marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Strategic Consulting
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#lg-accordion">
                                        <div class="accordion-body">
                                            <p>We dig deeper so you can outpace the competition with an integrated approach that connects goals.</p>
                                            <img class="img-fluid" src="./assets/images/we-do-card.JPG" alt="we-do-card">
                                            <ul class="we-can-card-ul">
                                                <li><i class="fa fa-chevron-right"></i> Digital Transformation</li>
                                                <li><i class="fa fa-chevron-right"></i> Experience Strategy</li>
                                                <li><i class="fa fa-chevron-right"></i> Service Design</li>
                                                <li><i class="fa fa-chevron-right"></i> Content & Marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Branding Innovation
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#lg-accordion">
                                        <div class="accordion-body">
                                            <p>We dig deeper so you can outpace the competition with an integrated approach that connects goals.</p>
                                            <img class="img-fluid" src="./assets/images/we-do-card.JPG" alt="we-do-card">
                                            <ul class="we-can-card-ul">
                                                <li><i class="fa fa-chevron-right"></i> Digital Transformation</li>
                                                <li><i class="fa fa-chevron-right"></i> Experience Strategy</li>
                                                <li><i class="fa fa-chevron-right"></i> Service Design</li>
                                                <li><i class="fa fa-chevron-right"></i> Content & Marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Communication
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#lg-accordion">
                                        <div class="accordion-body">
                                            <p>We dig deeper so you can outpace the competition with an integrated approach that connects goals.</p>
                                            <img class="img-fluid" src="./assets/images/we-do-card.JPG" alt="we-do-card">
                                            <ul class="we-can-card-ul">
                                                <li><i class="fa fa-chevron-right"></i> Digital Transformation</li>
                                                <li><i class="fa fa-chevron-right"></i> Experience Strategy</li>
                                                <li><i class="fa fa-chevron-right"></i> Service Design</li>
                                                <li><i class="fa fa-chevron-right"></i> Content & Marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="who-i-am" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-image">
                        <img class="img-fluid" src="./assets/images/what-i-am.jpg" alt="what-i-am">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right">
                        <div class="section-header">
                            <div class="section-icon text-left"></div>
                            <h5 class="section-small-heading">Who I am!</h5>
                            <h2 class="section-heading">Welcome to The Most Progressive Web Agency.</h2>
                            <p class="section-p mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi enim id aperiam excepturi iusto itaque beatae aliquam libero natus, dignissimos unde quos numquam? Omnis voluptatem voluptatum voluptates dolorum voluptas!</p>
                        </div>
                        <div class="counter-wrapper-flex">
                            <div class="state-box">
                                <div class="stats-box-title">
                                    <p>_Years in Business</p>
                                </div>
                                <h3><span class="total" data-count="22">0</span></h3>
                            </div>
                            <div class="state-box">
                                <div class="stats-box-title">
                                    <p>_Award Won</p>
                                </div>
                                <h3><span class="total" data-count="31">0</span><span>+</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="right-circle"></div>
        <div class="bottom-circle"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <div class="section-icon"></div>
                        <h5 class="section-small-heading">Meet our Experts</h5>
                        <h2 class="section-heading">We are specialists.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                    <div class="team-card text-center">
                        <div class="team-column">
                            <img class="img-fluid" src="./assets/images/team-1.jpg" alt="team-1">
                            <a href="tel:+123456789" class="contact-number"><i class="fa fa-phone"></i>123456789</a>
                        </div>
                        <div class="about-team">
                            <h6 class="designation">Chief Finance Officer</h6>
                            <h3 class="name">Villimes Homer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                    <div class="team-card text-center">
                        <div class="team-column">
                            <img class="img-fluid" src="./assets/images/team-1.jpg" alt="team-1">
                            <a href="tel:+123456789" class="contact-number"><i class="fa fa-phone"></i>123456789</a>
                        </div>
                        <div class="about-team">
                            <h6 class="designation">Chief Finance Officer</h6>
                            <h3 class="name">Villimes Homer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                    <div class="team-card text-center">
                        <div class="team-column">
                            <img class="img-fluid" src="./assets/images/team-1.jpg" alt="team-1">
                            <a href="tel:+123456789" class="contact-number"><i class="fa fa-phone"></i>123456789</a>
                        </div>
                        <div class="about-team">
                            <h6 class="designation">Chief Finance Officer</h6>
                            <h3 class="name">Villimes Homer</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta" id="cta">
        <div class="container">
            <div class="cta-flex">
                <div class="left">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="content">
                        <h3>Need help with a <span>New Strategy?</span></h3>
                        <h6>Your website will help lead generation.</h6>
                    </div>
                </div>
                <div class="right">
                    <a href="#" class="common-red-btn">Explore Services</a>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="portfolio-flex">
                <div class="section-header">
                    <h5 class="section-small-heading">Work Portfolio</h5>
                    <h2 class="section-heading">Company Projects</h2>
                </div>
                <div class="arrows d-none">
                    <div class="buttons-flex">
                        <div class="single-button custom-PrevBtn">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </div>
                        <div class="single-button custom-NextBtn">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-slider-wrapper">
                    <div class="owl-theme owl-carousel" id="portfolio-slider">
                        <div class="single-slide">
                            <div class="project-name">
                                <h6>Communication</h6>
                                <h4>Rebranding Researchbods</h4>
                            </div>
                            <div class="slide-image">
                                <img class="img-fluid" src="./assets/images/portfolio-slide-1.JPG" alt="portfolio-slide-1">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="project-name">
                                <h6>Communication</h6>
                                <h4>Rebranding Researchbods</h4>
                            </div>
                            <div class="slide-image">
                                <img class="img-fluid" src="./assets/images/portfolio-slide-1.JPG" alt="portfolio-slide-1">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="project-name">
                                <h6>Communication</h6>
                                <h4>Rebranding Researchbods</h4>
                            </div>
                            <div class="slide-image">
                                <img class="img-fluid" src="./assets/images/portfolio-slide-1.JPG" alt="portfolio-slide-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-us" id="choose">
        <div class="container">
            <div class="row choose-us-flex">
                <div class="col-lg-6 col-md-12">
                    <div class="section-header">
                        <h5 class="section-small-heading">Why Choose Us</h5>
                        <h2 class="section-heading">Connecting Innovation, Transformation and Leadership</h2>
                        <p class="section-p mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quae repellat aspernatur, perspiciatis veniam quisquam</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-choose-box">
                                <div class="choose-box box-1">
                                    <img class="img-fluid" src="./assets/images/choose-icon-1.png" alt="choose-icon-1">
                                    <h5>Promote a Business</h5>
                                </div>
                                <div class="choose-box-second-side second-side-1">
                                    <h5>Promote a Business</h5>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-choose-box">
                                <div class="choose-box box-2">
                                    <img class="img-fluid" src="./assets/images/choose-icon-2.png" alt="choose-icon-1">
                                    <h5>Better Marketing</h5>
                                </div>
                                <div class="choose-box-second-side second-side-2">
                                    <h5>Better Marketing</h5>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-choose-box">
                                <div class="choose-box box-3">
                                    <img class="img-fluid" src="./assets/images/choose-icon-1.png" alt="choose-icon-1">
                                    <h5>Experienced Staff</h5>
                                </div>
                                <div class="choose-box-second-side second-side-3">
                                    <h5>Experienced Staff</h5>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-choose-box">
                                <div class="choose-box box-4">
                                    <img class="img-fluid" src="./assets/images/choose-icon-4.png" alt="choose-icon-1">
                                    <h5>Different Strategies</h5>
                                </div>
                                <div class="choose-box-second-side second-side-4">
                                    <h5>Different Strategies</h5>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12">
                    <div class="section-header text-center">
                        <h5 class="section-small-heading">Why Choose Us</h5>
                        <h2 class="section-heading">Flexible Pricing with Your Business</h2>
                    </div>
                </div>
            </div>
            <div class="row pricing-margin">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-pricing-card normal">
                        <div class="card_header">
                            <h5>Standard</h5>
                            <h6>1 Month Package</h6>
                            <h2><span>$</span>60.10</h2>
                            <span class="icon">
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="card_body">
                            <ul class="pricing_ul">
                                <li class="form-group">
                                    <input type="checkbox" id="1.1">
                                    <label for="1.1">Unlimited Updates</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="1.2">
                                    <label for="1.2">Custom Permission</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="1.3">
                                    <label for="1.3">Custom Infrastructure</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="1.4">
                                    <label for="1.4">Custom Design and features</label>
                                </li>
                            </ul>
                            <a href="#" class="common-red-btn">Explore Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-pricing-card recommended">
                        <div class="card_header">
                            <div class="inner-recommended">
                                <h6>Recommended</h6>
                            </div>
                            <h5>Professional</h5>
                            <h6>6 Month Package</h6>
                            <h2><span>$</span>90.10</h2>
                            <span class="icon">
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="card_body">
                            <ul class="pricing_ul">
                                <li class="form-group">
                                    <input type="checkbox" id="2.1">
                                    <label for="2.1">Unlimited Updates</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="2.2">
                                    <label for="2.2">Custom Permission</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="2.3">
                                    <label for="2.3">Custom Infrastructure</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="2.4">
                                    <label for="2.4">Custom Design and features</label>
                                </li>
                            </ul>
                            <a href="#" class="common-red-btn">Explore Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-pricing-card normal">
                        <div class="card_header">
                            <h5>Business</h5>
                            <h6>1 Month Package</h6>
                            <h2><span>$</span>120.10</h2>
                            <span class="icon">
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="card_body">
                            <ul class="pricing_ul">
                                <li class="form-group">
                                    <input type="checkbox" id="3.1">
                                    <label for="3.1">Unlimited Updates</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="3.2">
                                    <label for="3.2">Custom Permission</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="3.3">
                                    <label for="3.3">Custom Infrastructure</label>
                                </li>
                                <li class="form-group">
                                    <input type="checkbox" id="3.4">
                                    <label for="3.4">Custom Design and features</label>
                                </li>
                            </ul>
                            <a href="#" class="common-red-btn">Explore Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="slide-inner">
                        <div class="section-header">
                            <h5 class="section-small-heading">Why Choose Us</h5>
                            <h2 class="section-heading">Flexible Pricing with Your Business</h2>
                        </div>
                    </div>
                    <div class="person-images">
                        <div class="single-person slide_1">
                            <a href="#"><img class="img-fluid" src="./assets/images/testimonial-person-1.JPG" alt=""></a>
                        </div>
                        <div class="single-person slide_2">
                            <img class="img-fluid" src="./assets/images/testimonial-person-1.JPG" alt="">
                        </div>
                        <div class="single-person slide_3">
                            <img class="img-fluid" src="./assets/images/testimonial-person-1.JPG" alt="">
                        </div>
                        <div class="single-person slide_4">
                            <img class="img-fluid" src="./assets/images/testimonial-person-1.JPG" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="owl-theme owl-carousel" id="testimonials-slider">
                        <div class="single-testimonials">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-inner-content">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                        <p>Click intelligence increased my unique visits from 487 to 7917 per month over a 12 month period. As a result we have been seen an increase in turnover by 3654%</p>
                                        <h5>Dave Kimberley</h5>
                                        <h6>CEO Smart Hosting</h6>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="single-testimonials">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-inner-content">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                        <p>Click intelligence increased my unique visits from 487 to 7917 per month over a 12 month period. As a result we have been seen an increase in turnover by 3654%</p>
                                        <h5>Dave Kimberley</h5>
                                        <h6>CEO Smart Hosting</h6>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="single-testimonials">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-inner-content">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                        <p>Click intelligence increased my unique visits from 487 to 7917 per month over a 12 month period. As a result we have been seen an increase in turnover by 3654%</p>
                                        <h5>Dave Kimberley</h5>
                                        <h6>CEO Smart Hosting</h6>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h5 class="section-small-heading">Blog and Updates</h5>
                        <h2 class="section-heading">Recent News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-wrapper">
                        <div class="single-news">
                            <img class="img-fluid" src="./assets/images/news-1.jpg" alt="news-1">
                        </div>
                        <div class="about-news">
                            <div class="date-box">
                                <h4>25 <span>Dec 2023</span></h4>
                            </div>
                            <div class="top">
                                <div class="left-side">
                                    <i class="fa fa-comments"></i> 8 Comments
                                </div>
                                <div class="right-side">
                                    <i class="fa fa-comments"></i> 21k Views 
                                </div>
                            </div>
                            <div class="bottom">
                                <h5>Explore These Stunning Small Business</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-wrapper">
                        <div class="single-news">
                            <img class="img-fluid" src="./assets/images/news-1.jpg" alt="news-1">
                        </div>
                        <div class="about-news">
                            <div class="date-box">
                                <h4>25 <span>Dec 2023</span></h4>
                            </div>
                            <div class="top">
                                <div class="left-side">
                                    <i class="fa fa-comments"></i> 8 Comments
                                </div>
                                <div class="right-side">
                                    <i class="fa fa-comments"></i> 21k Views 
                                </div>
                            </div>
                            <div class="bottom">
                                <h5>Explore These Stunning Small Business</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="news-wrapper">
                        <div class="single-news">
                            <img class="img-fluid" src="./assets/images/news-1.jpg" alt="news-1">
                        </div>
                        <div class="about-news">
                            <div class="date-box">
                                <h4>25 <span>Dec 2023</span></h4>
                            </div>
                            <div class="top">
                                <div class="left-side">
                                    <i class="fa fa-comments"></i> 8 Comments
                                </div>
                                <div class="right-side">
                                    <i class="fa fa-comments"></i> 21k Views 
                                </div>
                            </div>
                            <div class="bottom">
                                <h5>Explore These Stunning Small Business</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row news-btn">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <a href="#" class="common-red-btn">Explore Services</a>
                </div>
            </div>
        </div>
    </section>
    <div class="clients" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-wrapper">
                        <div class="owl-theme owl-carousel" id="clients-slider">
                            <div class="single-client">
                                <img src="./assets/images/client-logo-1.png" alt="client-logo-1">
                            </div>
                            <div class="single-client">
                                <img src="./assets/images/client-logo-2.png" alt="client-logo-2">
                            </div>
                            <div class="single-client">
                                <img src="./assets/images/client-logo-3.png" alt="client-logo-3">
                            </div>
                            <div class="single-client">
                                <img src="./assets/images/client-logo-4.png" alt="client-logo-4">
                            </div>
                            <div class="single-client">
                                <img src="./assets/images/client-logo-5.png" alt="client-logo-5">
                            </div>
                            <div class="single-client">
                                <img src="./assets/images/client-logo-1.png" alt="client-logo-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-column">
                        <div class="footer-title">
                            <img class="img-fluid" src="./assets/images/logo.png" alt="footer-logo">
                        </div>
                        <div class="footer-content">
                            <p class="section-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod nam debitis vero blanditiis ad commodi fugiat dicta repudiandae accusantium tempore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <div class="footer-column">
                        <div class="footer-title">
                            <h4>Quick Links</h4> 
                        </div>
                        <div class="footer-content">
                            <ul class="footer-ul">
                                <li>
                                    <a href="./">Home</a>
                                </li>
                                <li>
                                    <a href="#we-do">Who We Are </a>
                                </li>
                                <li>
                                    <a href="#about">About</a>
                                </li>
                                <li>
                                    <a href="#team">Team</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#choose">Choose Us</a>
                                </li>
                                <li>
                                    <a href="#pricing">Pricing</a>
                                </li>
                                <li>
                                    <a href="#news">News</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.php">Privacy Policy</a>
                                </li>
                            </ul>          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-column">
                        <div class="footer-title">
                            <h4>Contact Info</h4> 
                        </div>
                        <div class="footer-content">
                            <ul class="footer-social-ul">
                                <li>
                                    <a href="mailto:info@domain.com">
                                        <div class="contact-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="contact-info">
                                            <h5>Email Address</h5>
                                            <h6>info@domain.com</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:123456789">
                                        <div class="contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="contact-info">
                                            <h5>Phone Number</h5>
                                            <h6>+123456789</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copy-rights">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>&copy; Copyright <?php echo date('Y'); ?> <a href="#">Agencix</a> All rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.min.js"></script>
    <script src="./assets/js/form.js"></script>
    <script src="./assets/js/script.js"></script>

</body>
</html>