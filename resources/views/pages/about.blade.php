@extends('layouts.page', ['title' => 'About'])

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

          @if (count($services))
            <div class="content row">
              @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                  <!-- CARD ITEM -->
                  <div class="card mb-lg-0">
                    <img src="{{ $service->getPhoto() }}" alt="{{ $service->title }}" />
                    <div class="card-body">
                      <h5 class="card-title">{{ $service->title }}</h5>
                      <p>{{ $service->content }}</p>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          @else
            <h5 class="text-center p-3">No Services Found!</h5>
          @endif

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
