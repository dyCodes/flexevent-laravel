@php
function is_active_page($page)
{
    return Request::is($page) ? 'active' : '';
}
@endphp

<nav class="navbar navbar-expand-lg main-navbar">
  <ul class="navbar-nav w-100 justify-content-between">
    <li>
      <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
    </li>

    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"
        aria-expanded="false">
        <img alt="image" src="/assets/admin/avatar/avatar-4.png" class="rounded-circle mr-1">
        <div class="d-inline-block">{{ auth()->user()->name }}</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">
          Logged in
          {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', auth()->user()->last_logged_in)->diffForHumans() }}
        </div>

        <a href="features-settings" class="dropdown-item has-icon">
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
        <img src="/assets/img/logo-dark.png" class="sLogo" alt="{{ config('app.name') }}">
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>

      <li class="{{ is_active_page('admin_dashboard') }}">
        <a href="{{ route('dashboard') }}" class="nav-link" data-toggle="tooltip" data-original-title="Dashboard"><i
            class="fas fa-fire"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="{{ is_active_page('admin/gallery') }}">
        <a class="nav-link" href="{{ route('gallery') }}" data-toggle="tooltip" data-original-title="gallery">
          <i class="far fa-images"></i> <span>Gallery</span></a>
      </li>

      <li class="dropdown {{ is_active_page('admin/services') }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-clone"></i>
          <span>Services</span></a>

        <ul class="dropdown-menu" style="display: none;">
          <li><a class="nav-link" href="{{ route('testimonials') }}">View Services</a></li>
          <li><a class="nav-link" href="{{ route('testimonials.create') }}">Add New</a></li>
        </ul>
      </li>

      <li class="dropdown {{ is_active_page('admin/testimonials') }}">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-comments"></i>
          <span>Testimonials</span></a>

        <ul class="dropdown-menu" style="display: none;">
          <li><a class="nav-link" href="{{ route('testimonials') }}">View Testimonials</a></li>
          <li><a class="nav-link" href="{{ route('testimonials.create') }}">Add New</a></li>
        </ul>
      </li>

      <li class="{{ is_active_page('admin/settings') }}">
        <a class="nav-link" href="{{ route('settings') }}" data-toggle="tooltip" data-original-title="Settings">
          <i class="fas fa-cog"></i> <span>Settings</span></a>
      </li>

      <li>
        <a class="nav-link" href="{{ route('logout') }}" data-toggle="tooltip" data-original-title="Logout"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
      </li>
    </ul>
  </aside>
</div>
