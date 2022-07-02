@extends('layouts.dashboard', ['title' => 'Services'])

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section_title">Services</h2>
        <p class="section_desc">
          You can manage all services, such as adding, editing and deleting.
        </p>
        <div class="row mt-4">
          <div class="col-12">
            {{-- Page Feedback/Messages --}}
            @include('inc.messages')

            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Manage Services</h4>
                <a href="{{ route('services.create') }}" class="btn btn-primary p-1 px-4">Add New</a>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="data_table">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th style="min-width: 70px;padding-left: 10px">Title</th>
                        <th>Photo</th>
                        <th>Content</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @if (count($services) > 0)
                        @php $x = 1; @endphp
                        <div class="row">
                          @foreach ($services as $item)
                            <tr>
                              <td>{{ $x++ }}</td>
                              <td>{{ $item->title }}</td>
                              <td>
                                <img src="{{ $item->getPhoto() }}" width="60" height="60"
                                  class="rounded-circle m-2 img_cover" alt="{{ $item->title }}">
                              </td>
                              <td>
                                {{ $item->getExcerpt(120) }}
                              </td>
                              <td>
                                <div class="d-flex">
                                  <a href="{{ route('services.edit', ['id' => $item->id]) }}"
                                    class="btn btn-primary mr-2">Edit
                                  </a>
                                  <form action="{{ route('services.delete', ['id' => $item->id]) }}" method="post">
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
