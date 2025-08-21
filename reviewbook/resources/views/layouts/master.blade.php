<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Company')</title>

  {{-- Vendor CSS dari template Company --}}
  <link href="{{ asset('template.company/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template.company/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template.company/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template.company/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template.company/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  {{-- Main CSS template --}}
  <link href="{{ asset('template.company/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

  {{-- ======= Header / Navbar (sederhana) ======= --}}
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
      <div class="logo">
        <h1><a href="/">COMPANY.</a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="/">Home</a></li>
          <li><a class="nav-link" href="/register">Register</a></li>
          <li><a class="nav-link" href="/welcome">Welcome</a></li>
        </ul>
      </nav>
    </div>
  </header>

  {{-- ======= Konten halaman ======= --}}
  <main class="container mt-5">
    @yield('content')
  </main>

  {{-- ======= Footer ======= --}}
  <footer class="mt-5 py-4 text-center bg-light">
    <small>&copy; Company. All Rights Reserved</small>
  </footer>

  {{-- Vendor JS dari template Company --}}
  <script src="{{ asset('template.company/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template.company/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template.company/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template.company/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template.company/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('template.company/assets/vendor/php-email-form/validate.js') }}"></script>

  {{-- Main JS template --}}
  <script src="{{ asset('template.company/assets/js/main.js') }}"></script>
</body>
</html>