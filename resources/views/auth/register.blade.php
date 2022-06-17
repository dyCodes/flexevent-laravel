@extends('layouts.guest', ['title' => 'Sign Up'])

@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h4>Register</h4>
    </div>

    <div class="card-body">

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
          <label for="name">Full Name</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">

          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password" class="d-block">Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" autocomplete="new-password" required>

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password2" class="d-block">Password Confirmation</label>
          <input id="password2" type="password" class="form-control" name="password_confirmation"
            autocomplete="new-password" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block">
            Register
          </button>
        </div>
      </form>

      <div class="mt-4 text-muted text-center">
        Already have an account? <a href="{{ route('login') }}">Login</a>
      </div>
    </div>

  </div>
@endsection
