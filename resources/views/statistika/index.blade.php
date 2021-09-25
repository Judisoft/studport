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
</style>
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
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
<!--==================================
=            Hero Section            =
===================================-->

<section class="section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 p-0">
				<!-- Banner Contents -->
				<div class="block text-center">
					<h1>Digital Pedagogic Statistics <b class="text-danger">Management Portal</b></h1>
					<!-- Promo Video -->
					<div class="video mt-5">
						<img class="img-fluid" src="{{asset('images/thumbs/promo-video-thumbnail.jpg')}}" alt="video-thumbnail">
						<div class="video-button video-box">
							<!-- Video Play Button -->
							<a href="javascript:void(0)">
								<i class="ti-control-play" data-video="https://www.youtube.com/embed/jrkvirglgaQ?autoplay=1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Hero Section  ====-->

<!--==============================
=            Services            =
===============================-->
<section class="services section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Section Title -->
				<div class="section-title">
					<h1>What is <a href="#">Statistika</a></h1>
					<p><a href="#">Statistika</a> is an intuitive and easy-to-use web app <br>that tracks work coverage, assiduity and generates pedagogic reports and statistics.
						No late tasks, No stress. We've got you covered!</p>
				</div> 
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<!-- Service 01 -->
				<div class="service-block shadow">
	<!-- Icon -->
	<i class="ti-dashboard"></i>
	<h3>Fast and Reliable</h3>
	<p>Statistika gets rid of routine calculations which are often times boring and time consuming</p>
</div>
				<!-- Service 02 -->
				<div class="service-block shadow">
	<!-- Icon -->
	<i class="ti-headphone-alt"></i>
	<h3>24/7 Support</h3>
	<p>Our support team is present 24/7 to respond to you. <br> Call Us:<a href="tel: (+237)672076995">(+237)672076995</a> <br> Email Us: <a href="mailto:contact@studentportal-cm.com">contact@studentportal-cm.com</a></p>
</div>
			</div>
			<div class="col-lg-4 m-auto">
				<div class="app-preview">
					<img src="{{asset('images/feature/iphone.jpg')}}" alt="iphone">				
				</div>
			</div>
			<div class="col-lg-4 col-md-6 align-self-center">
				<!-- Service 03 -->
				<div class="service-block shadow">
	<!-- Icon -->
	<i class="ti-settings"></i>
	<h3>Highly Customizable</h3>
	<p>Customize Statistika can be customized for personal, departmental and institutional use</p>
</div>
				<!-- Service 04 -->
				<div class="service-block shadow">
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
				<div class="feature-content">
					<h1>The Complete Toolkit For Statistics  Management</h1>
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
				<div class="feature-content">
					<h1>The Complete toolkit for Report Management</h1>
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
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html"><img src="{{asset('images/logo-alt.png" alt="footer-logo')}}"></a>
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
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></small class="text-secondary">
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