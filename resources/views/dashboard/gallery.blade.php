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
                <div class="btn btn-primary p-1 px-4" data-toggle="modal" data-target="#uploadModal">Add Images
                </div>
              </div>

              <div class="card-body">
                @if (count($images) > 0)
                  <div class="row">
                    @foreach ($images as $image)
                      <div class="col-lg-3 col-md-4" id="img_{{ $image->id }}">
                        <div class="gallery_item">
                          <div class="gallery_image">
                            <img src="{{ url($image->url) }}" class="w-100" alt="gallery-image">
                            {{-- Delete Image Form --}}
                            <button data-id="{{ $image->id }}" data-token="{{ csrf_token() }}"
                              class="btn btn-icon icon-left btn-danger deleteBtn">
                              <i class="fas fa-times"></i>Delete
                            </button>
                            <div class="_overlay"></div>
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

  {{-- Upload Modal --}}
  <div class="modal fade" tabindex="-1" role="dialog" id="uploadModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Upload Images</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Max image size: 6MB</p>

          <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="dropzone"
            id="mydropzone">@csrf
            <div class="fallback">
              <input name="file" type="file" multiple />
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger px-4" data-dismiss="modal">Close</button>
          <a href="{{ route('gallery') }}" class="btn btn-primary px-4">Refresh Gallery</a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('head')
  <link rel="stylesheet" href="/assets/modules/dropzonejs/dropzone.min.css">
@endsection

@section('footer')
  <script src="/assets/modules/dropzonejs/dropzone.min.js"></script>

  <script>
    var dropzone = new Dropzone("#mydropzone", {
      maxFilesize: 6,
    });

    $('.deleteBtn').click(function(e) {
      let id = $(this).data('id');
      let _url = '{{ url('admin/gallery') }}/' + id;
      let token = $(this).data('token');
      // Reduce opacity
      $('#img_' + id).css('opacity', 0.5);
      $.ajax({
        type: "delete",
        url: _url,
        data: {
          "id": id,
          "_token": token,
        },
        dataType: "JSON",
        success: function(res) {
          // Remove image from DOM
          $('#img_' + id).hide();
        }
      });
    });
  </script>
@endsection
