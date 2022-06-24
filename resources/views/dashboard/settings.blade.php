@extends('layouts.dashboard', ['title' => 'Edit Testimonial'])

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section_title">Edit Testimonial</h2>
        <p class="section_desc">
        <div class="row mt-4">
          <div class="col-12">
            {{-- Page Feedback/Messages --}}
            @include('inc.messages')

            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Update Testimonial</h4>
                <a href="{{ route('testimonials') }}" class="btn btn-danger p-1 px-4">Go Back</a>
              </div>

              <div class="card-body">
                <form action="{{ route('testimonials.update', ['id' => $testimonial->id]) }}" method="post"
                  enctype="multipart/form-data">@csrf

                  <div class="form-group mb-4">
                    <label>Client Name</label>
                    <input type="text" name="client_name" class="form-control"
                      value="{{ $testimonial->client_name }}" required>
                  </div>

                  <div class="form-group mb-4">
                    <label>Content</label>
                    <textarea class="form-control" name="content" required>{{ $testimonial->content }}</textarea>
                  </div>

                  <div class="form-group mb-5">
                    <label>Thumbnail</label>
                    <div id="image-preview" class="image-preview"
                      style="background-image: url({{ $testimonial->getPhoto() }});background-size: cover;background-position: center center;">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="photo" id="image-upload">
                    </div>
                  </div>

                  <div class="form-group mb-4">
                    <button class="btn btn-primary px-5">Update Testimonial</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

{{-- Add custom page files to Footer --}}
@section('footer')
  <script src="/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  {{-- Init uploadPreview --}}
  <script>
    $.uploadPreview({
      input_field: "#image-upload",
      preview_box: "#image-preview",
      label_field: "#image-label",
      label_default: "Choose File",
      label_selected: "Change File",
      no_label: false,
      success_callback: null
    });
  </script>
@endsection
