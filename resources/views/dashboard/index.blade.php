@extends('layouts.dashboard', ['title' => 'Dashboard'])

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section_title mb-4">Dashboard</h2>

        {{-- STATS --}}
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-clone"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Services</h4>
                </div>
                <div class="card-body">
                  {{ $service_count }}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-2">
              <div class="card-icon shadow-success bg-success">
                <i class="far fa-comments"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Testimonials</h4>
                </div>
                <div class="card-body">{{ $testimonial_count }}</div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-2">
              <div class="card-icon shadow-danger bg-danger">
                <i class="far fa-images"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Images</h4>
                </div>
                <div class="card-body">{{ $image_count }}</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-8">
            <div class="card">
              <div class="card-header">
                <h4>Testimonials</h4>
                <div class="card-header-action">
                  <a href="{{ route('testimonials') }}" class="btn btn-primary">Manage <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>

              <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th>#</th>
                        <th>Client</th>
                        <th>Content</th>
                      </tr>

                      @if (count($testimonials))
                        @php $x = 1; @endphp
                        @foreach ($testimonials as $item)
                          {{-- GALLERY ITEM --}}
                          <tr>
                            <td>{{ $x++ }}</td>
                            <td class="font-weight-600">{{ $item->client_name }}</td>
                            <td>
                              {{ $item->getExcerpt(100) }}
                            </td>
                          </tr>
                        @endforeach
                      @else
                        <tr>
                          <td colspan="3" class="text-center font-weight-600">No Testimonials Found!</td>
                        </tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h4>Gallery</h4>
                <div class="card-header-action">
                  <a href="{{ route('gallery') }}" class="btn btn-primary">Manage <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>

              <div class="card-body">
                @if (count($images) > 0)
                  <div class="gallery gallery-md">
                    @foreach ($images as $image)
                      <div class="gallery-item" data-image="{{ url($image->url) }}"></div>
                    @endforeach
                    {{-- Show more images count --}}
                    @if ($image_count - $images->count())
                      <div class="gallery-item gallery-more">
                        <div>+{{ $image_count - $images->count() }}</div>
                      </div>
                    @endif
                  </div>
                @else
                  <h6 class="text-center p-3">No Image Found!</h6>
                @endif
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
