@extends('layouts.guest', ['title' => 'Reset Password'])

@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h4>Forgot Password</h4>
    </div>

    <div class="card-body">
      @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
      @else
        <p class="text-muted">We will send a link to reset your password</p>
      @endif

      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
          {{-- Error Message --}}
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block">
            Send password reset link
          </button>
        </div>
      </form>

      <div class="mt-4 text-muted text-center">
        <a href="{{ route('login') }}">Login</a>
      </div>
    </div>
  </div>
@endsection
