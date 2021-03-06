<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            StudPort
        @show
    </title>
    <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/aos/aos.css')}}">

  <!-- CUSTOM CSS -->
  <link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
    
    @yield('header_styles')
<!--end of page level css-->
</head>
<style>
.btn-sell{
    color: #fff;
    background-color: var(--primary);
    padding: 0;
    border-radius:1.5em;
    font-weight: 700;

}

</style>
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav fixed-top navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0" style="overflow-x: hidden;">
  <div class="container">
    <a class="navbar-brand" href="index.html">logo here</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item {!! (Request::is('/') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown {!! (Request::is('services') ? 'active' : '') !!}">
          <a class="nav-link dropdown-toggle" href="{{ route('home') }}" data-toggle="dropdown">Services
            <span><i class="ti-angle-down"></i></span>
          </a>
        
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.html">Q&A Managemet</a></li>
            <li><a class="dropdown-item" href="homepage-2.html">General IT Support</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Jobs</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Internship Placements</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Online Application</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown @@pages">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Academics
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @@team" href="team.html">Questions and answer</a></li>
            <li><a class="dropdown-item @@career" href="career.html">Online Courses</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Digital Library</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {!! (Request::is('about_us') ? 'active' : '') !!}" href="{{route('about')}}">Admissions</a>
        </li>
            <li class="nav-item dropdown {!! (Request::is('about_us') ? 'active' : '') !!}">
          <a class="nav-link dropdown-toggle" href="{{route('about')}}" data-toggle="dropdown">About
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @@team" href="team.html">Our Team</a></li>
            <li><a class="dropdown-item @@career" href="career.html">FAQs</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Our Mission</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Privacy Policies</a></li>
          </ul>
        </li>
        <li class="nav-item {!! (Request::is('contact') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
        <li class="nav-item {!! (Request::is('register') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item {!! (Request::is('login') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item mt-3">
          <a class="btn-sell p-2 text-white" href="{{route('login')}}"><i class="ti-shopping-cart px-2"></i>Buy Textbooks</a>
        </li>
      </ul>
    </div>
  </div>
</nav>                    
@yield('top')
@yield('content')
<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html">logo here</a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href="team.html">Teams</a></li>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="FAQ.html">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href="sign-up.html">Singup</a></li>
              <li><a href="sign-in.html">Login</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="career.html">Career</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Investor</a></li>
              <li><a href="privacy.html">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="{{ route('home') }}" class="text-light">FalconsTech</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="{{asset('plugins1/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins1/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('plugins1/slick/slick.min.js')}}"></script>
  <script src="{{asset('plugins1/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('plugins1/syotimer/jquery.syotimer.min.js')}}"></script>
  <script src="{{asset('plugins1/aos/aos.js')}}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{asset('plugins1/google-map/gmap.js')}}"></script>
  <script src="{{asset('plugins1/js/script.js')}}"></script>

</body>

</html>
