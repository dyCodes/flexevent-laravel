@extends('layouts.page', ['title' => 'Flexevent - EventPlanner In Lagos Nigeria'])

@section('content')
  <main class="home">
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_hero" data-bs-slide="prev">
          <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
          <i class="bi bi-arrow-left"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel_hero" data-bs-slide="next">
          <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
          <i class="bi bi-arrow-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

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

    <!------- Testimonials Section ------->
    <section id="testimonials" class="testimonials">
      <div class="inner_section">
        <div class="section_title">
          <h3>Testimonials</h3>
        </div>

        <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
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

    <!-- CTA -->
    <div id="cta" class="cta text-center">
      <div class="content">
        <h2 class="cta_heading">
          Let's Talk About Your Event
        </h2>
        <a href="/contact#booking" class="btn">Book an appointment now!</a>
      </div>
    </div>

    <!------- Gallery Section ------->
    <section id="gallery" class="gallery">
      <div class="container">
        <div class="section_title">
          <h3>Our Gallery</h3>
        </div>

        <div class="content">
          {{-- Gallery Images --}}
          @include('inc.gallery_loop', $images)
        </div>
      </div>
    </section>
  </main>
@endsection
