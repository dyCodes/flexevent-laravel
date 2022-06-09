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
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <!------- Header ------->
    <header id="header">
        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-flex align-items-center">
          <div class="
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
                <li><a class="nav_link" href="index.html">Home</a></li>
                <li><a class="nav_link" href="about.html">About</a></li>
                <li>
                  <a class="nav_link" href="about.html#services">Services</a>
                </li>
                <li>
                  <a class="nav_link" href="gallery.html">Gallery</a>
                </li>
                <li><a class="nav_link active" href="contact.html">Contact</a></li>
              </ul>
            </div>
    
          </div>
        </nav>
      </header>
    <!-- End Header -->

    <!------- Main ------->
    <main>
        <article id="contact" class="page">
            <div class="page_cover">
                <h1>Contact Us</h1>
                <p>Get in touch with us</p>
            </div>

            <!-- Content -->
            <div class="container mb-5">
                <div class="row info">
                    <div class="col-md-4">
                        <div class="info_box mb-4">
                            <i class="bi bi-pin-map"></i>
                            <h5>Our Address</h5>
                            <p>3 Tobi street Ojo, Lagos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info_box mb-4">
                            <i class="bi bi-phone"></i>
                            <h5>Call Us</h5>
                            <p>+234 9038 2545 60</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info_box mb-4">
                            <i class="bi bi-envelope"></i>
                            <h5>Email</h5>
                            <p>contact@example.com</p>
                        </div>
                    </div>
                </div>
                <div id="booking" class="row contactBox">
                    <div class="col-lg-6 order-1 order-lg-0 map">
                        <!-- GOTO https://www.maps.ie/create-google-map/ to generate your location map iframe -->
                        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Lagos%20NG+(EventPlanner%20-%20dyCodes)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                href="https://www.maps.ie/draw-radius-circle-map/">Google radius map</a></div>
                        <!-- END -->
                    </div>

                    <div class="col-lg-6 p-lg-5 form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required="" />
                                </div>
                                <div class="col-md-6 mt-md-0 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Your Phone Number" required="" />
                            </div>
                            <div class="form-group">
                                <select class="form-select" required>
                                    <option selected="">Your Event Type</option>
                                    <option value="wedding">Wedding</option>
                                    <option value="2">Corporate Event</option>
                                    <option value="2">Social Event</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required=""></textarea>
                            </div>
                            <!-- <div class="status">
                  <div class="alert alert-success" role="alert">
                    <div>Your message has been sent. Thank you!</div>
                  </div>
                  <div class="alert alert-danger" role="alert">
                    <div class="error-message">Error! Message not sent.</div>
                  </div>
                </div> -->
                            <div>
                                <button type="submit" class="btn btn-dark">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </article>
        <!-- End Contact Section -->
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
                <span>© 2022 EventPlanner. All Rights Reserved | Created by <a href=https://www.instagram.com/dywebtech target="_blank"
                        rel="noopener noreferrer">Dyweb Tech</a></span>
            </div>
        </div>

        <!-- WA -->
        <div id="whatsapp_button">
            <a href="https://wa.me/2347089489647/?text="><i
                    class="bi-whatsapp"></i></a>
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