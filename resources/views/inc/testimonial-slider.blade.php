@if (count($testimonials) > 0)
  <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <?php $i = 0; ?>
      {{-- Slider carousel-indicators loop --}}
      @foreach ($testimonials as $item)
        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="{{ $i }}"
          class="{{ $i == 0 ? 'active' : '' }}" aria-label="Slide {{ $i + 1 }}">
        </button>
        <?php $i++; ?>
      @endforeach
    </div>

    <div class="carousel-inner">
      <?php $i = 1; ?>
      {{-- Testimonial Loop --}}
      @foreach ($testimonials as $item)
        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
          <div class="container">
            <div class="content-text">
              <img src="{{ $item->getPhoto() }}" class="client_photo rounded-circle" alt="{{ $item->client_name }}">
              <p>{{ $item->content }}</p>
              <p class="client h6">{{ $item->client_name }}</p>
            </div>
          </div>
        </div>
        <?php $i++; ?>
      @endforeach
    </div>

    <!-- Buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
@endif
