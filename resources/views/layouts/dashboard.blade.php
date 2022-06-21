<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title . ' - ' . config('app.name') }}</title>

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon" />
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <!-- CSS Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="/assets/modules/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/admin/style.css">
  <link rel="stylesheet" href="/assets/admin/components.css">
  <link rel="stylesheet" href="/assets/admin/custom.css">
  {{-- Include custom page files in head --}}
  @yield('head')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <header>
        @include('layouts.navigation')
      </header>

      <!-- Main Content -->
      @yield('content')

      <footer class="main-footer">
        <div class="text-center">
          Copyright &copy; 2022 <div class="bullet"></div> FlexEvent</a>
        </div>
      </footer>

      <div id="page_overlay"></div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="/assets/modules/jquery.min.js"></script>
  <script src="/assets/modules/tooltip.js"></script>
  <script src="/assets/modules/popper.js"></script>
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  {{-- Include custom page files in footer --}}
  @yield('footer')

  <!-- Template JS File -->
  <script src="/assets/admin/scripts.js"></script>
  <script>
    // Prevent multiple form submit
    $(function() {
      // Add overlay on form submit
      $('#app form').on('submit', function() {
        $('#page_overlay').addClass('show');
      });
    });
  </script>
</body>

</html>
