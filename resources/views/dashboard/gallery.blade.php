@extends('layouts.dashboard', ['title' => 'Gallery'])

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section_title">Gallery</h2>
        <p class="section_desc">
          You can manage all gallery images, such as adding, deleting and more.
        </p>

        <div class="row mt-4">
          <div class="col-12">
            {{-- Page Feedback/Messages --}}
            @include('inc.messages')

            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Manage Gallery</h4>
                <a href="{{ route('upload') }}" class="btn btn-primary p-1 px-4">Add Images</a>
              </div>

              <div class="card-body">
                @if (count($images) > 0)
                  <div class="row">
                    @foreach ($images as $image)
                      <div class="col-lg-3 col-md-4">
                        <div class="gallery_item">
                          <div class="gallery_image">
                            <img src="{{ url($image->url) }}" class="w-100" alt="gallery-image">
                            {{-- Delete Image Form --}}
                            <form action="{{ route('gallery.delete', ['id' => $image->id]) }}" method="post">@csrf
                              <button class="btn btn-icon icon-left btn-danger deleteBtn"><i
                                  class="fas fa-times"></i>Delete</button>
                              <div class="_overlay"></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                @else
                  <h6 class="text-center p-3">No Image Found!</h5>
                @endif
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
