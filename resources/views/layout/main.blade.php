<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hackathon 3.0</title>
    <meta name="theme-color" content="#1d2134">
    <meta name="keywords" content="Hackathon, BNCC, Technoscape, Lomba Coding, Event Coding, Coding Competition">
    <meta name="robots" content="all">
    <meta name="description" content="Hackathon merupakan lomba coding selama 24 jam di mana setiap tim ditantang memberikan solusi atas suatu permasalahan dengan menghasilkan produk berupa aplikasi ataupun website.">
    <link rel="icon" href="{{asset('assets/img/Hackathon-logo.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body data-spy="scroll" data-target=".navbar">
  <nav class="nav navbar navbar-expand-lg navbar-light w-100">
      <a class="navbar-brand" href="/">
        <img
          class="nav-img mr-auto"
          src="assets/img/Hackathon-logo.png"
          alt="Hackathon-logo"
        />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <div class="nav-hamburger" id="ham1"></div>
        <div class="nav-hamburger" id="ham2"></div>
        <div class="nav-hamburger" id="ham3"></div>
      </button>

      <div class="collapse navbar-collapse nav-a" id="navbarSupportedContent">
        <div class="nav-main d-flex w-100">
          <ul class="navbar-nav main">
            <li class="nav-item">
              <a class="text-light nav-link active" href="/#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="text-light nav-link" href="/#about">About</a>
            </li>
            <li class="nav-item">
              <a class="text-light nav-link" href="/#faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="text-light nav-link" href="/#sponsor">Sponsor</a>
            </li>
            <li class="nav-item">
              <a class="text-light nav-link" href="/#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav nav-right">
          <!-- @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a class="text-light nav-link" id="register" href="/home">Dashboard</a>
            </li>
            @else
            <li class="nav-item">
                <a class="text-light nav-link" href="/ login">Login</a>
            </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="text-light nav-link" id="register" href="/register">Register</a>
                </li>
                @endif
            @endauth
          @endif -->
            <!-- <li class="nav-item">
                <a class="text-light nav-link" href="/ login">Login</a>
            </li>
            <li class="nav-item">
                <a class="text-light nav-link" id="register" href="/register">Register</a>
            </li> -->
            <li class="nav-item">
                <span class="text-light nav-link" id="register">Coming Soon</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
    
    <script src="{{asset('assets/lib/jquery.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('script')
  </body>
</html>