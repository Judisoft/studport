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
  <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/aos/aos.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
    
    @yield('header_styles')
<!--end of page level css-->
<style>
.nav-link, .dropdown-item{
    font-family: 'Roboto Mono', monospace !important;
    color: #17224f !important;
    font-weight: 600 !important;
}

.features{
	color:#233477 !important;
	font-weight: 500 !important;
}
.fw-700{
  font-weight: 700;
}
.fw-500{
  font-weight: 500;
}
.fw-400{
  font-weight: 400;
}
</style>
</head>
<body class="snippet-body">
<nav class="navbar main-nav border-bottom navbar-expand-lg fixed-top  px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/my_logo.png')}}" style="height: 60px;" alt="logo"><span class="h5  text-dark text-capitalize px-2"><b class="text-dark" style="padding-top: 5px; font-weight: 500;"></b></span></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item @@contact">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('about_us')}}">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li class="dropdown dropdown-submenu dropright">
              <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>

              <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                <li><a class="dropdown-item" href="{{URL::to('questions')}}">Questions and answer</a></li>
                <li><a class="dropdown-item" href="index.html">Online Courses</a></li>
                <li><a class="dropdown-item" href="index.html">Digital Library</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="homepage-2.html">General IT Support</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Internship Placements</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Online Application</a></li>
            <li><a class="dropdown-item active3" href="{{URL::to('news')}}">Tutoring Jobs</a></li>
          </ul>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
        @if(Sentinel::guest())
        <li class="nav-item {!! (Request::is('login') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{route('my-account')}}">My Account</a>
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
            <h5 class="text-white" style="font-weight: 700;font-family: 'Roboto Mono', monospace !important;">Follow Us </h5>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item mt-3">
                <a href="#"style="padding-top: 10px !important;"><i class="ti-facebook text-primary"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="padding-top: 10px !important;"><i class="ti-youtube text-primary"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="padding-top: 10px !important;"><i class="ti-twitter text-primary"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="padding-top: 10px !important;"><i class="ti-instagram text-primary"></i></a>
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
            <h6>Links</h6>
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
  <div class="text-center py-4" style="background-color: #17224f !important;">
    <b><small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="{{ route('home') }}" class="text-light">FalconsTech</a></small></b>
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
  <script>
  /*
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= 10) {
            $("nav").addClass("shadow");
        } else {
            $("nav").removeClass("shadow");
        }
    });
  */
</script>
@yield('footer_scripts')
</body>

</html>
