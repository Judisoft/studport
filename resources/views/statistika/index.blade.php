<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            StudPort Statistika
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
  <!--end of page level css-->  
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
</head>
<style>
h1{
    font-weight: 600;
    color: var(--dark);
}
p{
  font-weight: 400;
	font-size: 18px;
}
.services .service-block i {
  color: var(--danger);
  font-weight: 700;
  font-size: 28px;
}
.services .service-block h3 {
  color: var(--danger);
  font-size: 20px;
  font-weight: 700;
}
.service-block:hover{
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.scroll-top-to{
  background-color: var(--danger);
}
.fw-700{
  font-weight: 700;
}
</style>
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 fixed-top">
  <div class="container">
    <a class="navbar-brand text-danger" href="{{URL::to('statistika/index')}}" style="font-family: 'Gochi Hand', cursive;font-size: 28px;">StatistiKa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item @@about">
          <a class="nav-link" href="{{route('login')}}"><i class="ti-lock px-2"></i>Sign In</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="{{route('register')}}"><i class="ti-user px-2"></i>Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="font-weight-bold mb-4">Keep track of work coverage and assiduity with <b style="color: var(--danger);"> Statistika</b></h1>
				<br />
          @if(Sentinel::guest())
            <a href="{{route('register')}}" class="btn btn-main-md rounded-0 fw-700" style="background-color:var(--danger);font-family: 'Roboto Mono', monospace !important;">Get Started Now <i class="ti-arrow-right"></i></a>
          @else
            <a href="{{URL::to('statistika/create')}}" class="btn btn-main-md rounded-0 fw-700" style="background-color:var(--danger);font-family: 'Roboto Mono', monospace !important;"> Manage my statistics <i class="ti-bar-chart"></i></a>
          @endif
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="{{asset('images/feature/featured-article.jpg')}}" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--==============================
=            Services            =
===============================-->
<section class="services section mr-auto">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<!-- Section Title -->
				<div class="section-title">
					<h1>What is <a href="#" class="text-danger">Statistika</a></h1>
					<p class="p-3">
            <a href="#">Statistika</a> is an intuitive and easy-to-use web app <br>
            that tracks work coverage, assiduity and generates pedagogic reports and statistics.
					</p>
				</div> 
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<!-- Service 01 -->
				<div class="service-block">
	<!-- Icon -->
	<i class="ti-dashboard"></i>
	<h3>Fast and Reliable</h3>
	<p>Statistika gets rid of routine calculations which are often times boring and time consuming</p>
</div>
				<!-- Service 02 -->
<div class="service-block">
	<!-- Icon -->
	<i class="ti-headphone-alt"></i>
	<h3>24/7 Support</h3>
	<p>Call Us:<a href="tel: (+237)672076995">(+237)672076995</a> <br> Email Us: <a href="mailto:contact@studentportal-cm.com">contact@studentportal-cm.com</a></p>
</div>
			</div>
			<div class="col-lg-4">
        <h1 class="font-weight-bold mb-2 text-center">Why use <b class="text-danger">Statistika</b></h1>
				<div class="app-preview">
					<img class="img-fluid" src="{{asset('images/feature/home.svg')}}" alt="features">			
				</div>
			</div>
			<div class="col-lg-4 col-md-6 align-self-center">
				<!-- Service 03 -->
				<div class="service-block">
	<!-- Icon -->
	<i class="ti-settings"></i>
	<h3>Highly Customizable</h3>
	<p>Statistika can be customized for personal, departmental and institutional use</p>
</div>
				<!-- Service 04 -->
				<div class="service-block">
	<!-- Icon -->
	<i class="ti-stats-up"></i>
	<h3>Scalability and Performance</h3>
	<p>Get statistics for an entire department or institution in one click</p>
</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Services  ====-->

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section" id="features">
	<div class="container p-0">
		<div class="row no-gutters">
			<div class="col-lg-6">
				<!-- Feature Image -->
				<div class="feature-image"  data-aos="fade-right">
					<img class="img-fluid" src="{{asset('images/feature/f4.svg')}}" alt="" style="height: 350px;">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<!-- Feature Content -->
				<div class="feature-content p-2">
					<h1>The Complete Toolkit For <a href="#" class="text-danger">Statistics  Management</a></h1>
					<p>Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit eget malesuada.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature section bg-gray">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-lg-4 ml-auto align-self-center">
				<!-- Feature Content -->
				<div class="feature-content p-2">
					<h1>The Complete toolkit for <a href="#" class="text-danger">Report Management</a></h1>
					<p>Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<!-- Feature Image -->
				<div class="feature-image right" data-aos="fade-left">
					<img class="img-fluid" src="{{asset('images/feature/f2.svg')}}" alt="ipad" style="height: 350px;">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="#">FalconsTech</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
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
  
  <script src="js/script.js"></script>
</body>