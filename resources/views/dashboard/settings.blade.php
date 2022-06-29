@extends('layouts.dashboard', ['title' => 'Settings'])

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section_title">Settings</h2>
        <p class="section_desc">
          {{-- Page Feedback/Messages --}}
          @include('inc.messages')

        <div class="row pt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>General Settings</h4>
              </div>

              <div class="card-body">
                <form action="{{ route('settings.update') }}" method="post">
                  @csrf
                  <div class="form-group mb-4">
                    <label>Site Title</label>
                    <input type="text" name="site_title" class="form-control" required
                      value="{{ $settings->site_title }}">
                  </div>

                  <div class="form-group mb-4">
                    <label>Site Tagline</label>
                    <input type="text" name="tagline" class="form-control" required value="{{ $settings->tagline }}">
                  </div>

                  <div class="form-group mb-4">
                    <label>Admin Name</label>
                    <input type="text" name="name" class="form-control" required value="{{ $user->name }}">
                  </div>

                  <div class="form-group mb-4">
                    <label>Admin Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="email" required
                      value="{{ $user->email }}">
                  </div>

                  <div class="form-group mb-4">
                    <label>Site Email</label>
                    <input type="email" name="site_email" class="form-control" required
                      value="{{ $settings->site_email }}">
                  </div>

                  <div class="form-group mb-4">
                    <label>Site Phone Number</label>
                    <input type="text" name="site_phone_no" class="form-control"
                      value="{{ $settings->site_phone_no }}" required>
                  </div>

                  <div class="form-group mb-4">
                    <label>Site Address</label>
                    <input type="text" name="site_address" class="form-control" required
                      value="{{ $settings->site_address }}">
                  </div>

                  <div class="form-group mb-4">
                    <button class="btn btn-primary px-5">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        {{-- Password Settings --}}
        <div class="row pt-4" id="password">
          <div class="col-12">
            {{-- Custom error message --}}
            @if (session('password_success'))
              <div class="alert alert-success" role="alert">
                {{ session('password_success') }}
              </div>
            @endif
            @if (session('password_error'))
              <div class="alert alert-danger" role="alert">
                {{ session('password_error') }}
              </div>
            @endif

            <div class="card">
              <div class="card-header">
                <h4>Change Password</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('settings.password') }}" method="post">
                  @csrf
                  <div class="form-group mb-4">
                    <label>Current Password</label>
                    <input type="password" name="current_password" required
                      class="form-control @error('current_password') is-invalid @enderror">

                    @error('current_password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group mb-4">
                    <label>New Password</label>
                    <input type="password" name="password" required
                      class="form-control @error('password') is-invalid @enderror">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group mb-4">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" required
                      class="form-control @error('confirm_password') is-invalid @enderror">

                    @error('confirm_password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group mb-4">
                    <button class="btn btn-primary px-5">Change Password</button>
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
