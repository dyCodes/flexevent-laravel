<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <!-- SEO Meta tags -->
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  @isset($title)
    <title>{{ $title . ' - ' . get_setting('site_title') }}</title>
  @else
    <title>{{ get_setting('site_title') . ' - ' . get_setting('tagline') }}</title>
  @endisset
  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon" />
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Merienda:wght@400;700&display=swap"
    rel="stylesheet">
  <!-- Vendor Files -->
  <link href="/assets/vendor/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/vendor/glightbox.min.css" rel="stylesheet" />
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <!-- Page Files -->
  <link href="/assets/css/style.css" rel="stylesheet" />
</head>

<body>
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
              href="mailto:{{ get_setting('site_email') }}">{{ get_setting('site_email') }}</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ get_setting('site_phone_no') }}</span></i>
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
        <a class="logo" href="/">
          <img src="/assets/img/logo.png" alt="{{ get_setting('site_title') }}" />
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
          aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list mobile-nav-toggle"></i>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarContent">
          <ul class="navbar-nav mt-3 mt-lg-0">
            <li><a class="nav_link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
            <li><a class="nav_link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a></li>
            <li><a class="nav_link " href="/about#services">Services</a>
            </li>
            <li><a class="nav_link {{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a></li>
            <li><a class="nav_link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <!------- Main ------->
  @yield('content')

  <!------- Footer ------->
  <footer>
    <div class="container">
      <ul class="footer_nav d-flex flex-wrap justify-content-center mb-4">
        <li><a class="f-nav_link" href="/">Home</a></li>
        <li><a class="f-nav_link" href="/about">About</a></li>
        <li><a class="f-nav_link" href="/about#services">Services</a></li>
        <li><a class="f-nav_link" href="/gallery">Gallery</a></li>
        <li><a class="f-nav_link" href="/contact">Contact</a></li>
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
        <span>© {{ date('Y') . ' ' . get_setting('site_title') }}. All Rights Reserved | Created by <a
            href="https://dywebtech.com" target="_blank" rel="noopener noreferrer">Dyweb Tech</a></span>
      </div>
    </div>
    <!-- Whatsapp BTN-->
    <div id="whatsapp_button">
      <a href="https://wa.me/2347089489647/?text="><i class="bi-whatsapp"></i></a>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap.min.js"></script>
  <script src="/assets/vendor/glightbox.min.js"></script>
  <!-- Page JS File -->
  <script src="/assets/js/main.js"></script>
</body>

</html>
