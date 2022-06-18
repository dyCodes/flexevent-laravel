<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>{{ $title . ' - ' . config('app.name') }}</title>

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon" />
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <!-- Vendor Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">
  <!-- Admin Template CSS -->
  <link rel="stylesheet" href="/assets/admin/style.css">
  <link rel="stylesheet" href="/assets/admin/components.css">
  {{-- <link rel="stylesheet" href="/assets/admin/custom.css"> --}}
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="/assets/img/logo.png" alt="logo" width="180" class="">
            </div>

            <!------- Content ------->
            @yield('content')

            <div class="simple-footer">
              Copyright © {{ config('app.name') . ' ' . date('Y') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- JS Scripts -->
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
