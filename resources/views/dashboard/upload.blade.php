@extends('layouts.dashboard', ['title' => 'Upload Images'])

@section('content')
  <div class="main-content">
    <section class="section">
      {{-- <div class="section-header">
        <h1>Upload Images</h1>
        <div class="section-header-button">
        </div>

      </div> --}}
      <div class="section-body">

        <h2 class="section_title">Upload Images</h2>
        <p class="section_desc">
          You can upload images to Gallery or portfolio
        </p>

        <div class="row mt-4">
          <div class="col-12">
            {{-- Error Messages --}}
            @include('inc.messages')

            <div class="card">
              <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="form-group m-1">
                    <select name="location" class="form-control" id="location" required>
                      <option value="gallery">Gallery</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary p-1 px-5">Upload</button>
                </div>

                <div class="card-body">
                  <div class="images_div d-flex justify-content-center p-4">
                    <div class="form-group">
                      <input type="file" name="image[]" class="form-control" id="image" multiple>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
