{{-- Gallery Images Loop --}}
@if (count($images) > 0)
  <div class="row g-0">

    @foreach ($images as $image)
      {{-- GALLERY ITEM --}}
      <div class="col-6 col-md-4 col-lg-3">
        <div class="gallery_item">
          <a href="{{ url($image->url) }}" class="glightbox" data-gallery="gallery-item">
            <img src="{{ url($image->url) }}" alt="gallery-photo" />
          </a>
        </div>
      </div>
    @endforeach
  </div>
@else
  <h6 class="text-center p-3">No Image Found!</h6>
@endif
