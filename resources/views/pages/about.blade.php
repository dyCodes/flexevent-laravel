@extends('layouts.page')

@section('title', 'About - Flexevent')

@section('content')
  <main>
    <article id="about" class="page">
      <div class="page_cover">
        <h1>About Us</h1>
        <!-- <p>Get in touch with us</p> -->
      </div>
      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 content pe-lg-4">

            <h2 class="mb-lg-3">Best Events Planner In Lagos Nigeria</h2>
            <p class="mt-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
              nesciunt qui ad, commodi autem reiciendis, voluptatum ex
              voluptate adipisci quo aspernatur ea accusantium, dicta
              voluptatem. Quam ea ad minus nisi! reiciendis,adipisci quo
              aspernatur ea accusantium.
            </p>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0 ps-lg-5">
            <div class="about_img">
              <img src="./assets/img/about.jpg" alt="" />
            </div>
          </div>

        </div>
      </div>
      <!-- Services -->
      <div id="services">
        <div class="container">
          <div class="section_title">
            <h3>What we do</h3>
          </div>

          <div class="content row">
            <div class="col-lg-4 col-md-6">
              <!-- CARD ITEM -->
              <div class="card mb-lg-0">
                <img src="./assets/img/services/event-wedding.jpg" alt="services" />
                <div class="card-body">
                  <h5 class="card-title">Wedding Planning</h5>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint aut repellendus laudantium nostrum
                    ad? Eligendi natus ipsam asperiores ad laudantium ex nemo nostrum praesentium rem illum! Quis error
                    eligendi hic.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- CARD ITEM -->
              <div class="card mb-lg-0">
                <img src="./assets/img/services/corporate.jpg" alt="services" />
                <div class="card-body">
                  <h5 class="card-title">Corporate Event</h5>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint aut repellendus laudantium nostrum
                    ad? Eligendi natus ipsam asperiores ad laudantium ex nemo nostrum praesentium rem illum! Quis error
                    eligendi hic.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- CARD ITEM -->
              <div class="card mb-lg-0">
                <img src="./assets/img/services/event-birthday.jpg" alt="services" />
                <div class="card-body">
                  <h5 class="card-title">Private Ocassion</h5>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint aut repellendus laudantium nostrum
                    ad? Eligendi natus ipsam asperiores ad laudantium ex nemo nostrum praesentium rem illum! Quis error
                    eligendi hic.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- CTA -->
    <div id="cta" class="cta text-center">
      <div class="content">
        <h2>
          Let's Talk About Your Project
        </h2>
        <a href="/contact#booking" class="btn">Book an appointment now!</a>
      </div>
    </div>
  </main>
@endsection
