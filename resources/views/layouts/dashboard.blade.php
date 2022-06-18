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
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <nav class="navbar navbar-expand-lg main-navbar bg-primary">
        <ul class="navbar-nav w-100 justify-content-between">
          <li>
            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
          </li>

          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user" aria-expanded="false">
              <img alt="image" src="/assets/admin/avatar/avatar-4.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">
                Logged in {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', auth()->user()->last_logged_in)->diffForHumans() }}
              </div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand mb-4">
            <a href="{{ route('dashboard') }}">
              <img src="/assets/img/logo.png" class="sLogo" alt="{{ config('app.name') }}">
            </a>
          </div>

          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class="active">
              <a href="{{ route('dashboard') }}" class="nav-link" data-toggle="tooltip"
                data-original-title="Dashboard"><i class="fas fa-fire"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li><a class="nav-link" href="{{ route('upload') }}" data-toggle="tooltip"
                data-original-title="Upload">
                <i class="far fa-square"></i> <span>Upload Images</span></a>
            </li>

            <li><a class="nav-link" href="{{ route('gallery') }}" data-toggle="tooltip"
                data-original-title="gallery">
                <i class="far fa-square"></i> <span>Gallery</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i>
                <span>Portfolio</span></a>
              <ul class="dropdown-menu" style="display: none;">
                <li><a class="nav-link" href="layout-transparent.html">View Portfolio</a></li>
                <li><a class="nav-link" href="layout-default.html">Add Photo</a></li>
              </ul>
            </li>

            <li><a class="nav-link" href="#" data-toggle="tooltip" data-original-title="Testimonials">
                <i class="far fa-square"></i> <span>Testimonials</span></a>
            </li>

            <li><a class="nav-link" href="#" data-toggle="tooltip" data-original-title="Settings">
                <i class="fas fa-cog"></i> <span>Settings</span></a>
            </li>
          </ul>

          {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('logout') }}" class="btn btn-danger btn-lg btn-block btn-icon-split"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i> Log Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
          </div> --}}

        </aside>
      </div>

      <!-- Main Content -->
      @yield('content')

      <footer class="main-footer">
        <div class="text-center">
          Copyright &copy; 2022 <div class="bullet"></div> FlexEvent</a>
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="/assets/modules/jquery.min.js"></script>
  <script src="/assets/modules/tooltip.js"></script>
  <script src="/assets/modules/popper.js"></script>
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="/assets/admin/scripts.js"></script>
  {{-- <script src="/assets/admin/custom.js"></script> --}}
</body>

</html>
