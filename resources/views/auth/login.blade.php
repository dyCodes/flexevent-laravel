@extends('layouts.guest', ['title' => 'Log In'])

@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h4>Login</h4>
    </div>

    <div class="card-body">
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" autocomplete="email" autofocus required>

          {{-- Error Message --}}
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <div class="d-block">
            <label for="password" class="control-label">Password</label>
            <div class="float-right">
              <a href="{{ route('password.request') }}" class="text-small">
                Forgot Password?
              </a>
            </div>
          </div>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" autocomplete="current-password" required>

          {{-- Error Message --}}
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" name="remember" id="remember-me"
              {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember-me">Remember Me</label>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
            Login
          </button>
        </div>
      </form>

      {{-- <div class="mt-4 text-muted text-center">
        Don't have an account? <a href="{{ route('register') }}">Create One</a>
      </div> --}}
    </div>
  </div>
@endsection
