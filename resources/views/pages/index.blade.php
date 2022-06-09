<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>DywebTech - EventPlanner</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Merienda:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body class="home">
    <!------- Header ------->
    <header id="header">
        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-flex align-items-center">
            <div
                class="
          container
          d-flex
          justify-content-center justify-content-md-between
        ">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:dywebtech@gmail.com">info@company.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+2349038254560</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </section>
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container">
                <!-- Logo -->
                <a class="logo" href="index.html">
                    <img src="./assets/img/logo.png" alt="EventPlanner" />
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </button>

                <!-- Nav Links -->
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarContent">
                    <ul class="navbar-nav mt-3 mt-lg-0">
                        <li><a class="nav_link active" href="index.html">Home</a></li>
                        <li><a class="nav_link" href="about.html">About</a></li>
                        <li>
                            <a class="nav_link" href="about.html#services">Services</a>
                        </li>
                        <li>
                            <a class="nav_link" href="gallery.html">Gallery</a>
                        </li>
                        <li><a class="nav_link" href="contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- End Header -->

    <!------- Main ------->
    <main>
        <!------- Hero Section ------->
        <section id="hero" class="hero">
            <div id="carousel_hero" class="carousel slide" data-bs-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel_hero" data-bs-slide-to="0" class=""></li>
                    <li data-bs-target="#carousel_hero" data-bs-slide-to="1" class=""></li>
                    <li data-bs-target="#carousel_hero" data-bs-slide-to="2" class="active" aria-current="true">
                    </li>
                </ol>
                <!-- Contents -->
                <div class="carousel-inner" role="listbox">
                    <!-- Carousel Item -->
                    <article class="carousel-item active">
                        <img src="assets/img/hero-image.jpg" alt="">
                        <div class="overlay"> </div>
                    </article>
                    <!-- Carousel Item -->
                    <article class="carousel-item">
                        <img src="assets/img/hero-image-2.jpg" alt="">
                        <div class="overlay"> </div>
                    </article>
                    <!-- Carousel Item -->
                    <article class="carousel-item">
                        <img src="assets/img/hero-image-3.jpg" alt="">
                        <div class="overlay"> </div>
                    </article>
                </div>
                <!-- Buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel_hero"
                    data-bs-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                    <i class="bi bi-arrow-left"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel_hero"
                    data-bs-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                    <i class="bi bi-arrow-right"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- End Hero -->

        <!------- About Section ------->
        <section id="about" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 content pe-lg-4 text-center text-lg-start">
                        <h2 class="_heading mb-lg-3">Welcome To EventbyBlizz</h2>
                        <p class="mt-3">
                            We make your dreams and visions come to life! If it can be done, Events by Blizz will do it
                            with style.
                            Sample text lorem ipsum sit amet consectetur adipisicing elit. Alias
                            nesciunt qui ad, commodi autem reiciendis, voluptatum ex adipisci quo aspernatur ea
                            accusantium, dicta
                            voluptatem. Quam ea ad minus nisi! reiciendis,adipisci quo
                            aspernatur.
                        </p>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0 ps-lg-5">
                        <div class="about_img">
                            <img src="./assets/img/about.jpg" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!------- Services Section ------->
        <section id="testimonials" class="testimonials">
            <div class="inner_section">
                <div class="section_title">
                    <h3>Testimonials</h3>
                </div>

                <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <!-- Slider Content -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">
                                <div class="content-text">
                                    <p>
                                        If you want your ceremony to be well organised just give them a Call. So
                                        professional and
                                        diplomatic. Great team. labore consequuntur eius ducimus aliquam
                                        provident quam sed ab!
                                    </p>
                                    <p class="client h6">Mary & John</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <div class="content-text">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam corporis
                                        commodi illum sint
                                        iusto rerum, ullam temporibus fugiat magni labore consequuntur eius ducimus
                                        aliquam.
                                    </p>
                                    <p class="client h6">TheAdams</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <div class="content-text">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam corporis
                                        commodi illum sint
                                        mollitia rem iusto rerum, ullam temporibus fugiat magni labore consequuntur eius
                                        ducimus aliquam
                                        provident quam sed ab!
                                    </p>
                                    <p class="client h6">Mary & John</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Buttons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <!-- <i class="bi bi-arrow-left"></i> -->
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <!-- <i class="bi bi-arrow-right"></i> -->
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </section>
        <!-- End Section -->

        <!------- Services Section ------->
        <section id="services" class="services">
            <div class="container">
                <div class="section_title">
                    <h3>What we do</h3>
                </div>

                <div class="content row">
                    <div class="col-lg-4 col-md-6">
                        <!-- CARD ITEM -->
                        <a href="about.html#services">
                            <div class="card mb-lg-0">
                                <img src="./assets/img/services/event-wedding.jpg" alt="services" />
                                <div class="card-body">
                                    <h5 class="card-title">Wedding Planning</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- CARD ITEM -->
                        <a href="about.html#services">
                            <div class="card mb-lg-0">
                                <img src="./assets/img/services/corporate.jpg" alt="services" />
                                <div class="card-body">
                                    <h5 class="card-title">Corporate Event</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!-- CARD ITEM -->
                        <a href="about.html#services">
                            <div class="card mb-lg-0">
                                <img src="./assets/img/services/event-birthday.jpg" alt="services" />
                                <div class="card-body">
                                    <h5 class="card-title">Private Ocassion</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- CTA -->
        <div id="cta" class="cta text-center">
            <div class="content">
                <h2 class="cta_heading">
                    Let's Talk About Your Event
                </h2>
                <a href="/contact.html#booking" class="btn">Book an appointment now!</a>
            </div>
        </div>

        <!------- Gallery Section ------->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="section_title">
                    <h3>Our Gallery</h3>
                </div>

                <div class="content">
                    <div class="row g-0">
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-1.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-1.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-2.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-2.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-3.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-3.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-4.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-4.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-5.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-5.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-6.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-6.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-7.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-7.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY ITEM -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery_item">
                                <a href="assets/img/gallery/gallery-8.jpg" class="glightbox"
                                    data-gallery="gallery-item" data-description="#MeetTheAdams">
                                    <img src="assets/img/gallery/gallery-8.jpg" alt="#MeetTheAdams" />
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery Section -->

    </main>
    <!-- End Main -->

    <!------- Footer ------->
    <footer>
        <div class="container">

            <ul class="footer_nav d-flex flex-wrap justify-content-center mb-4">
                <li><a class="f-nav_link" href="index.html">Home</a></li>
                <li><a class="f-nav_link" href="about.html">About</a></li>
                <li>
                    <a class="f-nav_link" href="about.html#services">Services</a>
                </li>
                <li>
                    <a class="f-nav_link" href="gallery.html">Gallery</a>
                </li>
                <li><a class="f-nav_link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="social justify-content-center d-flex">
                <li>
                    <a class="text-white" href="https://facebook.com/yusufdaudu51">
                        <i class="bi-facebook"></i>
                    </a>
                </li>
                <li>
                    <a class="text-white" href="http://instagram.com/dyCodes">
                        <i class="bi-instagram"></i>
                    </a>
                </li>
                <li>
                    <a class="text-white" href="https://twitter.com/dyCodes">
                        <i class="bi-twitter"></i>
                    </a>
                </li>
                <li>
                    <a class="text-white" href="https://wa.me/2349038254560">
                        <i class="bi-whatsapp"></i>
                    </a>
                </li>
            </ul>

            <div class="copy-right text-center">
                <span>© 2022 EventPlanner. All Rights Reserved | Created by <a href=https://www.instagram.com/dywebtech
                        target="_blank" rel="noopener noreferrer">Dyweb Tech</a></span>
            </div>
        </div>

        <!-- WA -->
        <div id="whatsapp_button">
            <a href="https://wa.me/2347089489647/?text="><i class="bi-whatsapp"></i></a>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap.min.js"></script>
    <script src="assets/vendor/glightbox.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
