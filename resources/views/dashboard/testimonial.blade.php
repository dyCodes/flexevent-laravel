@extends('layouts.dashboard', ['title' => 'Testimonials'])

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section_title">Testimonials</h2>
        <p class="section_desc">
          You can manage all testimonials, such as adding, deleting and more.
        </p>
        <div class="row mt-4">
          <div class="col-12">
            {{-- Page Feedback/Messages --}}
            @include('inc.messages')

            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Manage Testimonials</h4>
                <a href="{{ route('testimonials.create') }}" class="btn btn-primary p-1 px-4">Add New</a>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="data_table">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th>Client Name</th>
                        <th>Photo</th>
                        <th>Content</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @if (count($testimonials) > 0)
                        @php $x = 1; @endphp
                        <div class="row">
                          @foreach ($testimonials as $item)
                            <tr>
                              <td>{{ $x++ }}</td>
                              <td>{{ $item->client_name }}</td>
                              <td>
                                <img src="{{ $item->getPhoto() }}" class="rounded-circle m-2" width="60"
                                  height="60" alt="{{ $item->client_name }}">
                              </td>
                              <td>
                                <p>{{ $item->getExcerpt(80) }}</p>
                              </td>
                              <td>
                                <div class="d-flex">
                                  <a href="{{ route('testimonials.edit', ['id' => $item->id]) }}"
                                    class="btn btn-primary mr-2">Edit
                                  </a>
                                  <form action="{{ route('testimonials.delete', ['id' => $item->id]) }}" method="post">
                                    @csrf <button class="btn btn-danger">Delete</button>
                                  </form>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </div>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

{{-- Add custom page files to Head --}}
@section('head')
  <link rel="stylesheet" href="/assets/modules/datatables/datatables.min.css">
@endsection
{{-- Add custom page files to Footer --}}
@section('footer')
  <script src="/assets/modules/datatables/datatables.min.js"></script>
  {{-- Init DataTable --}}
  <script>
    $("#data_table").dataTable({
      "columnDefs": [{
        "sortable": false,
        "targets": [2, 3, 4]
      }]
    });
  </script>
@endsection
