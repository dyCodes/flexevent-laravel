@extends('layouts.guest', ['title' => 'Reset Password'])

@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h4>Reset Password</h4>
    </div>

    <div class="card-body">
      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password" class="d-block">Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
            autocomplete="new-password" required>

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
            Reset Password
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
