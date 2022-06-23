@extends('layouts.page', ['title' => 'Gallery - Flexevent'])

@section('content')
  <main>
    <article id="gallery" class="page">
      <div class="page_cover">
        <h1>Gallery</h1>
      </div>

      <!-- Content -->
      <div class="container">
        {{-- Gallery Images --}}
        @include('inc.gallery-loop', $images)
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
